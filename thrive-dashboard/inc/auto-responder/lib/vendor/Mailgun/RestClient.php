<?PHP

/**
 * This class is a wrapper for the Guzzle (HTTP Client Library).
 */
class Thrive_Dash_Api_Mailgun_RestClient {
	/**
	 * @var string
	 */
	private $apiKey;

	/**
	 * @var sting
	 */
	protected $url;

	/**
	 * @param string $apiKey
	 * @param string $apiEndpoint
	 * @param string $apiVersion
	 * @param bool $ssl
	 */
	public function __construct( $apiKey, $apiEndpoint, $apiVersion, $ssl ) {
		$this->apiKey = $apiKey;
		$this->url    = $this->generateEndpoint( $apiEndpoint, $apiVersion, $ssl );
	}

	/**
	 * @param string $endpointUrl
	 * @param array $postData
	 * @param array $files
	 *
	 * @return \stdClass
	 *
	 * @throws GenericHTTPError
	 * @throws InvalidCredentials
	 * @throws Thrive_Dash_Api_Mailgun_MissingEndpoint
	 * @throws MissingRequiredParameters
	 */
	public function post( $endpointUrl, $postData = array(), $files = array() ) {

		$boundary = base_convert( uniqid( 'boundary', true ), 10, 36 );

		$payload = null;
		// Iterate through pre-built params and build payload:
		foreach ( $postData as $key => $value ) {
			if ( is_array( $value ) ) {
				$parent_key = $key;
				foreach ( $value as $key => $value ) {
					$payload .= '--' . $boundary;
					$payload .= "\r\n";
					$payload .= 'Content-Disposition: form-data; name="' . $parent_key . '[' . $key . ']"' . "\r\n\r\n";
					$payload .= $value;
					$payload .= "\r\n";
				}
			} else {
				$payload .= '--' . $boundary;
				$payload .= "\r\n";
				$payload .= 'Content-Disposition: form-data; name="' . $key . '"' . "\r\n\r\n";
				$payload .= $value;
				$payload .= "\r\n";
			}
		}

		$response = tve_dash_api_remote_post( $this->url . $endpointUrl, array(
			'body'      => $postData,
			'headers'   => array(
				'User-Agent'    => Thrive_Dash_Api_Mailgun_Api::SDK_USER_AGENT . '/' . Thrive_Dash_Api_Mailgun_Api::SDK_VERSION,
				'Authorization' => 'Basic ' . base64_encode( Thrive_Dash_Api_Mailgun_Api::API_USER . ':' . $this->apiKey ),
				'content-type'  => 'multipart/form-data; boundary=' . $boundary
			),
			'sslverify' => false,
		) );

		return $this->responseHandler( $response );
	}

	/**
	 * @param string $endpointUrl
	 * @param array $queryString
	 *
	 * @return \stdClass
	 *
	 * @throws GenericHTTPError
	 * @throws InvalidCredentials
	 * @throws Thrive_Dash_Api_Mailgun_MissingEndpoint
	 * @throws MissingRequiredParameters
	 */
	public function get( $endpointUrl, $queryString = array() ) {
		$response = $this->mgClient->get( $endpointUrl, [ 'query' => $queryString ] );

		return $this->responseHandler( $response );
	}

	/**
	 * @param string $endpointUrl
	 *
	 * @return \stdClass
	 *
	 * @throws GenericHTTPError
	 * @throws InvalidCredentials
	 * @throws Thrive_Dash_Api_Mailgun_MissingEndpoint
	 * @throws MissingRequiredParameters
	 */
	public function delete( $endpointUrl ) {
		$response = $this->mgClient->delete( $endpointUrl );

		return $this->responseHandler( $response );
	}

	/**
	 * @param ResponseInterface $responseObj
	 *
	 * @return \stdClass
	 *
	 * @throws GenericHTTPError
	 * @throws InvalidCredentials
	 * @throws Thrive_Dash_Api_Mailgun_MissingEndpoint
	 * @throws MissingRequiredParameters
	 */
	public function responseHandler( $responseObj ) {
		$httpResponseCode = $responseObj['response']['code'];
		if ( $httpResponseCode === 200 ) {
			$data             = (string) $responseObj['response']['message'];
			$jsonResponseData = json_decode( $data, false );
			$result           = new \stdClass();
			// return response data as json if possible, raw if not
			$result->http_response_body = $data && $jsonResponseData === null ? $data : $jsonResponseData;
		} elseif ( $httpResponseCode == 400 ) {
			throw new Thrive_Dash_Api_Mailgun_MissingRequiredParameters( Thrive_Dash_Api_Mailgun_ExceptionMessages::EXCEPTION_MISSING_REQUIRED_PARAMETERS . $this->getResponseExceptionMessage( $responseObj ) );
		} elseif ( $httpResponseCode == 401 ) {
			throw new Thrive_Dash_Api_Mailgun_InvalidCredentials( Thrive_Dash_Api_Mailgun_ExceptionMessages::EXCEPTION_INVALID_CREDENTIALS );
		} elseif ( $httpResponseCode == 404 ) {
			throw new Thrive_Dash_Api_Mailgun_MissingEndpoint( Thrive_Dash_Api_Mailgun_ExceptionMessages::EXCEPTION_MISSING_ENDPOINT . $this->getResponseExceptionMessage( $responseObj ) );
		} else {
			throw new Thrive_Dash_Api_Mailgun_GenericHTTPError( Thrive_Dash_Api_Mailgun_ExceptionMessages::EXCEPTION_GENERIC_HTTP_ERROR, $httpResponseCode, $responseObj->getBody() );
		}
		$result->http_response_code = $httpResponseCode;

		return $result;
	}

	/**
	 * @param string $apiEndpoint
	 * @param string $apiVersion
	 * @param bool $ssl
	 *
	 * @return string
	 */
	private function generateEndpoint( $apiEndpoint, $apiVersion, $ssl ) {
		if ( ! $ssl ) {
			return "http://" . $apiEndpoint . "/" . $apiVersion . "/";
		} else {
			return "https://" . $apiEndpoint . "/" . $apiVersion . "/";
		}
	}

	/**
	 * Add a file to the postBody.
	 *
	 * @param PostBodyInterface $postBody
	 * @param string $fieldName
	 * @param string|array $filePath
	 */
	private function addFile( PostBodyInterface $postBody, $fieldName, $filePath ) {
		$filename = null;
		// Backward compatibility code
		if ( is_array( $filePath ) ) {
			$filename = $filePath['remoteName'];
			$filePath = $filePath['filePath'];
		}

		// Remove leading @ symbol
		if ( strpos( $filePath, '@' ) === 0 ) {
			$filePath = substr( $filePath, 1 );
		}

		$postBody->addFile( new PostFile( $fieldName, fopen( $filePath, 'r' ), $filename ) );
	}
}
