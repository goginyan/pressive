<?php

function thrive_filter_default_theme_options( $options, $default_options ) {
	foreach ( $default_options as $key => $val ) {
		if ( ! isset( $options[ $key ] ) ) {
			$options[ $key ] = $default_options[ $key ];
		}
	}

	return $options;
}

function _thrive_get_item_template( $id = 0 ) {
	if ( is_home() && get_option( 'show_on_front' ) != 'page' ) {
		return "Default";
	}

	if ( is_page() ) {
		$template_name = get_post_meta( $id, '_wp_page_template', true );
		if ( $template_name && strpos( $template_name, "full" ) !== false ) {
			return "Full Width";
		}
		if ( $template_name && strpos( $template_name, "narrow" ) !== false ) {
			return "Narrow";
		}
		if ( $template_name && strpos( $template_name, "landing" ) !== false ) {
			return "Landing Page";
		}
	}

	$template_name = get_post_custom_values( '_thrive_meta_post_template', $id );
	$template_name = isset( $template_name[0] ) ? $template_name[0] : "";

	return $template_name;
}

/**
 * Parse the autoresponder code and generate a response array
 *
 * @param string $code The autoresponder code
 * @param array $options Parse options
 *
 * @return array Response array with the form fields and attributes
 */
function _thrive_parse_autoresponder_code( $code, $options = array() ) {
	$response = array(
		'form_action'        => "",
		'form_method'        => "POST",
		'elements'           => array(),
		'not_visible_inputs' => '',
		'hidden_inputs'      => "",
		'parse_status'       => 0,
	);

	if ( $code == "" ) {
		return $response;
	}

	$code = stripslashes( $code );
	$code = preg_replace( '#<script(.*?)>(.*?)</script>#smi', '', $code );
	$code = preg_replace( '#<style(.*?)>(.*?)</style>#smi', '', $code );
	$code = preg_replace( '#<link(.*?)>#smi', '', $code );
	$code = str_replace( "</link>", "", $code );
	$code = preg_replace( '#<!--(.*?)-->#smi', '', $code );
	$code = preg_replace( '#<!(�|-)(.*?)(�|-)>#smi', '', $code );

	$is_mailchimp = false;
	if ( strpos( strtolower( $code ), "mailchimp" ) !== false ||
	     stripos( strtolower( $code ), 'mc_embed_signup' ) !== false ||
	     stripos( strtolower( $code ), 'mc-embedded-subscribe' )
	) {
		$is_mailchimp = true;
	}

	$DOM = new DOMDocument;

	try {
		$loadDom = @$DOM->loadHTML( '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . $code );
		if ( ! $loadDom ) {
			return $response;
		}

		$form_elements = @$DOM->getElementsByTagName( 'form' );

		if ( $form_elements->length > 0 ) {
			$response['form_action'] = $form_elements->item( 0 )->getAttribute( 'action' );
			$response['form_method'] = $form_elements->item( 0 )->getAttribute( 'method' );
		}

		$allowed_types = array( 'text', 'hidden', 'email', 'checkbox' );

		$xpath  = new DOMXPath( $DOM );
		$inputs = $xpath->query( '//input', $form_elements->item( 0 ) );
		$length = $inputs->length;

		for ( $i = 0; $i < $length; $i ++ ) {

			/** @var DOMElement $element */
			$element = $inputs->item( $i );

			$element_type = $element->getAttribute( 'type' );
			if ( ! in_array( $element_type, $allowed_types ) ) {
				continue;
			}

			$orig_name     = $element->getAttribute( 'name' );
			$element_name  = _thrive_get_optin_name_attr_encoded( $orig_name );
			$element_value = $element->getAttribute( 'value' );

			switch ( $element_type ) {
				case 'hidden':
					$response['hidden_inputs'] .= '<input type="hidden" name="' . $orig_name . '" value="' . $element_value . '">';
					break;
				case 'text':
				case 'email':
					if ( $is_mailchimp && strlen( $orig_name ) > 30 ) {
						$temp_hidden_input = '<input type="text" style="position: absolute !important; left: -5000px !important;" name="' . $orig_name . '" value="' . str_replace( " ", "", $element_value ) . '" />';
						$response['not_visible_inputs'] .= $temp_hidden_input;
					} else {
						$response['elements'][ $element_name ] = array(
							'encoded_name' => $element_name,
							'name'         => $orig_name,
							'type'         => $element_type,
							'value'        => $element_value,
						);
					}
					break;
				case 'checkbox':
					$response['elements'][ $element_name ] = array(
						'encoded_name' => $element_name,
						'name'         => $orig_name,
						'type'         => $element_type,
						'value'        => $element_value,
					);
					break;
			}
		}

		$response['parse_status'] = 1;

	} catch ( Exception $e ) {
		$response['parse_status'] = 0;
	}

	return $response;
}

/*
 * Generate a new lighter/darker color from a color code
 * @param string $color Color code
 * @param int $per The percentage used for increasing/decreasing the color intensity
 * @return string The new color code
 */

function _thrive_colour_creator( $colour, $per ) {
	$colour = substr( $colour, 1 );
	$rgb    = '';
	$per    = $per / 100 * 255;

	if ( $per < 0 ) {
		$per = abs( $per );
		for ( $x = 0; $x < 3; $x ++ ) {
			$c = hexdec( substr( $colour, ( 2 * $x ), 2 ) ) - $per;
			$c = ( $c < 0 ) ? 0 : dechex( $c );
			$rgb .= ( strlen( $c ) < 2 ) ? '0' . $c : $c;
		}
	} else {
		for ( $x = 0; $x < 3; $x ++ ) {
			$c = hexdec( substr( $colour, ( 2 * $x ), 2 ) ) + $per;
			$c = ( $c > 255 ) ? 'ff' : dechex( $c );
			$rgb .= ( strlen( $c ) < 2 ) ? '0' . $c : $c;
		}
	}

	return '#' . $rgb;
}

/*
 * Searches for a position of a string from an array
 * @param string $haystack The string in which we search for the substring
 * @param array $needle
 * @param int $offset
 * @return boolean True if found, false otherwise
 */

function thrive_strposa( $haystack, $needle, $offset = 0 ) {
	if ( ! is_array( $needle ) ) {
		$needle = array( $needle );
	}
	foreach ( $needle as $query ) {
		if ( strpos( $haystack, $query, $offset ) !== false ) {
			return true;
		} // stop on first true result
	}

	return false;
}

/*
 * Returns a human readable elapsed time (requires PHP 5.3+ otherwise fallbacks on wp's human_time_diff())
 * @param string $timestamp Timestamp of the date we want to process
 * @param string $context 
 * @return string The time in the new format
 */

function thrive_human_time( $timestamp, $context = '' ) {

	if ( version_compare( PHP_VERSION, '5.3.0' ) < 0 ) { // PHP version less than 5.3?
		// Fallback on the WordPress's incomplete function which supports only up to days
		if ( $timestamp >= strtotime( '-30 days' ) ) { // Limit to 30 days old max.
			return sprintf( __( '%s ago', 'thrive' ), human_time_diff( $timestamp, current_time( 'timestamp' ) ) );
		} else { // Otherwise just display the date normally
			if ( $context == 'comment' ) {
				return sprintf( __( '%1$s at %2$s', 'thrive' ), get_comment_date(), get_comment_time() );
			} else {
				return sprintf( __( '%1$s at %2$s', 'thrive' ), get_the_date(), get_the_time() );
			}
		}
	}

	$current_time = new DateTime();
	$current_time->setTimestamp( current_time( 'timestamp' ) ); // Using WP's current_time() instead of "now" to reflect WP's timezone settings

	$date = new DateTime();
	$date->setTimestamp( $timestamp );
	$interval = $date->diff( $current_time );

	$how_many_years   = $interval->format( '%y' );
	$how_many_months  = $interval->format( '%m' );
	$how_many_days    = $interval->format( '%d' );
	$how_many_hours   = $interval->format( '%h' );
	$how_many_minutes = $interval->format( '%i' );
	$how_many_seconds = $interval->format( '%s' );

	// == Special case for Yesterday ==
	// If posted on 23:59 it won't display "yesterday" until 05:59 on the next day (6 hours after)
	if ( $timestamp > strtotime( "yesterday" ) && $timestamp < strtotime( "today" ) && $how_many_hours >= 6 ) {
		$output = __( 'Yesterday', 'thrive' );

		// === Years ===
	} else if ( $how_many_years == 1 ) {
		$output = __( 'Last year', 'thrive' ); // Alternative text: "1 year ago"
	} else if ( $how_many_years == 2 ) {
		$output = __( 'A couple of years ago', 'thrive' ); // Alternative text: "2 years ago"
	} else if ( $how_many_years > 2 ) {
		$output = sprintf( __( '%s years ago', 'thrive' ), $how_many_years ); // Ex: "3 years ago"
		// === Months ===
	} else if ( $how_many_months == 1 ) {
		$output = __( 'Last month', 'thrive' ); // Alternative text: "1 month ago"
	} else if ( $how_many_months == 2 ) {
		$output = __( 'A couple of months ago', 'thrive' ); // Alternative text: "2 months ago"
	} else if ( $how_many_months > 2 && $how_many_months < 6 ) {
		$output = __( 'A few months ago', 'thrive' ); // Alternative text: "Less than 6 months ago"
	} else if ( $how_many_months >= 6 ) {
		$output = sprintf( __( '%s months ago', 'thrive' ), $how_many_months ); // Ex: "7 months ago"
		// === Weeks ===
	} else if ( $how_many_days > 7 && $how_many_days < 13 ) {
		$output = __( 'Last week', 'thrive' ); // Alternative text: "1 week ago"
	} else if ( $how_many_days >= 13 && $how_many_days < 21 ) {
		$output = __( 'A couple of weeks ago', 'thrive' ); // Alternative text: "2 weeks ago"
	} else if ( $how_many_days >= 21 && $how_many_months == 0 ) {
		$how_many_weeks = ( $how_many_days < 28 ) ? 3 : 4;  // 3 and 4 weeks (more would be a month)
		$output         = sprintf( __( '%s weeks ago', 'thrive' ), $how_many_weeks ); // Ex: "3 weeks ago"
		// === Days ===
	} else if ( $how_many_days == 1 ) {
		$output = __( 'A day ago', 'thrive' ); // Not the same as "Yesterday" because yesterday can be 2 minutes ago while this is exactly 24h ago
	} else if ( $how_many_days == 2 ) {
		$output = __( 'A couple of days ago', 'thrive' ); // Alternative text: "2 days ago"
	} else if ( $how_many_days > 2 && $how_many_days < 5 ) { // Approx.
		$output = __( 'A few days ago', 'thrive' ); // Alternative text: "Less than 5 days ago"
	} else if ( $how_many_days >= 5 ) {
		$output = sprintf( __( '%s days ago', 'thrive' ), $how_many_days ); // Ex: "3 days ago"
		// === Hours ===
	} else if ( $how_many_hours == 1 ) {
		$output = __( 'An hour ago', 'thrive' ); // Alternative text: "1 hour ago"
	} else if ( $how_many_hours == 2 ) {
		$output = __( 'A couple of hours ago', 'thrive' ); // Alternative text: "2 hours ago"
	} else if ( $how_many_hours > 2 && $how_many_hours < 6 ) { // Approx.
		$output = __( 'A few hours ago', 'thrive' ); // Alternative text: "Less than 6 hours ago"
	} else if ( $how_many_hours >= 6 ) {
		$output = sprintf( __( '%s hours ago', 'thrive' ), $how_many_hours ); // Ex: "7 hours ago"
		// === Minutes ===
	} else if ( $how_many_minutes == 1 ) {
		$output = __( 'A minute ago', 'thrive' ); // Alternative text: "1 minute ago"
	} else if ( $how_many_minutes == 2 ) {
		$output = __( 'A couple of minutes ago', 'thrive' ); // Alternative text: "2 minutes ago"
	} else if ( $how_many_minutes > 2 && $how_many_minutes < 10 ) { // Approx.
		$output = __( 'A few minutes ago', 'thrive' ); // Alternative text: "Less than 10 minutes ago"
	} else if ( $how_many_minutes > 25 && $how_many_minutes < 35 ) { // About half an hour
		$output = __( 'Half an hour ago', 'thrive' );
	} else if ( $how_many_minutes >= 10 ) {
		$output = sprintf( __( '%s minutes ago', 'thrive' ), $how_many_minutes ); // Ex: "11 minutes ago"
		// === Seconds ===
	} else if ( $how_many_seconds < 5 ) {
		$output = __( 'Just now', 'thrive' ); // Alternative text: "Less than 5 seconds ago"
	} else if ( $how_many_seconds >= 5 && $how_many_seconds < 15 ) { // Approx.
		$output = __( 'Just a few moments ago', 'thrive' ); // Alternative text: "Less than 15 seconds ago"
	} else if ( $how_many_seconds >= 15 ) {
		$output = sprintf( __( '%s seconds ago', 'thrive' ), $how_many_seconds ); // Ex: "16 seconds ago"
	}

	// Used for debugging:
//	$output = $interval->format('%y years, %m months, %d days, %h hours, %i minutes and %s seconds ago');

	return lcfirst( $output );
}

/*
 * Transforms the camel case into spaces
 */

function _thrive_spacify( $camel, $glue = ' ' ) {
	return preg_replace( '/([a-z0-9])([A-Z])/', "$1$glue$2", $camel );
}

/*
 * Get the patterns array from the files found in the patterns dir
 * @return array 
 */

function _thrive_get_patterns_from_directory() {
	$directory = get_template_directory() . "/images/patterns/";

	$names_array = array();

	$images = glob( $directory . "*.png" );


	foreach ( $images as $image ) {
		$file_name = basename( $image, ".png" );
		array_push( $names_array, $file_name );
	}

	return $names_array;
}

function _thrive_get_body_fonts_array() {
	return array(
		'AbrilFatface',
		'ArbutusSlab',
		'ArchivoNarrow',
		'Arial',
		'Arimo',
		'Cardo',
		'Cutive',
		'DaysOne',
		'DroidSans',
		'Georgia',
		'GravitasOne',
		'Helvetica',
		'JustAnotherHand',
		'JosefinSans',
		'JosefinSlab',
		'LatoBlack',
		'LatoRegular',
		'NotoSans',
		'OldStandarTT',
		'OpenSans',
		'Oswald',
		'PlayfairDisplay',
		'PTSans',
		'PTSansNarrow',
		'RobotoSlab',
		'SourceSansPro',
		'Tahoma',
		'TimesNewRoman',
		'Ubuntu',
		'Ultra',
		'VarelaRound',
		'Vollkorn',
		'Verdana'
	);
}

function _thrive_get_header_fonts_array() {
	return array(
		'AbrilFatface',
		'Amaticsc',
		'ArchivoBlack',
		'ArbutusSlab',
		'ArchivoNarrow',
		'Arial',
		'Arimo',
		'Arvo',
		'Boogaloo',
		'Calligraffiti',
		'CantataOne',
		'Cardo',
		'Cutive',
		'DaysOne',
		'Dosis',
		'DroidSans',
		'FjallaOne',
		'FrancoisOne',
		'Georgia',
		'GravitasOne',
		'Helvetica',
		'JustAnotherHand',
		'JosefinSans',
		'JosefinSlab',
		'Lobster',
		'LatoRegular',
		'LatoBlack',
		'NotoSans',
		'OleoScript',
		'OldStandardTT',
		'OpenSans',
		'Oswald',
		'OpenSansCondensed',
		'Pacifico',
		'PlayfairDisplay',
		'PoiretOne',
		'PTSans',
		'PTSansNarrow',
		'Raleway',
		'RobotoCondensed',
		'RobotoSlab',
		'ShadowsIntoLightTwo',
		'SourceSansPro',
		'SpecialElite',
		'Tahoma',
		'TimesNewRoman',
		'Ubuntu',
		'Ultra',
		'VarelaRound',
		'Verdana',
		'Vollkorn'
	);
}

/*
 * Return the fonts array with the corresponding bold version of the font
 * @return array
 */

function _thrive_get_fonts_link_array( $font_name = null ) {
	if ( $font_name === false ) {
		return false;
	}
	$font_name = str_replace( " ", "", trim( $font_name ) );
	$fonts     = array(
		'AbrilFatface'        => "<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>",
		'Amaticsc'            => "<link href='//fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>",
		'ArchivoBlack'        => "<link href='//fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>",
		'ArbutusSlab'         => "<link href='//fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'>",
		'ArchivoNarrow'       => "<link href='//fonts.googleapis.com/css?family=Archivo+Narrow:400,700' rel='stylesheet' type='text/css'>",
		'Arial'               => false,
		'Arimo'               => "<link href='//fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>",
		'Arvo'                => "<link href='//fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>",
		'Boogaloo'            => "<link href='//fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet' type='text/css'>",
		'Calligraffiti'       => "<link href='//fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>",
		'CantataOne'          => "<link href='//fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css'>",
		'Cardo'               => "<link href='//fonts.googleapis.com/css?family=Cardo:400,700' rel='stylesheet' type='text/css'>",
		'Cutive'              => "<link href='//fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>",
		'DaysOne'             => "<link href='//fonts.googleapis.com/css?family=Days+One' rel='stylesheet' type='text/css'>",
		'Dosis'               => "<link href='//fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>",
		'DroidSans'           => "<link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>",
		'FjallaOne'           => "<link href='//fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>",
		'FrancoisOne'         => "<link href='//fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>",
		'Georgia'             => false,
		'GravitasOne'         => "<link href='//fonts.googleapis.com/css?family=Gravitas+One' rel='stylesheet' type='text/css'>",
		'Helvetica'           => false,
		'JustAnotherHand'     => "<link href='//fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>",
		'JosefinSans'         => "<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,700' rel='stylesheet' type='text/css'>",
		'JosefinSlab'         => "<link href='//fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css'>",
		'Lobster'             => "<link href='//fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>",
		'LatoRegular'         => "<link href='//fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>",
		'NotoSans'            => "<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>",
		'OleoScript'          => "<link href='//fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'>",
		'OldStandardTT'       => "<link href='//fonts.googleapis.com/css?family=Old+Standard+TT:400,700' rel='stylesheet' type='text/css'>",
		'OpenSans'            => "<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>",
		'Oswald'              => "<link href='//fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>",
		'OpenSansCondensed'   => "<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>",
		'Pacifico'            => "<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>",
		'PlayfairDisplay'     => "<link href='//fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>",
		'PoiretOne'           => "<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>",
		'PTSans'              => "<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>",
		'PTSansNarrow'        => "<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>",
		'Raleway'             => "<link href='//fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>",
		'RobotoCondensed'     => "<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>",
		'RobotoSlab'          => "<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>",
		'ShadowsIntoLightTwo' => "<link href='//fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>",
		'SourceSansPro'       => "<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>",
		'SpecialElite'        => "<link href='//fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>",
		'Tahoma'              => false,
		'TimesNewRoman'       => false,
		'Ubuntu'              => "<link href='//fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>",
		'Ultra'               => "<link href='//fonts.googleapis.com/css?family=Ultra' rel='stylesheet' type='text/css'>",
		'VarelaRound'         => "<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>",
		'Verdana'             => false,
		'Vollkorn'            => "<link href='//fonts.googleapis.com/css?family=Vollkorn:400,700' rel='stylesheet' type='text/css'>"
	);

	if ( $font_name ) {
		if ( isset( $fonts[ $font_name ] ) ) {
			return $fonts[ $font_name ];
		} else {
			return false;
		}
	}

	return $fonts;
}

/*
 * Return the fonts array with the corresponding bold version of the font
 * @return array
 */

function _thrive_get_fonts_bold_array( $font_name ) {
	if ( $font_name === false ) {
		return false;
	}
	$fonts = array(
		'AbrilFatface'        => false,
		'Amaticsc'            => true,
		'ArchivoBlack'        => true,
		'ArbutusSlab'         => false,
		'ArchivoNarrow'       => true,
		'Arial'               => false,
		'Arimo'               => true,
		'Arvo'                => true,
		'Boogaloo'            => false,
		'Calligraffiti'       => false,
		'CantataOne'          => false,
		'Cardo'               => true,
		'Cutive'              => false,
		'DaysOne'             => false,
		'Dosis'               => true,
		'DroidSans'           => true,
		'FjallaOne'           => false,
		'FrancoisOne'         => false,
		'Georgia'             => false,
		'GravitasOne'         => false,
		'Helvetica'           => false,
		'JustAnotherHand'     => false,
		'JosefinSans'         => true,
		'JosefinSlab'         => true,
		'Lobster'             => false,
		'LatoRegular'         => true,
		'LatoBlack'           => true,
		'NotoSans'            => true,
		'OleoScript'          => true,
		'OldStandardTT'       => true,
		'OpenSans'            => true,
		'Oswald'              => true,
		'OpenSansCondensed'   => true,
		'Pacifico'            => false,
		'PlayfairDisplay'     => true,
		'PoiretOne'           => false,
		'PTSans'              => true,
		'PTSansNarrow'        => false,
		'Raleway'             => true,
		'RobotoCondensed'     => true,
		'RobotoSlab'          => true,
		'ShadowsIntoLightTwo' => false,
		'SourceSansPro'       => true,
		'SpecialElite'        => false,
		'Tahoma'              => false,
		'Times New Roman'     => false,
		'Ubuntu'              => true,
		'Ultra'               => false,
		'VarelaRound'         => false,
		'Verdana'             => false,
		'Vollkorn'            => true,
	);

	if ( $font_name ) {
		if ( isset( $fonts[ $font_name ] ) ) {
			return $fonts[ $font_name ];
		} else {
			return false;
		}
	}

	return $fonts;
}

function _thrive_get_twitter_link( $string ) {
	if ( strpos( $string, "twitter.com" ) !== false ) {
		return $string;
	} else {
		return "http://twitter.com/" . $string;
	}
}

function _thrive_get_social_link( $string, $type ) {
	switch ( $type ) {
		case 'fbi':
		case 'twitter':
			if ( strpos( $string, "twitter.com" ) !== false ) {
				return $string;
			} else {
				return "http://twitter.com/" . $string;
			}
			break;
		case 'sh':
		case 'facebook':
			if ( strpos( $string, "facebook.com" ) !== false ) {
				return $string;
			} else {
				return "https://facebook.com/" . $string;
			}
			break;
		case 'gi':
		case 'google':
			if ( strpos( $string, "google.com" ) !== false ) {
				return $string;
			} else {
				return "https://plus.google.com/" . $string;
			}
			break;
		case 'ini':
		case 'linkedin':
			if ( strpos( $string, "linkedin.com" ) !== false ) {
				return $string;
			} else {
				return "https://linkedin.com/in/" . $string;
			}
			break;
		case 'youtube':
			if ( strpos( $string, 'youtube.' ) !== false ) {
				$parts = explode( '/', $string );

				return end( $parts );
			} else {
				return $string;
			}
			break;
		case 'pinterest':
			if ( strpos( $string, "pinterest.com" ) !== false ) {
				return $string;
			} else {
				return "http://pinterest.com/" . $string;
			}
			break;
		case 'instagram':
			if ( strpos( $string, "instagram.com" ) !== false ) {
				return $string;
			} else {
				return "//instagram.com/" . $string;
			}
			break;
		case 'xing':
			if ( strpos( $string, "xing.com" ) !== false ) {
				return $string;
			} else {
				return "https://xing.com/profile/" . $string;
			}
			break;
		case 'dribble':
		case 'rss':
			return $string;
			break;
	}

	return $string;
}

function _thrive_get_featured_image( $postId, $size = "large" ) {
	$featured_image = null;
	if ( has_post_thumbnail( $postId ) ) {
		$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $postId ), $size );
	}

	return $featured_image;
}

function _thrive_get_post_text_content( $content, $limit = 170, $allow_tags = array() ) {
	$start = '\[';
	$end   = '\]';
	if ( isset( $allow_tags['br'] ) ) {
		$content = nl2br( $content );
	}
	$content = wp_kses( $content, $allow_tags );
	$content = preg_replace( '#(' . $start . ')(.*)(' . $end . ')#si', '', $content );
	if ( strpos( $content, "[" ) < $limit ) {
		$subcontent = substr( $content, strpos( $content, "]" ), $limit );
		if ( strpos( $subcontent, "[" ) === false ) {
			return $subcontent . " [...]";
		}
	}

	return substr( $content, 0, $limit );
}

function _thrive_get_client_ip() {
	$ipaddress = '';
	if ( getenv( 'HTTP_CLIENT_IP' ) ) {
		$ipaddress = getenv( 'HTTP_CLIENT_IP' );
	} else if ( getenv( 'HTTP_X_FORWARDED_FOR' ) ) {
		$ipaddress = getenv( 'HTTP_X_FORWARDED_FOR' );
	} else if ( getenv( 'HTTP_X_FORWARDED' ) ) {
		$ipaddress = getenv( 'HTTP_X_FORWARDED' );
	} else if ( getenv( 'HTTP_FORWARDED_FOR' ) ) {
		$ipaddress = getenv( 'HTTP_FORWARDED_FOR' );
	} else if ( getenv( 'HTTP_FORWARDED' ) ) {
		$ipaddress = getenv( 'HTTP_FORWARDED' );
	} else if ( getenv( 'REMOTE_ADDR' ) ) {
		$ipaddress = getenv( 'REMOTE_ADDR' );
	} else {
		$ipaddress = 'UNKNOWN';
	}

	return $ipaddress;
}

function _thrive_check_comment_approved( $comment_approved, $client_ip, $comment_author_ip, $user_id, $comment_author_id ) {
	if ( $comment_approved != '0' ) {
		return true;
	}
	if ( $user_id != 0 && $user_id == $comment_author_id ) {
		return true;
	}
	if ( $user_id != 0 && $user_id != $comment_author_id ) {
		return false;
	}
	if ( $client_ip == $comment_author_ip ) {
		return true;
	}

	return false;
}

function _thrive_get_optin_name_attr_encoded( $attr ) {
	$attr = str_replace( "[", "_tbl_", $attr );
	$attr = str_replace( "]", "_tbr_", $attr );
	$attr = str_replace( "(", "_tbl2_", $attr );
	$attr = str_replace( ")", "_tbr2_", $attr );
	$attr = str_replace( " ", "_tsp_", $attr );
	$attr = str_replace( ".", "_tspnt_", $attr );
	$attr = str_replace( "/", "_ts_", $attr );
	$attr = str_replace( ",", "_tc_", $attr );
	$attr = str_replace( ":", "_tcol_", $attr );

	return $attr;
}

function _thrive_get_optin_name_attr_fixed( $attr ) {
	$attr = str_replace( "_tbl_", "[", $attr );
	$attr = str_replace( "_tbr_", "]", $attr );
	$attr = str_replace( "_tbl2_", "(", $attr );
	$attr = str_replace( "_tbr2_", ")", $attr );
	$attr = str_replace( "_tsp_", " ", $attr );
	$attr = str_replace( "_tspnt_", ".", $attr );
	$attr = str_replace( "_ts_", "/", $attr );
	$attr = str_replace( "_tc_", ",", $attr );
	$attr = str_replace( "_tcol_", ":", $attr );

	return $attr;
}

function _thrive_insert_post_featured_img( $image_url, $post_id ) {
	// Add Featured Image to Post
	//$image_url = 'http://s.wordpress.org/style/images/wp-header-logo.png'; // Define the image URL here
	$upload_dir = wp_upload_dir(); // Set upload folder
	$image_data = wp_remote_get( $image_url, array( 'timeout' => 10 ) ); // Get image data
	if ( is_wp_error( $image_data ) ) {
		return;
	}
	$filename = basename( $image_url ); // Create image file name
	// Check folder permission and define file location
	if ( wp_mkdir_p( $upload_dir['path'] ) ) {
		$file = $upload_dir['path'] . '/' . $filename;
	} else {
		$file = $upload_dir['basedir'] . '/' . $filename;
	}

	// Create the image  file on the server
	file_put_contents( $file, $image_data['body'] );

	// Check image file type
	$wp_filetype = wp_check_filetype( $filename, null );

	// Set attachment data
	$attachment = array(
		'post_mime_type' => $wp_filetype['type'],
		'post_title'     => sanitize_file_name( $filename ),
		'post_content'   => '',
		'post_status'    => 'inherit'
	);

	// Create the attachment
	$attach_id = wp_insert_attachment( $attachment, $file, $post_id );

	// Include image.php
	require_once( ABSPATH . 'wp-admin/includes/image.php' );

	// Define attachment metadata
	$attach_data = wp_generate_attachment_metadata( $attach_id, $file );

	// Assign metadata to attachment
	wp_update_attachment_metadata( $attach_id, $attach_data );

	// And finally assign featured image to post
	set_post_thumbnail( $post_id, $attach_id );
}

function _thrive_insert_post_featured_image( $filename, $filepath, $postId ) {
	$wp_upload_dir = wp_upload_dir();
	$to_uploads    = $wp_upload_dir['path'] . '/' . basename( $filename );
	//var_dump($to_uploads);
	//var_dump($filepath); die;
	copy( $filepath, $to_uploads );

	$wp_filetype = wp_check_filetype( basename( $filename ), null );

	$attachment = array(
		'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ),
		'post_mime_type' => $wp_filetype['type'],
		'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
		'post_content'   => '',
		'post_status'    => 'inherit'
	);
	$attach_id  = wp_insert_attachment( $attachment, $filename, $postId );
	// you must first include the image.php file
	// for the function wp_generate_attachment_metadata() to work
	require_once( ABSPATH . 'wp-admin/includes/image.php' );
	$attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
	wp_update_attachment_metadata( $attach_id, $attach_data );

	add_post_meta( $postId, '_thumbnail_id', $attach_id, true );
}

function _thrive_get_comments_label( $no ) {
	if ( $no == 1 ) {
		return __( "comment", 'thrive' );
	}

	return __( "comments", 'thrive' );
}

function _thrive_get_avatar_url( $get_avatar ) {
	preg_match( "/src='(.*?)'/i", $get_avatar, $matches );
	if ( isset( $matches[1] ) ) {
		return $matches[1];
	}

	return "";
}

function thrive_get_font_options( $font_id ) {
	$fonts = json_decode( get_option( 'thrive_font_manager_options' ) );
	if ( empty( $fonts ) ) {
		return;
	}
	foreach ( $fonts as $font ) {
		if ( $font->font_id == $font_id ) {
			return $font;
		}
	}

	return null;
}

function _thrive_get_no_of_pages_string() {
	global $wp_query;

	$total_pages = $wp_query->max_num_pages;

	$output = "";

	if ( $total_pages > 1 ) {

		$current_page = max( 1, get_query_var( 'paged' ) );

		$output = __( "Page", 'thrive' ) . " " . $current_page . " " . __( "of", 'thrive' ) . " " . $total_pages;
	}

	return $output;
}

function _thrive_check_is_woocommerce_page() {
	if ( class_exists( 'WooCommerce' ) ) {
		if ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) {
			return true;
		}
	}

	return false;
}


/*
 * Determine if the linkedin url is for a profile or for a company and return the widget script
 */
function _thrive_get_linkedin_follow_script( $linkedin_url ) {


	if ( strpos( $linkedin_url, "/in/" ) !== false || strpos( $linkedin_url, "/pub/" ) !== false ) {
		return "<script type='IN/MemberProfile' data-format='inline' data-id='" . $linkedin_url . "'></script>";
	}

	$company_id = 0;
	/*
	 * If the user entered only an id we consider it to be a company id in order for this to work for the
	 * widgets added before the update
	 */
	if ( ctype_digit( $linkedin_url ) ) {
		$company_id = $linkedin_url;
	}

	if ( strpos( $linkedin_url, "company" ) !== false ) {
		if ( strpos( $linkedin_url, "?" ) !== false ) {
			$linkedin_url = substr( $linkedin_url, 0, strpos( $linkedin_url, "?" ) );

		}
		$company_id = substr( $linkedin_url, strpos( $linkedin_url, "company/" ) + 8, strlen( $linkedin_url ) );

	}

	return "<script type='IN/FollowCompany' data-format='inline' data-id='" . $company_id . "'></script>";

}

/*
 * Get the default value for the @social_site_meta_enable@ theme option
 * If it hasn't already been set, we check if wpseo plugin is enabled and we set it to 0
 * If not, it should be enabled by default (1)
 */

function _thrive_get_social_site_meta_enable_default_value() {

	$thrive_options = get_option( 'thrive_theme_options' );

	if ( ! is_array( $thrive_options ) ) {
		return 0;
	}

	if ( ! isset( $thrive_options['social_site_meta_enable'] ) || $thrive_options['social_site_meta_enable'] === null || $thrive_options['social_site_meta_enable'] == "" ) {

		//check if wpseo is enabled
		$plugin_file_path = thrive_get_wp_admin_dir() . "/includes/plugin.php";
		include_once( $plugin_file_path );

		if ( is_plugin_active( 'wordpress-seo/wp-seo.php' ) ) {
			return 0;
		} else {
			return 1;
		}

	}

	return ""; //

}


/**
 * get a reliable timezone string, even if it's set to a manual time difference (UTC+/-)
 *
 * @return string
 */
function thrive_get_timezone_string() {
	// if site timezone string exists, return it
	if ( $timezone = get_option( 'timezone_string' ) ) {
		return $timezone;
	}

	// get UTC offset, if it isn't set then return UTC
	if ( 0 === ( $utc_offset = get_option( 'gmt_offset', 0 ) ) ) {
		return 'UTC';
	}

	// adjust UTC offset from hours to seconds
	$utc_offset *= 3600;

	// attempt to guess the timezone string from the UTC offset
	if ( $timezone = timezone_name_from_abbr( '', $utc_offset, 0 ) ) {
		return $timezone;
	}

	// last try, guess timezone string manually
	$is_dst = date( 'I' );

	foreach ( timezone_abbreviations_list() as $abbr ) {
		foreach ( $abbr as $city ) {
			if ( $city['dst'] == $is_dst && $city['offset'] == $utc_offset ) {
				return $city['timezone_id'];
			}
		}
	}

	// fallback to UTC
	return 'UTC';
}