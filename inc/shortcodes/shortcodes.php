<?php

/*
 * Helper functions and hooks for Thrive Shortcodes
 * For the page section shortcode the backgrounds are included from http://www.subtlepatterns.com
 * Some test comment
 */

add_shortcode( 'thrive_text_block', 'thrive_shortcode_text_block' );
add_shortcode( 'thrive_note_block', 'thrive_shortcode_note_block' );
add_shortcode( 'thrive_link', 'thrive_shortcode_link' );
add_shortcode( 'thrive_borderless', 'thrive_shortcode_borderless' );
add_shortcode( 'thrive_gmaps', 'thrive_shortcode_gmaps' );
add_shortcode( 'thrive_tab', 'thrive_shortcode_tab' );
add_shortcode( 'thrive_tabs', 'thrive_shortcode_tabs_group' );
add_shortcode( 'thrive_toggle', 'thrive_shortcode_toggle' );
add_shortcode( 'code', 'thrive_shortcode_code' );
add_shortcode( 'page_section', 'thrive_shortcode_page_section' );
add_shortcode( 'pullquote', 'thrive_shortcode_pullquote' );
add_shortcode( 'thrive_optin', 'thrive_shortcode_optin' );
add_shortcode( 'thrive_posts_list', 'thrive_shortcode_posts_list' );
add_shortcode( 'thrive_posts_gallery', 'thrive_shortcode_posts_gallery' );
add_shortcode( 'video_page_section', 'thrive_shortcode_video_page_section' );
add_shortcode( 'thrive_testimonial', 'thrive_shortcode_testimonal' );
add_shortcode( 'thrive_follow_me', 'thrive_shortcode_follow_me' );
add_shortcode( 'content_container', 'thrive_shortcode_content_container' );
add_shortcode( 'blank_space', 'thrive_shortcode_blank_space' );
add_shortcode( 'responsive_video', 'thrive_shortcode_responsive_video' );
add_shortcode( 'thrive_headline', 'thrive_shortcode_headline' );
add_shortcode( 'gallery', 'thrive_shortcode_gallery' );
add_shortcode( 'thrive_custom_menu', 'thrive_shortcode_custom_menu' );
add_shortcode( 'thrive_custom_phone', 'thrive_shortcode_custom_phone' );
add_shortcode( 'thrive_custom_font', 'thrive_shortcode_custom_font' );
add_shortcode( 'thrive_countdown', 'thrive_shortcode_countdown' );
add_shortcode( 'thrive_accordion_group', 'thrive_shortcode_accordion_group' );
add_shortcode( 'thrive_accordion', 'thrive_shortcode_accordion' );
add_shortcode( 'thrive_highlight', 'thrive_shortcode_highlight' );
add_shortcode( 'thrive_headline_focus', 'thrive_shortcode_headline_focus' );
add_shortcode( 'thrive_drop_caps', 'thrive_shortcode_drop_caps' );
add_shortcode( 'thrive_progress_bar', 'thrive_shortcode_progress_bar' );
add_shortcode( 'thrive_fill_counter', 'thrive_shortcode_fill_counter' );
add_shortcode( 'thrive_number_counter', 'thrive_shortcode_number_counter' );
add_shortcode( 'thrive_toggles', 'thrive_shortcode_toggles' );
add_shortcode( 'thrive_toggles_group', 'thrive_shortcode_toggles_group' );
add_shortcode( 'thrive_custom_box', 'thrive_shortcode_custom_box' );
add_shortcode( 'thrive_split_button', 'thrive_shortcode_split_button' );
add_shortcode( 'thrive_megabutton', 'thrive_shortcode_megabutton' );
add_shortcode( 'thrive_icon_box', 'thrive_shortcode_icon_box' );

/* price shortcodes */
add_shortcode( 'price_one', 'thrive_price_one' );
add_shortcode( 'price_one_half', 'thrive_price_one_half' );
add_shortcode( 'price_one_half_last', 'thrive_price_one_half_last' );
add_shortcode( 'price_one_third', 'thrive_price_one_third' );
add_shortcode( 'price_one_third_first', 'thrive_price_one_third_first' );
add_shortcode( 'price_one_third_last', 'thrive_price_one_third_last' );
add_shortcode( 'price_one_fourth', 'thrive_price_one_fourth' );
add_shortcode( 'price_one_fourth_first', 'thrive_price_one_fourth_first' );
add_shortcode( 'price_one_fourth_last', 'thrive_price_one_fourth_last' );
add_shortcode( 'price_one_fifth', 'thrive_price_one_fifth' );
add_shortcode( 'price_one_fifth_first', 'thrive_price_one_fifth_first' );
add_shortcode( 'price_one_fifth_last', 'thrive_price_one_fifth_last' );

/* column shortcodes */
add_shortcode( 'one_half', 'thrive_one_half' );
add_shortcode( 'one_half_first', 'thrive_one_half_first' );
add_shortcode( 'one_half_last', 'thrive_one_half_last' );
add_shortcode( 'one_third', 'thrive_one_third' );
add_shortcode( 'one_third_first', 'thrive_one_third_first' );
add_shortcode( 'one_third_last', 'thrive_one_third_last' );
add_shortcode( 'two_third', 'thrive_two_third' );
add_shortcode( 'two_third_first', 'thrive_two_third_first' );
add_shortcode( 'two_third_last', 'thrive_two_third_last' );
add_shortcode( 'one_fourth', 'thrive_one_fourth' );
add_shortcode( 'one_fourth_first', 'thrive_one_fourth_first' );
add_shortcode( 'one_fourth_last', 'thrive_one_fourth_last' );
add_shortcode( 'three_fourth', 'thrive_three_fourth' );
add_shortcode( 'three_fourth_first', 'thrive_three_fourth_first' );
add_shortcode( 'three_fourth_last', 'thrive_three_fourth_last' );
add_shortcode( 'one_fifth', 'thrive_one_fifth' );
add_shortcode( 'one_fifth_first', 'thrive_one_fifth_first' );
add_shortcode( 'one_fifth_last', 'thrive_one_fifth_last' );
add_shortcode( 'one_fourth_3_first', 'thrive_one_fourth_3_first' );
add_shortcode( 'one_fourth_3_last', 'thrive_one_fourth_3_last' );
add_shortcode( 'one_fourth_2_first', 'thrive_one_fourth_2_first' );
add_shortcode( 'one_fourth_2', 'thrive_one_fourth_2' );
add_shortcode( 'one_fourth_2_last', 'thrive_one_fourth_2_last' );

/* grid shortcodes */
add_shortcode( 'grid_one_half', 'thrive_grid_one_half' );
add_shortcode( 'grid_one_half_last', 'thrive_grid_one_half_last' );
add_shortcode( 'grid_one_third', 'thrive_grid_one_third' );
add_shortcode( 'grid_one_third_first', 'thrive_grid_one_third_first' );
add_shortcode( 'grid_one_third_last', 'thrive_grid_one_third_last' );
add_shortcode( 'grid_one_fourth', 'thrive_grid_one_fourth' );
add_shortcode( 'grid_one_fourth_first', 'thrive_grid_one_fourth_first' );
add_shortcode( 'grid_one_fourth_last', 'thrive_grid_one_fourth_last' );

add_shortcode( 'divider', 'thrive_divider_line' );
//global var used for the tabs widget
$thrive_tabs_divs   = '';
$thrive_tabs_layout = "";

function thrive_shortcode_tabs_group( $attr, $content ) {
	$attr = shortcode_atts( array( 'layout' => 'horz' ), $attr );
	global $thrive_tabs_divs;
	global $thrive_tabs_layout;

	$thrive_tabs_divs   = '';
	$thrive_tabs_layout = $attr['layout'];

	$container_class = ( $attr['layout'] == "vert" ) ? "vert_tabs" : "horiz_tabs";

	$output = '<div class="shortcode_tabs ' . $container_class . '"><div class="scT"><ul class="scT-tab clearfix">' . do_shortcode( $content ) . '</ul>' . $thrive_tabs_divs . "</div></div>";

	return $output;
}

/*
 * Overwrite the default wordpress gallery shortcode
 */

function thrive_shortcode_gallery( $attr ) {
	wp_enqueue_script( 'jquerytouchwipe' );
	$post = get_post();

	static $instance = 0;
	$instance ++;

	if ( ! empty( $attr['ids'] ) ) {
		// 'ids' is explicitly ordered, unless you specify otherwise.
		if ( empty( $attr['orderby'] ) ) {
			$attr['orderby'] = 'post__in';
		}
		$attr['include'] = $attr['ids'];
	}

	// Allow plugins/themes to override the default gallery template.
	$output = apply_filters( 'post_gallery', '', $attr );
	if ( $output != '' ) {
		return $output;
	}

	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( ! $attr['orderby'] ) {
			unset( $attr['orderby'] );
		}
	}

	extract( shortcode_atts( array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post ? $post->ID : 0,
		'itemtag'    => 'dl',
		'icontag'    => 'dt',
		'captiontag' => 'dd',
		'columns'    => 3,
		'size'       => 'large',
		'include'    => '',
		'exclude'    => '',
		'link'       => ''
	), $attr, 'gallery' ) );

	$gallery_link_class = "";
	if ( $link && $link == "none" ) {
		$gallery_link_class = " no-gallery";
	}
	$id = intval( $id );
	if ( 'RAND' == $order ) {
		$orderby = 'none';
	}

	if ( ! empty( $include ) ) {
		$_attachments = get_posts( array(
			'include'        => $include,
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $order,
			'orderby'        => $orderby
		) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[ $val->ID ] = $_attachments[ $key ];
		}
	} elseif ( ! empty( $exclude ) ) {
		$attachments = get_children( array(
			'post_parent'    => $id,
			'exclude'        => $exclude,
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $order,
			'orderby'        => $orderby
		) );
	} else {
		$attachments = get_children( array(
			'post_parent'    => $id,
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $order,
			'orderby'        => $orderby
		) );
	}

	if ( empty( $attachments ) ) {
		return '';
	}

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment ) {
			$output .= wp_get_attachment_link( $att_id, $size, true ) . "\n";
		}

		return $output;
	}

	$itemtag    = tag_escape( $itemtag );
	$captiontag = tag_escape( $captiontag );
	$icontag    = tag_escape( $icontag );
	$valid_tags = wp_kses_allowed_html( 'post' );
	if ( ! isset( $valid_tags[ $itemtag ] ) ) {
		$itemtag = 'dl';
	}
	if ( ! isset( $valid_tags[ $captiontag ] ) ) {
		$captiontag = 'dd';
	}
	if ( ! isset( $valid_tags[ $icontag ] ) ) {
		$icontag = 'dt';
	}

	$columns   = intval( $columns );
	$itemwidth = $columns > 0 ? floor( 100 / $columns ) : 100;
	$float     = is_rtl() ? 'right' : 'left';

	$selector = "gallery-{$instance}";

	$rand_gallery_id = rand( 0, 9999 );

	$gallery_style = $gallery_div = '';
	if ( apply_filters( 'use_default_gallery_style', true ) ) {
		$gallery_style = "
		<style type='text/css'>
			#{$selector} {
				margin: auto;
			}
			#{$selector} .gallery-item {
				float: {$float};
				margin-top: 10px;
				text-align: center;
				width: {$itemwidth}%;
			}
			#{$selector} img {
				border: 2px solid #cfcfcf;
			}
			#{$selector} .gallery-caption {
				margin-left: 0;
			}
			/* see gallery_shortcode() in wp-includes/media.php */
		</style>";
	}
	$size_class = sanitize_html_class( $size );
	if ( true || $instance == 1 ) {
		$gallery_div = "<div class='galleryOverlay' id='gallery-holder-{$selector}'>
                            <div class='galleryStage'></div>
                            <div class='g_count gl_ctrl_mob'>
                                <div class='gl_ctrl_wrp'>
                                    <span class='mob_text'> - Swipe left/right to see more</span>
                                    <span class='img_count'></span>
                                    <span class='cap_txt'></span>
                                </div>
                            </div>
                            <a class='nav_prev gl_ctrl' href='#'></a>
                            <a class='nav_next gl_ctrl' href='#'></a>
                            <a class='nav_close gl_ctrl_mob ' href=''></a>
                        </div>";
	}
	$gallery_div = "<div id='$selector' class='gallery galleryid-{$id} gallery-columns-{$columns} gallery-size-{$size_class}" . $gallery_link_class . "'>" . $gallery_div;
	$output      = apply_filters( 'gallery_style', $gallery_style . "\n\t\t" . $gallery_div );

	$i              = 0;
	$total_no_items = count( $attachments );
	foreach ( $attachments as $id => $attachment ) {
		/*
          if (!empty($link) && 'file' === $link)
          $image_output = wp_get_attachment_link($id, $size, false, false);
          elseif (!empty($link) && 'none' === $link)
          $image_output = wp_get_attachment_image($id, $size, false);
          else
          $image_output = wp_get_attachment_link($id, $size, true, false);
         */
		if ( ! empty( $link ) && 'file' === $link ) {
			$img_link = wp_get_attachment_image_src( $id, $size );
		} elseif ( ! empty( $link ) && 'none' === $link ) {
			$img_link = "#";
		} else {
			$img_link = get_attachment_link( $id );
		}

		$attachment_src = wp_get_attachment_image_src( $id, $size );

		$attachment_large_src = wp_get_attachment_image_src( $id, "full" );

		$rel_string = " rel='" . $selector . "' data-index='$i'";

		$attachment_src_url       = ( isset( $attachment_src[0] ) ) ? $attachment_src[0] : "";
		$attachment_src_large_url = ( isset( $attachment_large_src[0] ) ) ? $attachment_large_src[0] : "";

		$data_next = ( $i == count( $attachments ) - 1 ) ? $selector . "-0" : $selector . "-" . ( $i + 1 );
		$data_prev = ( $i == 0 ) ? $selector . "-" . ( count( $attachments ) - 1 ) : $selector . "-" . ( $i - 1 );

		$img_meta_data    = wp_get_attachment_metadata( $id );
		$data_href_string = "";
		if ( $img_meta_data ) {
			$img_height       = $img_meta_data['height'];
			$img_width        = $img_meta_data['width'];
			$data_href_string = " data-height='" . $img_height . "' data-width='" . $img_width . "'";
		}
		$data_caption_string = " data-caption=''";
		if ( trim( $attachment->post_excerpt ) ) {
			$data_caption_string = " data-caption=' - " . wptexturize( $attachment->post_excerpt ) . "'";
		}

		$image_output = "<a id='" . $selector . "-" . $i . "' href='#' style='background-image:url(\"$attachment_src_url \");' data-src='" . $attachment_src_large_url . "' $rel_string $data_href_string $data_caption_string data-next='$data_next' data-prev='$data_prev' data-index='" . $i . "' data-position='" . ( $i + 1 ) . "/" . $total_no_items . "'></a>";
		$image_meta   = wp_get_attachment_metadata( $id );

		$orientation = '';
		if ( isset( $image_meta['height'], $image_meta['width'] ) ) {
			$orientation = ( $image_meta['height'] > $image_meta['width'] ) ? 'portrait' : 'landscape';
		}

		$output .= "<{$itemtag} class='gallery-item'>";
		$output .= "
			<{$icontag} class='gallery-icon {$orientation}'>
				$image_output
			</{$icontag}>";

		/* if ($captiontag && trim($attachment->post_excerpt)) {
          $output .= "
          <{$captiontag} class='wp-caption-text gallery-caption'>
          " . wptexturize($attachment->post_excerpt) . "
          </{$captiontag}>";
          } */
		$output .= "</{$itemtag}>";
		if ( $columns > 0 && ++ $i % $columns == 0 ) {
			$output .= '<br style="clear: both" />';
		}
	}

	$output .= "
			<br style='clear: both;' />
		</div>\n";

	return $output;
}

function thrive_shortcode_custom_menu( $attr, $content ) {
	$attr       = shortcode_atts( array(
		'title'      => '',
		'thumbnails' => 'off',
		'menu'       => 0
	), $attr );
	$menu_items = array();

	if ( $attr['menu'] == 0 ) {
		$menu_ids = get_terms( 'nav_menu', array( 'hide_empty' => true ) ); //get_nav_menu_locations();
		foreach ( $menu_ids as $menu ) {
			$items = wp_get_nav_menu_items( $menu->term_id );
			foreach ( $items as $item ) {
				array_push( $menu_items, $item );
			}
		}
	} else {
		$items = wp_get_nav_menu_items( $attr['menu'] );
		foreach ( (array) $items as $item ) {
			array_push( $menu_items, $item );
		}
	}

	$output = "<div class='clear'></div><div class='scbp'>";
	if ( ! empty( $attr['title'] ) ) {
		$output .= "<h5>" . $attr['title'] . "</h5>";
	}
	$output .= "<div class='scbpi'>";
	foreach ( $menu_items as $item ) {

		if ( $attr['thumbnails'] == "on" ) {
			$featured_img = thrive_get_post_featured_image_src( $item->object_id, "tt_grid_layout" );
			$output .= "<div class='pps clearfix'><div class='left tim'>";
			if ( $featured_img ) {
				$output .= "<a href='" . $item->url . "' style='background-image: url(\"" . $featured_img . "\");'></a></div>";
			} else { //some default image
				$output .= "<a href='" . $item->url . "' style='background-image: url(\"" . get_template_directory_uri() . "/images/default_featured.jpg\")'></a></div>";
			}
			$output .= "<div class='left txt'>";
			$output .= "<a href='" . $item->url . "'>" . $item->title . "</a><br/>";
			$output .= "</div><div class='clear'></div></div>";
		} else {
			$output .= "<div class='pps clearfix'><div class='left txt noImageTab'>";
			$output .= "<a href='" . $item->url . "'>" . $item->title . "</a><br/>";
			$output .= "</div><div class='clear'></div></div>";
		}
	}
	$output .= "</div></div>";

	return $output;
}

function thrive_shortcode_custom_phone( $attr, $content ) {

	$attr = shortcode_atts( array(
		'phone_text'        => '',
		'phone_no'          => "",
		'mobile_phone_text' => "",
		'color'             => 'default'
	), $attr );
	if ( $attr['color'] == 'default' ) {
		$attr['color'] = thrive_get_theme_options( 'color_scheme' );
	}

	$output = "<div class='phone " . $attr['color'] . "'><a href='tel:" . $attr['phone_no'] . "'><div class='phr'><span class='fphr'>";
	$output .= $attr['phone_text'];
	$output .= "</span>";
	$output .= "<span class='mphr'>";
	$output .= $attr['mobile_phone_text'];
	$output .= "</span>";
	$output .= "<span class='apnr'> " . $attr['phone_no'] . "</span>";
	$output .= "</div></a></div>";

	return $output;
}

function thrive_shortcode_custom_font( $attr, $content ) {

	$font = thrive_get_font_options( $attr['id'] );
	if ( $font != null ) {
		$size_class = '';
		if ( strpos( $font->font_size, 'px' ) > 0 ) {
			if ( str_replace( 'px', '', $font->font_size ) > 70 ) {
				$size_class = ' mms';
			} else {
				if ( str_replace( 'px', '', $font->font_size ) > 33 ) {
					$size_class = ' mmt';
				}
			}
		}
		$output = '<span class="' . $font->font_class . $size_class . '">' . do_shortcode( $content ) . '</span>';
	} else {
		$output = $content;
	}

	return $output;
}

function thrive_shortcode_tab( $attr, $content ) {
	global $thrive_tabs_divs;
	global $thrive_tabs_layout;

	$attr     = shortcode_atts( array( 'headline' => '', 'no' => "1/1" ), $attr );
	$pos      = explode( "/", $attr['no'] );
	$position = ( isset( $pos[0] ) ) ? $pos[0] : 1;
	$length   = ( isset( $pos[1] ) ) ? $pos[1] : 1;

	$width_a = ( 100 / $length );
	$rand_id = "scTC" . rand( 1, 1000 );

	$width_attr = "";
	if ( $thrive_tabs_layout == "horz" ) {
		$width_attr = " style='width:" . $width_a . "%;'";
	}

	$class_attr = "";
	$style_attr = "";
	if ( $position == 1 ) {
		$class_attr = " class='tS'";
		$style_attr = " style='display:block;'";
	}

	$output = "<li" . $class_attr . $width_attr . "><a>" . $attr['headline'] . "</a></li>";

	$thrive_tabs_divs .= "<div class='scTC " . $rand_id . "'" . $style_attr . "><p>" . do_shortcode( $content ) . "</p></div>";

	return $output;
}

function thrive_divider_line( $attr, $content ) {
	$attr          = shortcode_atts( array( 'style' => 'full' ), $attr );
	$divider_class = array(
		'left'     => 'ldivi',
		'right'    => 'rdivi',
		'centered' => 'cdivi',
		'full'     => 'ddivi',
		'split'    => 'sdivi'
	);
	if ( ! isset( $divider_class[ $attr['style'] ] ) ) {
		$attr['style'] = "full";
	}

	return '<div class="divi ' . $divider_class[ $attr['style'] ] . '"></div>';
}

function thrive_shortcode_code( $attr, $content ) {
	return "<pre>" . strip_tags( $content ) . "</pre>";
}

function thrive_one_half( $attr, $content ) {
	$col_class = "colm twc";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_one_half_first( $attr, $content ) {
	$col_class = "colm twc";
	$output    = "<div class='csc'><div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_one_half_last( $attr, $content ) {
	$col_class = "colm twc lst";
	$c         = _thrive_get_content_for_columns_sc( $content );
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_one_third( $attr, $content ) {
	$col_class = "colm thc";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_one_third_first( $attr, $content ) {
	$col_class = "colm thc";
	$output    = "<div class='csc'><div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_one_third_last( $attr, $content ) {
	$col_class = "colm thc lst";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_two_third( $attr, $content ) {
	$col_class = "colm tth";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_two_third_first( $attr, $content ) {
	$col_class = "colm tth";
	$output    = "<div class='csc'><div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_two_third_last( $attr, $content ) {
	$col_class = "colm tth lst";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_one_fourth( $attr, $content ) {
	$col_class = "colm foc";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_one_fourth_first( $attr, $content ) {
	$col_class = "colm foc";
	$output    = "<div class='csc'><div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_one_fourth_last( $attr, $content ) {
	$col_class = "colm foc lst";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_three_fourth( $attr, $content ) {
	$col_class = "colm tfo";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_three_fourth_first( $attr, $content ) {
	$col_class = "colm tfo";
	$output    = "<div class='csc'><div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_three_fourth_last( $attr, $content ) {
	$col_class = "colm tfo lst";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_one_fifth( $attr, $content ) {
	$col_class = "colm fic";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_one_fifth_first( $attr, $content ) {
	$col_class = "colm fic";
	$output    = "<div class='csc'><div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_one_fifth_last( $attr, $content ) {
	$col_class = "colm fic lst";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_one_fourth_3_first( $attr, $content ) {
	$col_class = "colm ofo";
	$output    = "<div class='csc'><div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_one_fourth_3_last( $attr, $content ) {
	$col_class = "colm ofo lst";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_one_fourth_2( $attr, $content ) {
	$col_class = "colm fft";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_one_fourth_2_first( $attr, $content ) {
	$col_class = "colm fft";
	$output    = "<div class='csc'><div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div>";

	return $output;
}

function thrive_one_fourth_2_last( $attr, $content ) {
	$col_class = "colm fft lst";
	$output    = "<div class='" . $col_class . "'>" . _thrive_get_content_for_columns_sc( $content ) . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_grid_one_half( $attr, $content ) {

	$attr = shortcode_atts( array(
		'img'   => '',
		'size'  => 'small',
		'title' => ""
	), $attr );

	$size_class = _thrive_get_grid_shortcode_size_class( $attr['size'] );

	$content = '<p>' . $content . '</p>'; // this should keep backwards compatibility
	$content = shortcode_unautop( $content );
	$content = do_shortcode( $content );

	$output = "<div class='row gr " . $size_class . "'>";
	$output .= "<div class='colm twc'><div class='gri left'><img src='" . $attr['img'] . "' alt=''/></div><div class='grt left'><h4>" . $attr['title'] . "</h4>" . $content . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_grid_one_half_last( $attr, $content ) {
	$attr = shortcode_atts( array(
		'img'   => '',
		'size'  => 'small',
		'title' => ""
	), $attr );

	$content = '<p>' . $content . '</p>'; // this should keep backwards compatibility
	$content = shortcode_unautop( $content );
	$content = do_shortcode( $content );

	$output = "<div class='colm twc lst'><div class='gri left'><img src='" . $attr['img'] . "' alt=''/></div><div class='grt left'><h4>" . $attr['title'] . "</h4>" . $content . "</div><div class='clear'></div></div></div>";

	return $output;
}

function thrive_grid_one_third_first( $attr, $content ) {
	$attr = shortcode_atts( array(
		'img'   => '',
		'size'  => 'small',
		'title' => ""
	), $attr );

	$size_class = _thrive_get_grid_shortcode_size_class( $attr['size'] );

	$content = '<p>' . $content . '</p>'; // this should keep backwards compatibility
	$content = shortcode_unautop( $content );
	$content = do_shortcode( $content );

	$output = "<div class='row gr " . $size_class . "'>";
	$output .= "<div class='colm oth'><div class='gri left'><img src='" . $attr['img'] . "' alt=''/></div><div class='grt left'><h4>" . $attr['title'] . "</h4>" . $content . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_grid_one_third( $attr, $content ) {
	$attr = shortcode_atts( array(
		'img'   => '',
		'size'  => 'small',
		'title' => ""
	), $attr );

	$content = '<p>' . $content . '</p>'; // this should keep backwards compatibility
	$content = shortcode_unautop( $content );
	$content = do_shortcode( $content );

	$output = "<div class='colm oth'><div class='gri left'><img src='" . $attr['img'] . "' alt=''/></div><div class='grt left'><h4>" . $attr['title'] . "</h4>" . $content . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_grid_one_third_last( $attr, $content ) {
	$attr = shortcode_atts( array(
		'img'   => '',
		'size'  => 'small',
		'title' => ""
	), $attr );

	$content = '<p>' . $content . '</p>'; // this should keep backwards compatibility
	$content = shortcode_unautop( $content );
	$content = do_shortcode( $content );

	$output = "<div class='colm oth lst'><div class='gri left'><img src='" . $attr['img'] . "' alt=''/></div><div class='grt left'><h4>" . $attr['title'] . "</h4>" . $content . "</div><div class='clear'></div></div></div>";

	return $output;
}

function thrive_grid_one_fourth_first( $attr, $content ) {
	$attr = shortcode_atts( array(
		'img'   => '',
		'size'  => 'small',
		'title' => ""
	), $attr );

	$size_class = _thrive_get_grid_shortcode_size_class( $attr['size'] );

	$content = '<p>' . $content . '</p>'; // this should keep backwards compatibility
	$content = shortcode_unautop( $content );
	$content = do_shortcode( $content );

	$output = "<div class='row gr " . $size_class . "'>";
	$output .= "<div class='colm foc'><div class='gri left'><img src='" . $attr['img'] . "' alt=''/></div><div class='grt left'><h4>" . $attr['title'] . "</h4>" . $content . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_grid_one_fourth( $attr, $content ) {
	$attr = shortcode_atts( array(
		'img'   => '',
		'size'  => 'small',
		'title' => ""
	), $attr );

	$content = '<p>' . $content . '</p>'; // this should keep backwards compatibility
	$content = shortcode_unautop( $content );
	$content = do_shortcode( $content );

	$output = "<div class='colm foc'><div class='gri left'><img src='" . $attr['img'] . "' alt=''/></div><div class='grt left'><h4>" . $attr['title'] . "</h4>" . $content . "</div><div class='clear'></div></div>";

	return $output;
}

function thrive_grid_one_fourth_last( $attr, $content ) {
	$attr = shortcode_atts( array(
		'img'   => '',
		'size'  => 'small',
		'title' => ""
	), $attr );

	$content = '<p>' . $content . '</p>'; // this should keep backwards compatibility
	$content = shortcode_unautop( $content );
	$content = do_shortcode( $content );

	$output = "<div class='colm foc lst'><div class='gri left'><img src='" . $attr['img'] . "' alt=''/></div><div class='grt left'><h4>" . $attr['title'] . "</h4>" . $content . "</div><div class='clear'></div></div></div>";

	return $output;
}

/*
 * Genarate the output for the page section shortcode
 * The image pattern backgrounds are included from http://www.subtlepatterns.com
 */

function thrive_shortcode_page_section( $attr, $content ) {
	$attr = shortcode_atts( array(
		'color'          => '',
		'shadow'         => '',
		'image'          => '',
		'image_tablet'   => '',
		'image_phone'    => '',
		'pattern'        => '',
		'textstyle'      => 'light',
		'template'       => 0,
		'padding_top'    => "off",
		'padding_bottom' => "off",
		'img_static'     => "off",
		'fullheight'     => "off",
		'position'       => 'default'
	), $attr );

	$in_style         = "";
	$shadow_string    = "";
	$out_style        = "";
	$out_class        = "out";
	$data_href_string = "";
	if ( $attr['padding_top'] == "on" && $attr['padding_bottom'] == "on" ) {
		$out_class = "out dmg";
	} else if ( $attr['padding_top'] == "on" ) {
		$out_class = "out tmg";
	} else if ( $attr['padding_bottom'] == "on" ) {
		$out_class = "out bmg";
	}
	if ( $attr['position'] != "default" ) {
		$out_class .= " " . $attr['position'];
	}

	$text_class = ( $attr['textstyle'] == "light" ) ? "lightSec" : "darkSec";
	$in_class   = "in";
	if ( ! empty( $attr['shadow'] ) ) {
		$shadow_string = " -webkit-box-shadow: 0 0px 24px " . $attr['shadow'] . " inset; -moz-box-shadow: 0 0px 24px " . $attr['shadow'] . " inset;  box-shadow: 0 0px 24px " . $attr['shadow'] . " inset;";
	}

	if ( ! empty( $attr['color'] ) ) {
		$out_style = "style='background: " . $attr['color'] . ";" . $shadow_string . "'";
	}

	if ( ! empty( $attr['image'] ) ) {
		if ( $attr['img_static'] != "off" && $attr['fullheight'] != "off" ) {
			$in_class .= " pdfbg pdwbg";
		} elseif ( $attr['img_static'] != "off" && $attr['fullheight'] == "off" ) {
			$in_class .= " pdwbg";
		} elseif ( $attr['fullheight'] != "off" ) {
			$img_size = @getimagesize( $attr['image'] );
			if ( $img_size ) {
				list( $img_width, $img_height, $img_type, $img_attr ) = @getimagesize( $attr['image'] );
				$data_href_string = "data-height='" . $img_height . "' data-width='" . $img_width . "'";
			}
			$in_class .= " pddbg pdfbg";
		} else {
			$in_class .= " pddbg";
		}
		$in_style = "style='background-image: url(\"" . $attr['image'] . "\");" . $shadow_string . "'";
		if ( ! empty( $attr['image'] ) ) {
			$in_style .= "data-full='" . $attr['image'] . "' ";
		}
		if ( ! empty( $attr['image_tablet'] ) ) {
			$in_style .= "data-tablet='" . $attr['image_tablet'] . "' ";
		}
		if ( ! empty( $attr['image_phone'] ) ) {
			$in_style .= "data-phone='" . $attr['image_phone'] . "' ";
		}
		if ( ! empty( $attr['image_phone'] ) || ! empty( $attr['image_tablet'] ) ) {
			$in_class .= " c-img";
		}
	}
	if ( ! empty( $attr['pattern'] ) ) {
		$out_style = "style='background: url(\"" . $attr['pattern'] . "\") repeat;" . $shadow_string . "'";
	}
	$attr['template'] = (int) $attr['template'];
	if ( $attr['template'] == 0 ) {
		$output = "<div class='clear'></div><div class='" . $out_class . " " . $text_class . "' " . $out_style . "><div " . $data_href_string . " class='" . $in_class . "' " . $in_style . "><div class='cck clearfix'>" . do_shortcode( $content ) . "</div></div></div>";
	} else {
		switch ( $attr['template'] ) {
			case 1:
				$output = "<div class='clear'></div><div class='" . $out_class . " pattern1 darkSec' style='" . $shadow_string . "'><div class='in '><div class='cck clearfix'><p class=''>" . do_shortcode( $content ) . "</p></div></div></div>";
				break;
			case 2:
				$output = "<div class='clear'></div><div class='" . $out_class . " pattern2 darkSec' style='" . $shadow_string . "'><div class='in '><div class='cck clearfix'><p class=''>" . do_shortcode( $content ) . "</p></div></div></div>";
				break;
			case 3:
				$output = "<div class='clear'></div><div class='" . $out_class . " pattern3 lightSec' style='" . $shadow_string . "'><div class='in '><div class='cck clearfix'><p class=''>" . do_shortcode( $content ) . "</p></div></div></div>";
				break;
		}
	}

	return $output;
}

function thrive_shortcode_gmaps( $attr, $content ) {
	$output = "<div class='flexible-container'>" . $content . "</div>";

	return $output;
}

function thrive_shortcode_text_block( $attr, $content ) {
	$attr = shortcode_atts( array(
		'headline' => '',
		'color'    => 'blue'
	), $attr );

	if ( $attr['color'] == "note" ) {
		$colour_scheme = "shnd";
	} else {
		$colour_scheme = "shn";
	}

	$pattern = "/<p[^>]*><\\/p[^>]*>/";

	$content = preg_replace( $pattern, '', $content );

	if ( empty( $attr['headline'] ) ) {
		$output = "<div class='clear'></div><div class='thrivecb " . $attr['color'] . "'><div class='" . $colour_scheme . "'>" . do_shortcode( $content ) . "</div></div>";
	} else {
		$output = "<div class='clear'></div><div class='thrivecb " . $attr['color'] . "'><div class='" . $colour_scheme . "'><h5>" . $attr['headline'] . "</h5>" . do_shortcode( $content ) . "</div></div>";
	}

	return $output;
}

function thrive_shortcode_pullquote( $attr, $content ) {
	$attr = shortcode_atts( array(
		'align' => 'normal',
		'cite'  => ''
	), $attr );

	$container_class = "pulQ";
	if ( $attr['align'] == "left" ) {
		$container_class = "pulQ left";
	}
	if ( $attr['align'] == "right" ) {
		$container_class = "pulQ right";
	}
	$cite_html = "";
	if ( ! empty( $attr['cite'] ) ) {
		$cite_html = "<p><i>" . $attr['cite'] . "</i></p>";
	}

	$output = "<blockquote class='" . $container_class . "'><div class='left'><p>" . $content . "</p>" . $cite_html . "</div><div class='clear'></div></blockquote>";

	return $output;
}

function thrive_shortcode_toggle( $attr, $content ) {
	$attr = shortcode_atts( array( 'title' => '' ), $attr );

	$output = "<div class='faq'><div class='faqI'><div class='faqB'><h6>" . $attr['title'] . "<span></span></h6></div><div class='faqC'><p>" . do_shortcode( $content ) . "</p></div></div></div>";

	return $output;
}

function thrive_shortcode_toggles_group( $attr, $content ) {

	$attr = shortcode_atts( array( 'title' => '' ), $attr );

	$output = '<h3>' . $attr['title'] . '</h3>';
	$output .= do_shortcode( $content );

	return $output;
}

function thrive_shortcode_toggles( $attr, $content ) {
	$attr = shortcode_atts( array( 'title' => '', 'no' => '1/1' ), $attr );

	$no = explode( '/', $attr['no'] );

	$output = '<div class="faq"><div class="faqI">
                        <div class="faqB ' . ( $no[0] % 2 == 1 ? 'even' : '' ) . '">
                            <h6>
                            ' . $attr['title'] . '
                            <span></span></h6>
                        </div>
                        <div class="faqC">
                            <p>
                                ' . do_shortcode( $content ) . '
                            </p>
                        </div>
                    </div></div>';

	return $output;
}

function thrive_shortcode_note_block( $attr, $content ) {
	$attr = shortcode_atts( array( 'headline' => '' ), $attr );

	$output = "<div class='note'><h3>" . $attr['headline'] . "</h3><p>" . do_shortcode( $content ) . "</p></div>";

	return $output;
}

function thrive_shortcode_link( $attr, $content ) {
	$attr = shortcode_atts( array(
		'size'   => 'normal',
		'color'  => 'blue',
		'link'   => 'javascript:void(0)',
		'target' => '_blank',
		'align'  => ''
	), $attr );

	if ( empty( $attr['link'] ) ) {
		$attr['link'] = "javascript:void(0)";
	}
	$btn_class = "btn " . $attr['color'] . " " . $attr['align'] . " " . $attr['size'];
	$output    = "<a class='" . $btn_class . "' href='" . $attr['link'] . "' target='" . $attr['target'] . "'><span>" . $content . "</span></a>";

	if ( $attr['align'] != "left" && $attr['align'] != "right" ) {
		$output = $output . "<div class='clear'></div>";
	}

	return $output;
}

function thrive_shortcode_posts_gallery( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'    => '',
		'no_posts' => 5,
		'filter'   => 'recent',
		'category' => 0
	), $attr );

	if ( $attr['filter'] == "popular" ) {
		$query_params = array(
			'order'               => 'DESC',
			'orderby'             => 'comment_count',
			'posts_per_page'      => $attr['no_posts'],
			'ignore_sticky_posts' => 1
		);
		if ( $attr['category'] > 0 ) {
			$query_params['cat'] = $attr['category'];
		}
	} else {
		$query_params = array(
			'orderby'             => 'date',
			'posts_per_page'      => $attr['no_posts'],
			'ignore_sticky_posts' => 1
		);
		if ( $attr['category'] > 0 ) {
			$query_params['cat'] = $attr['category'];
		}
	}
	$query_params['post__not_in'] = isset( $GLOBALS['thrive_post_excerpts'] ) ? array( $GLOBALS['thrive_post_excerpts'] ) : array( get_the_ID() );;
	$r = new WP_Query( $query_params );

	$posts = $r->get_posts();
	$posts = array_slice( $posts, 0, $attr['no_posts'] );

	$output = "<div class='scbg'>";
	if ( ! empty( $attr['title'] ) ) {
		$output .= "<h2>" . $attr['title'] . "</h2>";
	}
	$output .= "<div class='scc-r'>";
	foreach ( $posts as $p ) {
		//get the container class
		switch ( get_post_format( $p->ID ) ) {
			case "audio":
				$container_class = "scc-a";
				break;
			case "image":
				$container_class = "scc-m";
				break;
			case "gallery":
				$container_class = "scc-m";
				break;
			case "video":
				$container_class = "scc-v";
				break;
			case "quote":
				$container_class = "scc-q";
				break;
			default:
				$container_class = "scc-d";
		}

		$featured_img = thrive_get_post_featured_image_src( $p->ID, "tt_post_gallery" );
		$output .= "<div class='scc'>";
		//$output .= "<a  class='rimch' href='" . get_permalink($p->ID) . "'>";
		if ( $featured_img ) {
			$output .= "<div class='scc-i' style='background-image: url(\"" . $featured_img . "\");'></div>";
		} else { //some default image
			$output .= "<div class='scc-i' style='background-image: url(\"" . get_template_directory_uri() . "/images/default_post_gallery.png\");'></div>";
		}
		//$output .= "</a>";
		$output .= "<div class='scc-t'>";

		$output .= "<div class='scc-in " . $container_class . "'>";

		$output .= "<a href='" . get_permalink( $p->ID ) . "'><h5>" . $p->post_title . "</h5><p>" . _thrive_get_post_text_content_excerpt( $p->post_content, $p->ID, 120, array(), true ) . "</p></a>";

		$output .= "</div>";
		$output .= "</div>";
		$output .= "</div>";
	}
	$output .= "</div></div>";

	return $output;
}

function thrive_shortcode_posts_list( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'      => '',
		'thumbnails' => 'off',
		'no_posts'   => 5,
		'filter'     => 'recent',
		'category'   => 0
	), $attr );

	if ( $attr['filter'] == "popular" ) {
		$query_params = array(
			'order'               => 'DESC',
			'orderby'             => 'comment_count',
			'posts_per_page'      => $attr['no_posts'],
			'ignore_sticky_posts' => 1
		);
		if ( $attr['category'] > 0 ) {
			$query_params['cat'] = $attr['category'];
		}
	} else {
		$query_params = array(
			'orderby'             => 'date',
			'posts_per_page'      => $attr['no_posts'],
			'ignore_sticky_posts' => 1
		);
		if ( $attr['category'] > 0 ) {
			$query_params['cat'] = $attr['category'];
		}
	}

	$r = new WP_Query( $query_params );

	$posts = $r->get_posts();
	$posts = array_slice( $posts, 0, $attr['no_posts'] );

	$output = "<div class='clear'></div><div class='scbp'>";
	if ( ! empty( $attr['title'] ) ) {
		$output .= "<h5>" . $attr['title'] . "</h5>";
	}
	$output .= "<div class='scbpi'>";
	foreach ( $posts as $p ) {
		if ( $attr['thumbnails'] == "on" ) {
			$featured_img = thrive_get_post_featured_image_src( $p->ID, "tt_post_icon" );
			$output .= "<div class='pps clearfix'><div class='left tim'>";
			if ( $featured_img ) {
				$output .= "<a href='" . get_permalink( $p->ID ) . "' style='background-image: url(\"" . $featured_img . "\");'></a></div>";
			} else { //some default image
				$output .= "<a href='" . get_permalink( $p->ID ) . "' style='background-image: url(\"" . get_template_directory_uri() . "/images/tabs_default.png\")'></a></div>";
			}
			$output .= "<div class='left txt'>";
			$output .= "<a href='" . get_permalink( $p->ID ) . "'>" . $p->post_title . "</a>";
			if ( $attr['filter'] == "popular" ) {
				$output .= "<span class='thrive_date'>" . get_comments_number( $p->ID ) . " " . _thrive_get_comments_label( get_comments_number( $p->ID ) ) . "</span></div><div class='clear'></div></div>";
			} else {
				$output .= "<span class='thrive_date'>" . get_the_time( get_option( 'date_format' ), $p->ID ) . "</span></div><div class='clear'></div></div>";
			}
		} else {
			$output .= "<div class='pps clear'><div class='left txt noImageTab'>";
			$output .= "<a href='" . get_permalink( $p->ID ) . "'>" . $p->post_title . "</a>";
			if ( $attr['filter'] == "popular" ) {
				$output .= "<span class='thrive_date'>" . get_comments_number( $p->ID ) . " " . _thrive_get_comments_label( get_comments_number( $p->ID ) ) . "</span></div><div class='clear'></div></div>";
			} else {
				$output .= "<span class='thrive_date'>" . get_the_time( get_option( 'date_format' ), $p->ID ) . "</span></div><div class='clear'></div></div>";
			}
		}
	}
	$output .= "</div></div>";

	return $output;
}

function thrive_shortcode_video_page_section( $attr, $content ) {
	$attr = shortcode_atts( array(
		'btn'             => '',
		'color'           => null,
		'image'           => null,
		'pattern'         => null,
		'heading'         => '',
		'subheading'      => '',
		'cta'             => '',
		'hide_logo'       => 0,
		'hide_controls'   => 0,
		'hide_related'    => 0,
		'hide_title'      => 0,
		'autoplay'        => 0,
		'hide_fullscreen' => 0,
		'type'            => 'custom',
		'position'        => 'default',
		'video_width'     => 1080
	), $attr );

	$output    = "";
	$out_class = "out";
	if ( $attr['position'] != "default" ) {
		$out_class .= " " . $attr['position'];
	}

	$txt_div_class = ( $attr['btn'] == "light" ) ? "vdc lv" : "vdc dv";
	if ( $attr['type'] == "youtube" ) {
		$video_code = _thrive_get_youtube_embed_code( $content, $attr );
	} elseif ( $attr['type'] == "vimeo" ) {
		$video_code = _thrive_get_vimeo_embed_code( $content, $attr['video_width'] );
	} else {
		$video_code = do_shortcode( $content );
	}

	$wistiaVideoCode = ( strpos( $video_code, "wistia" ) !== false ) ? ' wistia-video-container' : '';

	if ( ! is_null( $attr['image'] ) ) {
		$output = "<div class='" . $out_class . "'><div class='scvps" . $wistiaVideoCode . "' style='background-image: url(" . $attr['image'] . ");'><div class='" . $txt_div_class . "'><div class='ltx'>";
		$output .= "<h2>" . $attr['heading'] . "</h2><h3>" . $attr['subheading'] . "</h3>";
		$output .= "<div class='pvb'><a ></a></div><p>" . $attr['cta'] . "</p></div></div>";
		$output .= "<div class='" . $txt_div_class . " video-container' style='display: none;'><div class='vwr'>" . $video_code . "</div></div>";
		$output .= "</div></div>";
	}

	if ( ! is_null( $attr['pattern'] ) ) {
		$output = "<div class='" . $out_class . "'><div class='scvps" . $wistiaVideoCode . "' style='background: url(\"" . $attr['pattern'] . "\") repeat;'><div class='" . $txt_div_class . "'><div class='ltx'>";
		$output .= "<h2>" . $attr['heading'] . "</h2><h3>" . $attr['subheading'] . "</h3>";
		$output .= "<div class='pvb'><a ></a></div><p>" . $attr['cta'] . "</p></div></div>";
		$output .= "<div class='" . $txt_div_class . " video-container' style='display: none;'><div class='vwr'>" . $video_code . "</div></div>";
		$output .= "</div></div>";
	}

	if ( ! is_null( $attr['color'] ) ) {
		$output = "<div class='" . $out_class . "'><div class='scvps" . $wistiaVideoCode . "' style='background: " . $attr['color'] . ";'><div class='" . $txt_div_class . "'><div class='ltx'>";
		$output .= "<h2>" . $attr['heading'] . "</h2><h3>" . $attr['subheading'] . "</h3>";
		$output .= "<div class='pvb'><a ></a></div><p>" . $attr['cta'] . "</p></div></div>";
		$output .= "<div class='" . $txt_div_class . " video-container' style='display: none;'><div class='vwr'>" . $video_code . "</div></div>";
		$output .= "</div></div>";
	}

	return $output;
}

function thrive_shortcode_testimonal( $attr, $content ) {
	$attr = shortcode_atts( array(
		'name'    => '',
		'company' => '',
		'image'   => get_template_directory_uri() . "/images/testimonial.jpg",
		'color'   => 'dark'
	), $attr );

	if ( ! empty( $attr['company'] ) ) {
		$attr['name'] = $attr['name'] . ", ";
	}
	if ( empty( $attr['image'] ) ) {
		$attr['image'] = get_template_directory_uri() . "/images/testimonial.jpg";
	}
	$color_class = ( $attr['color'] == "light" ) ? "sctm-l" : "sctm-d";
	$output      = "<div class='sctm " . $color_class . "'>
                <div class='tst'>
                    <p>" . $content . "</p>
                    <div class='tst-i'>
                        <div class='tst-1'></div>
                        <div class='tst-2'></div>
                        <div class='tst-3'></div>
                    </div>
                </div>
                <div class='bts clearfix'>
                    <div class='bts-1'>
                        <div class='rta' style='background-image: url(\"" . $attr['image'] . "\")'></div>
                    </div>";

	if ( ! empty( $attr['name'] ) || ! empty( $attr['company'] ) ) {
		$output .= "<div class='bts-2'>";
		if ( ! empty( $attr['name'] ) ) {
			$output .= "<p>" . $attr['name'] . "</p>";
		}
		if ( ! empty( $attr['company'] ) ) {
			$output .= "<span>" . $attr['company'] . "</span>";
		}
		$output .= "</div>";
	}
	$output .= "</div></div>";

	return $output;
}

function thrive_shortcode_optin( $attr, $content ) {
	$attr = shortcode_atts( array(
		'color'  => '',
		'size'   => 'medium',
		'text'   => '',
		'optin'  => 0,
		'layout' => 'vertical'
	), $attr );

	if ( $attr['layout'] != "vertical" ) {
		$attr['layout'] = "horizontal";
	}
	if ( $attr['size'] != "small" || $attr['size'] != "large" ) {
		$attr['size'] = "medium";
	}

	$optin_id = $attr['optin'];

	//form action
	$optinFormAction = get_post_meta( $optin_id, '_thrive_meta_optin_form_action', true );

	//form method
	$optinFormMethod = get_post_meta( $optin_id, '_thrive_meta_optin_form_method', true );
	$optinFormMethod = strtolower( $optinFormMethod );
	$optinFormMethod = $optinFormMethod === 'post' || $optinFormMethod === 'get' ? $optinFormMethod : 'post';

	//form hidden inputs
	$optinHiddenInputs = get_post_meta( $optin_id, '_thrive_meta_optin_hidden_inputs', true );

	//form fields
	$optinFieldsJson  = get_post_meta( $optin_id, '_thrive_meta_optin_fields_array', true );
	$optinFieldsArray = json_decode( $optinFieldsJson, true );

	//form not visible inputs
	$optinNotVisibleInputs = get_post_meta( $optin_id, '_thrive_meta_optin_not_visible_inputs', true );

	if ( ! is_array( $optinFieldsArray ) ) {
		return "There are some problems with the configuration of the opt-in shortcode";
	}


	if ( $attr['layout'] == "horizontal" ) {
		$container_class = ( count( $optinFieldsArray ) >= 3 ) ? "scon wide otit o" . count( $optinFieldsArray ) : "scon wide o" . count( $optinFieldsArray );
	} else {
		$container_class = "scon";
	}

	$output = '<div class="' . $container_class . '"><form action="' . $optinFormAction . '" class="frm" method="' . $optinFormMethod . '">';
	$output .= $optinHiddenInputs;
	$output .= $optinNotVisibleInputs;

	foreach ( $optinFieldsArray as $name_attr => $field_label ) {
		$output .= Thrive_OptIn::getInstance()->getInputHtml( $name_attr, $field_label );
	}

	$output .= "<div class='btn " . $attr['color'] . " " . $attr['size'] . "'><input type='submit' value=\"" . $attr['text'] . "\"></div></form><div class='clear'></div></div>";

	return $output;
}

function thrive_shortcode_follow_me( $attr, $content ) {
	$attr = shortcode_atts( array(
		'facebook'  => '',
		'twitter'   => '',
		'gprofile'  => '',
		'gpage'     => '',
		'linkedin'  => '',
		'dribble'   => '',
		'pinterest' => '',
		'rss'       => '',
		'youtube'   => '',
		'instagram' => '',
		'xing'      => '',
	), $attr );

	$output = "<div class='scfm'>";


	if ( ! empty( $attr['facebook'] ) ) {
		$randId = rand( 9, 99999 );
		$output .= "<div class='ss left'>";
		$output .= "<div class='bubb'><div class='bubble' id='bubble-" . $randId . "'>";
		$output .= "<script type='text/javascript'>jQuery(function() { jQuery('#bubble-" . $randId . "').append(\"<iframe style='height:70px !important;' src='//www.facebook.com/plugins/likebox.php?href=" . _thrive_get_social_link( $attr['facebook'], 'facebook' ) . "&width=292&height=32&colorscheme=light&show_faces=false&header=false&stream=false&show_border=false' id='follow_me_content_fb'></iframe>\");
                    });</script></div></div>";
		$output .= "<a class='fb'><span></span></a></div>";
	}
	if ( ! empty( $attr['twitter'] ) ) {
		$randId = rand( 9, 99999 );
		$output .= "<div class='ss left'>";
		$output .= "<div class='bubb'><div class='bubble' id='bubble-" . $randId . "'>";
		$output .= "<a href='https://twitter.com/" . $attr['twitter'] . "' class='twitter-follow-button' data-show-count='false'>Follow @" . _thrive_get_social_link( $attr['twitter'], 'twitter' ) . "</a></div></div>";
		$output .= "<a class='twitter'><span></span></a><script>jQuery(function() { ThriveApp.load_script('twitter'); });</script></div>";
	}
	if ( ! empty( $attr['gprofile'] ) ) {
		$randId = rand( 9, 99999 );
		$output .= "<div class='ss left'>";
		$output .= "<div class='bubb'><div class='bubble' id='bubble-" . $randId . "'>";
		$output .= "<div class='g-person' data-annotation='bubble' data-layout='landscape' data-href='" . _thrive_get_social_link( $attr['gprofile'], 'google' ) . "' data-rel='author'></div></div></div>";
		$output .= "<a class='g_plus'><span></span></a><script>jQuery(function() { ThriveApp.load_script('google'); });</script></div>";
	}
	if ( ! empty( $attr['gpage'] ) ) {
		$randId = rand( 9, 99999 );
		$output .= "<div class='ss left'>";
		$output .= "<div class='bubb'><div class='bubble' id='bubble-" . $randId . "'>";
		$output .= "<div class='g-follow' data-width='273' data-href='" . _thrive_get_social_link( $attr['gpage'], 'google' ) . "' data-layout='landscape' data-rel='author' id='follow_me_content_gprofile'></div></div></div>";
		$output .= "<a class='g_plus'><span></span></a><script>jQuery(function() { ThriveApp.load_script('google'); });</script></div>";
	}
	if ( ! empty( $attr['linkedin'] ) ) {
		$randId = rand( 9, 99999 );
		$output .= "<div class='ss left'>";
		$output .= "<div class='bubb'><div class='bubble' id='bubble-" . $randId . "' style='min-width: 65px;'>";
		$output .= _thrive_get_linkedin_follow_script( $attr['linkedin'] ) . "</div></div>";
		$output .= "<a class='linkedin'><span></span></a><script>jQuery(function() { ThriveApp.load_script('linkedin'); });</script></div>";
	}
	if ( ! empty( $attr['dribble'] ) ) {
		$randId = rand( 9, 99999 );
		$output .= "<div class='ss left'>";
		$output .= "<a class='dribble' href='" . _thrive_get_social_link( $attr['dribble'], 'dribble' ) . "'><span></span></a></div>";
	}
	if ( ! empty( $attr['pinterest'] ) ) {
		$randId         = rand( 9, 99999 );
		$pinterest_user = preg_replace( '#http(s)?://(www\.)?pinterest.com/(.+)#i', '$3', $attr['pinterest'] );
		$output .= "<div class='ss left'>";
		$output .= "<div class='bubb'><div class='bubble bubble-pinterest' id='bubble-" . $randId . "'>";
		$output .= "<a style='display: block' data-pin-do='buttonFollow' href='" . _thrive_get_social_link( $attr['pinterest'], 'pinterest' ) . "'>" . $pinterest_user . "</a></div></div>";
		$output .= "<a class='prinster'><span></span></a><script>jQuery(function() { ThriveApp.load_script('pinterest'); });</script></div>";
	}
	if ( ! empty( $attr['rss'] ) ) {
		$randId = rand( 9, 99999 );
		$output .= "<div class='ss left'>";
		$output .= "<a class='rss' href='" . $attr['rss'] . "'><span></span></a></div>";
	}
	if ( ! empty( $attr['youtube'] ) ) {
		$randId = rand( 9, 99999 );
		$output .= "<div class='ss left'>";
		$output .= "<div class='bubb'><div class='bubble' id='bubble-" . $randId . "'>";
		$output .= "<div class='g-ytsubscribe' data-channelid='" . _thrive_get_social_link( $attr['youtube'], 'youtube' ) . "' data-channel='" . _thrive_get_social_link( $attr['youtube'], 'youtube' ) . "' data-layout='full'></div></div></div>";
		$output .= "<a class='youtube'><span></span></a><script>jQuery(function() { ThriveApp.load_script('youtube'); });</script></div>";
	}
	if ( ! empty( $attr['instagram'] ) ) {
		$randId = rand( 9, 99999 );
		$output .= "<div class='ss left'>";
		$output .= "<div class='bubb'><div class='bubble' id='bubble-" . $randId . "'>";
		$output .= '<style>.ig-b- { display: inline-block; }
                            .ig-b- img { visibility: hidden; }
                            .ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
                            .ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
                            @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
                                .ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }</style>
                        <a href="' . _thrive_get_social_link( $attr['instagram'], 'instagram' ) . '?ref=badge" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a></div></div>';
		$output .= "<a class='is'><span></span></a></div>";
	}
	if ( ! empty( $attr['xing'] ) ) {
		$randId = rand( 9, 99999 );
		$output .= "<div class='ss left'>";
		$output .= "<a class='xi' href='" . $attr['xing'] . "'><span></span></a></div>";
	}
	$output .= "<div class='clear'></div></div>";

	return $output;
}

function thrive_shortcode_borderless( $attr, $content ) {
	$attr = shortcode_atts( array(
		'type'            => 'image',
		'image_url'       => '',
		'video_type'      => 'youtube',
		'youtube_url'     => '',
		'vimeo_url'       => '',
		'custom_code'     => '',
		'hide_logo'       => 0,
		'hide_controls'   => 0,
		'hide_related'    => 0,
		'hide_title'      => 0,
		'autoplay'        => 0,
		'hide_fullscreen' => 0,
		'position'        => 'default'
	), $attr );

	$output = "";

	$container_class = ( $attr['position'] == "default" ) ? "fwi shc" : "fwi shc" . $attr['position'];

	$hasControls = "";
	if ( isset( $attr['hide_controls'] ) && $attr['hide_controls'] == 1 ) {
		$hasControls = "bnoc";
	}

	switch ( $attr['type'] ) {
		case 'image':
			$output = "<div class='" . $container_class . "'><img src='" . $content . "' alt='' /></div>";
			break;
		case 'youtube':
			$output = "<div class='" . $container_class . " " . $hasControls . " brve'>" . _thrive_get_youtube_embed_code( $content, $attr ) . "</div>";
			break;
		case 'vimeo':
			$output = "<div class='" . $container_class . " " . $hasControls . " brve vim'>" . _thrive_get_vimeo_embed_code( $content ) . "</div>";
			break;
		case 'custom_code':
			$output = "<div class='" . $container_class . "'>" . $content . "</div>";
			break;
		case 'custom_url':
			$output = "<div class='" . $container_class . " thrive-borderless'>" . do_shortcode( $content ) . "</div>";
			break;
	}

	return $output;
}

function thrive_shortcode_blank_space( $attr, $content ) {
	$attr = shortcode_atts( array( 'height' => "30px" ), $attr );

	$output = "<div class='bdv' style='height:" . $attr['height'] . "'>&nbsp;</div>";

	return $output;
}

function thrive_shortcode_content_container( $attr, $content ) {
	$attr = shortcode_atts( array(
		'max_width' => 600,
		'align'     => 'left'
	), $attr );

	$style_str   = " style='width: " . $attr['max_width'] . "px;'";
	$align_class = ( $attr['align'] == "center" ) ? "ced" : $attr['align'];

	$output = "<div" . $style_str . " class='bcs " . $align_class . "'><p>" . do_shortcode( $content ) . "</p></div><div class='clear'></div>";

	return $output;
}

function thrive_shortcode_responsive_video( $attr, $content ) {
	$attr = shortcode_atts( array(
		'type'            => 'youtube',
		'image_url'       => '',
		'video_type'      => 'youtube',
		'youtube_url'     => '',
		'vimeo_url'       => '',
		'custom_code'     => '',
		'hide_logo'       => 0,
		'hide_controls'   => 0,
		'hide_related'    => 0,
		'hide_title'      => 0,
		'autoplay'        => 0,
		'hide_fullscreen' => 0,
		'position'        => 'default'
	), $attr );

	$output = "";

	$container_class = "rve";

	if ( isset( $attr['hide_controls'] ) && $attr['hide_controls'] == 1 ) {
		$container_class = "rve noc";
	}

	switch ( $attr['type'] ) {
		case 'youtube':
			$output = "<div class='" . $container_class . "'>" . _thrive_get_youtube_embed_code( $content, $attr ) . "</div>";
			break;
		case 'vimeo':
			$output = "<div class='" . $container_class . " vim'>" . _thrive_get_vimeo_embed_code( $content ) . "</div>";
			break;
		case 'custom_code':
			$output = "<div class='" . $container_class . "'>" . $content . "</div>";
			break;
		case 'custom_url':
			$output = "<div class='" . $container_class . " thrive-borderless'>" . do_shortcode( $content ) . "</div>";
			break;
	}

	return $output;
}

function thrive_shortcode_headline( $attr, $content ) {
	$attr = shortcode_atts( array(
		'size'  => '',
		'color' => ''
	), $attr );

	$output = "";

	return $output;
}

function thrive_shortcode_fill_counter( $attr, $content ) {

	$attr = shortcode_atts( array(
		'color'      => '',
		'before'     => '',
		'value'      => 100,
		'after'      => '',
		'label'      => '',
		'percentage' => 0
	), $attr );

	$fillValue = ( 180 * $attr['percentage'] ) / 100;

	$output = '
    <div class="fill-counter nsd ' . $attr['color'] . '">
                    <div class="fill-counter-inner" style="stroke-dasharray: ' . ( $attr['percentage'] * 4.15 ) . ' 415;">
                        <svg viewBox="0 0 132 132" class="fill-counter-circle" shape-rendering="optimizeSpeed">
                            <circle r="66" cx="66" cy="66"></circle>
                        </svg>
                        <div class="fill-counter-text">
                            ' . $attr['before'] . '' . $attr["value"] . '<span>' . $attr["after"] . '</span>
                        </div>
                    </div>
                    <span class="fill-counter-label">  ' . $attr['label'] . ' </span>
                </div>
    ';

	return $output;
}

function thrive_shortcode_accordion_group( $attr, $content ) {
	$attr = shortcode_atts( array( 'title' => '' ), $attr );

	$output = '<h3>' . $attr['title'] . '</h3><div class="accs">';
	$output .= do_shortcode( $content );
	$output .= '</div>';

	return $output;
}

function thrive_shortcode_accordion( $attr, $content ) {

	$default = array(
		'title'   => '',
		'default' => 'no'
	);
	$attr    = shortcode_atts( $default, $attr );

	$output = '<div class="accss ' . ( $attr['default'] == 'yes' ? 'opac' : '' ) . '">
                    <h4 class="acc-h">
                        <span></span>
                        ' . $attr['title'] . '
                    </h4>

                    <div class="accsi">
                        <p>
                            ' . do_shortcode( $content ) . '
                        </p>
                    </div>
                </div>';

	return $output;
}

function thrive_shortcode_highlight( $attr, $content ) {
	$attr   = shortcode_atts( array( 'highlight' => '', 'text' => '' ), $attr );
	$output = '<span class="' . ( $attr['highlight'] == 'default' ? 'defhgh ' : ' ' ) . ( $attr['text'] == 'dark' ? 'dhgh ' : 'lhgh ' ) . '" ' . ( $attr['highlight'] != 'default' ? 'style="background-color:' . $attr['highlight'] . ';"' : '' ) . '>';
	$output .= $content;
	$output .= '</span>';

	return $output;
}

function thrive_shortcode_headline_focus( $attr, $content ) {
	$attr   = shortcode_atts( array( 'orientation' => '', 'title' => '' ), $attr );
	$output = '<div class="fhd ' . $attr['orientation'][0] . 'fhd">
                    <h3 class="fhdt">
                        ' . $attr['title'] . '
                    </h3>
                </div>';

	return $output;
}

function thrive_shortcode_drop_caps( $attr, $content ) {
	$attr   = shortcode_atts( array( 'style' => '', 'color' => '' ), $attr );
	$output = '<p class="drp' . $attr['style'] . ' ' . $attr['color'] . '">' . do_shortcode( $content ) . '</p>';

	return $output;
}

function thrive_shortcode_progress_bar( $attr, $content ) {
	$output = '';
	//var_dump($attr); die;
	for ( $i = 0; $i < $attr['count']; $i ++ ) {
		if ( ! isset( $attr[ 'color' . $i ] ) ) {
			$attr[ 'color' . $i ] = "orange";
		}
		if ( ! isset( $attr[ 'percentage' . $i ] ) || ! is_numeric( $attr[ 'percentage' . $i ] ) ) {
			$attr[ 'percentage' . $i ] = "100";
		}
		if ( $attr[ 'percentage' . $i ] > 100 ) {
			$attr[ 'percentage' . $i ] = 100;
		}
		if ( ! isset( $attr[ 'label' . $i ] ) ) {
			$attr[ 'label' . $i ] = "";
		}

		$output .= '<div class="clear"></div><div class="nsd ' . $attr[ 'color' . $i ] . '">
                        <span class="pbbl">' . $attr[ 'label' . $i ] . '</span>
                        <div class="nsda">
                            <div class="pbb">
                                <div class="pbfc" data-percent="' . $attr[ 'percentage' . $i ] . '" style="width: ' . $attr[ 'percentage' . $i ] . '%;">
                                    <div class="pbf">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="clear"></div>';
	}

	return $output;
}

function thrive_shortcode_number_counter( $attr, $content ) {

	$attr = shortcode_atts( array(
		'color'  => '',
		'before' => '',
		'value'  => '',
		'after'  => '',
		'label'  => ''
	), $attr );

	$output = '<div class="clear"></div><div class="nbc nsd ' . $attr['color'] . '" data-started="false">
                    <div class="nsda">
                        <div class="nbci">
                            <span class="nbcnb">' . $attr['before'] . '</span>
                            <span class="nbcn" data-counter="' . $attr['value'] . '">0</span>
                            <span class="nbcna">' . $attr['after'] . '</span>
                        </div>
                        <span class="nbcl">' . $attr['label'] . '</span>
                    </div>
                </div><div class="clear"></div>';

	return $output;
}

function thrive_shortcode_countdown( $attr, $content ) {

	$tzstring        = thrive_get_timezone_string();
	$timezone_offset = get_option( 'gmt_offset' );
	$sign            = ( $timezone_offset < 0 ? '-' : '+' );
	$min             = abs( $timezone_offset ) * 60;
	$hour            = floor( $min / 60 );
	$tzd             = $sign . str_pad( $hour, 2, '0', STR_PAD_LEFT ) . ':' . str_pad( $min % 60, 2, '0', STR_PAD_LEFT );
	$date            = $attr['year'] . '-' . $attr['month'] . '-' . $attr['day'] . 'T' . $attr['hour'] . ':' . $attr['min'] . ':00' . $tzd;
	$now             = new DateTime( 'now', $tzstring ? new DateTimeZone( $tzstring ) : null );

	$output = '
        <div class="cdt nsd sns ' . $attr['color'] . '" data-date="' . $date . '" data-fade="' . $attr['fade'] . '" data-message="' . ( $attr['text'] == '' ? '0' : '1' ) . '" data-server-now="' . $now->format( 'Y-m-d\TH:i:sP' ) . '">
            <div class="nsda">
                <div class="cdti clearfix">
            <div class="cdto">
                <div class="cdtc day"><!-- calculate: <?php echo 30 * max(2, strlen($day)) ?>px -->
                    <div class="cdfc"></div>
                </div>
                <span class="cdtl">Days</span>
            </div>
            <div class="cdto">
                <div class="cdtc hour">
                    <div class="cdfc"></div>
                </div>
                <span class="cdtl">Hours</span>
            </div>
            <div class="cdto">
                <div class="cdtc minute">
                    <div class="cdfc"></div>
                </div>
                <span class="cdtl">Minutes</span>
            </div>
            <div class="cdto">
                <div class="cdtc second">
                    <div class="cdfc"></div>
                </div>
                <span class="cdtl">Seconds</span>
            </div>
            </div>
            </div>
            <div class="cdtm" style="display:none;">' . $attr['text'] . '</div>
        </div>

        <div class="clear"></div>';

	return $output;
}

function thrive_shortcode_custom_box( $attr, $content ) {
	$attr   = shortcode_atts(
		array(
			'title'       => '',
			'style'       => 'light',
			'type'        => 'color',
			'image'       => '',
			'full_height' => 0,
			'color'       => 'white',
			'border'      => 'black'
		), $attr );
	$output = "";
	if ( $attr['type'] == "image" ) {
		$output = "<div class='thrivecb image " . ( $attr['full_height'] == 1 ? "flh" : "" ) . "'  style='background-image: url(\"" . $attr['image'] . "\")' >";
		if ( $attr['full_height'] == 1 ) {
			$output .= "<img class='dmy' src='" . $attr['image'] . "' alt=''/>
                        <div class='shn-i'>
                            <div class='shn" . ( $attr['style'] == "dark" ? "d" : "" ) . " cbt'>
                                <h4>" . $attr['title'] . "</h4>
                            </div>
                            <div class='shn" . ( $attr['style'] == "dark" ? "d" : "" ) . " shnt'>
                                <p>" . do_shortcode( $content ) . "</p>
                            </div>
                        </div>";
		} else {
			$output .= "<div class='shn" . ( $attr['style'] == "dark" ? "d" : "" ) . " cbt'>
                            <h4>" . $attr['title'] . "</h4>
                        </div>
                        <div class='shn" . ( $attr['style'] == "dark" ? "d" : "" ) . " shnt'>
                            <p>" . do_shortcode( $content ) . "</p>
                        </div>";
		}
		$output .= "</div>";
	} else {
		$output = "<div class='thrivecb def'  style='background-color: " . $attr['color'] . ";border:1px solid " . $attr['border'] . ";' >
                        <div class='shn" . ( $attr['style'] == "dark" ? "d" : "" ) . " cbt'>
                            <h4>" . $attr['title'] . "</h4>
                        </div>
                        <div class='shn" . ( $attr['style'] == "dark" ? "d" : "" ) . " shnt'>
                            <p>" . do_shortcode( $content ) . "</p>
                        </div>
                    </div>";
	}

	return $output;
}

function thrive_shortcode_split_button( $attr, $content ) {
	$attr = shortcode_atts( array(
		'left_color'  => '',
		'right_color' => '',
		'left_text'   => '',
		'right_text'  => '',
		'left_link'   => 'javascript:void(0)',
		'right_link'  => 'javascript:void(0)'
	), $attr );

	if ( empty( $attr['left_link'] ) ) {
		$attr['left_link'] = "javascript:void(0)";
	}
	if ( empty( $attr['right_link'] ) ) {
		$attr['right_link'] = "javascript:void(0)";
	}

	$output = '<div class="split">
                    <a href="' . $attr['left_link'] . '" class="btn medium ' . $attr['left_color'] . ' left">
                        <span>' . $attr['left_text'] . '</span>
                    </a>
                    <a href="' . $attr['right_link'] . '" class="btn medium ' . $attr['right_color'] . ' right">
                        <span>' . $attr['right_text'] . '</span>
                    </a>

                    <div class="clear"></div>
                </div>';

	return $output;
}

function thrive_shortcode_megabutton( $attr, $content ) {
	$attr = shortcode_atts( array(
		'color'  => '',
		'mt'     => '',
		'st'     => '',
		'link'   => 'javascript:void(0)',
		'target' => '_blank',
		'align'  => 'left'
	), $attr );

	if ( empty( $attr['link'] ) ) {
		$attr['link'] = "javascript:void(0)";
	}

	$output = '<a target="' . $attr['target'] . '" href="' . $attr['link'] . '"><div class="' . $attr['align'] . ' mbi mb ' . $attr['color'] . '">
    <div class="mbl"></div>
    <div class="mbr">
        <span class="mbt">' . $attr['mt'] . '</span>
                        <span class="mbb">' . $attr['st'] . '</span>
    </div>
    <div class="clear"></div>
</div></a>';

	return $output;
}

function thrive_shortcode_icon_box( $attr, $content ) {
	$attr    = shortcode_atts( array( 'color' => '', 'style' => 1, 'image' => '' ), $attr );
	$content = '<div class="icb icb' . $attr['style'] . ' ' . $attr['color'] . '">
                    <div class="icb-i">
                        <div class="icbc icbm">
                            <span style="background-image: url(\'' . $attr['image'] . '\')"></span>
                        </div>
                        <p>' . do_shortcode( $content ) . '</p>
                </div></div>';

	return $content;
}

/*
 * Pricing tables shortcodes
 */

function thrive_price_one( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'     => '',
		'time'      => '',
		'price'     => "",
		'btn_text'  => "",
		'btn_link'  => "",
		'btn_color' => 'orange',
		'highlight' => "",
		'btn_size'  => 'big'
	), $attr );

	$output = _thrive_generate_price_shortcode_output( $attr, $content, "price_one", "first" );

	return $output;
}

function thrive_price_one_half( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'     => '',
		'time'      => '',
		'price'     => "",
		'btn_text'  => "",
		'btn_link'  => "",
		'btn_color' => 'orange',
		'highlight' => "",
		'btn_size'  => 'big'
	), $attr );

	$output = _thrive_generate_price_shortcode_output( $attr, $content, "price_one_half", "first" );

	return $output;
}

function thrive_price_one_half_last( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'     => '',
		'time'      => '',
		'price'     => "",
		'btn_text'  => "",
		'btn_link'  => "",
		'btn_color' => 'orange',
		'highlight' => "",
		'btn_size'  => 'big'
	), $attr );

	$output = _thrive_generate_price_shortcode_output( $attr, $content, "price_one_half", "last" );

	return $output;
}

function thrive_price_one_third( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'     => '',
		'time'      => '',
		'price'     => "",
		'btn_text'  => "",
		'btn_link'  => "",
		'btn_color' => 'orange',
		'highlight' => "",
		'btn_size'  => 'big'
	), $attr );

	$output = _thrive_generate_price_shortcode_output( $attr, $content, "price_one_third", "normal" );

	return $output;
}

function thrive_price_one_third_first( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'     => '',
		'time'      => '',
		'price'     => "",
		'btn_text'  => "",
		'btn_link'  => "",
		'btn_color' => 'orange',
		'highlight' => "",
		'btn_size'  => 'big'
	), $attr );

	$output = _thrive_generate_price_shortcode_output( $attr, $content, "price_one_third", "first" );

	return $output;
}

function thrive_price_one_third_last( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'     => '',
		'time'      => '',
		'price'     => "",
		'btn_text'  => "",
		'btn_link'  => "",
		'btn_color' => 'orange',
		'highlight' => "",
		'btn_size'  => 'big'
	), $attr );

	$output = _thrive_generate_price_shortcode_output( $attr, $content, "price_one_third", "last" );

	return $output;
}

function thrive_price_one_fourth( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'     => '',
		'time'      => '',
		'price'     => "",
		'btn_text'  => "",
		'btn_link'  => "",
		'btn_color' => 'orange',
		'highlight' => "",
		'btn_size'  => 'big'
	), $attr );

	$output = _thrive_generate_price_shortcode_output( $attr, $content, "price_one_fourth", "normal" );

	return $output;
}

function thrive_price_one_fourth_first( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'     => '',
		'time'      => '',
		'price'     => "",
		'btn_text'  => "",
		'btn_link'  => "",
		'btn_color' => 'orange',
		'highlight' => "",
		'btn_size'  => 'big'
	), $attr );

	$output = _thrive_generate_price_shortcode_output( $attr, $content, "price_one_fourth", "first" );

	return $output;
}

function thrive_price_one_fourth_last( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'     => '',
		'time'      => '',
		'price'     => "",
		'btn_text'  => "",
		'btn_link'  => "",
		'btn_color' => 'orange',
		'highlight' => "",
		'btn_size'  => 'big'
	), $attr );

	$output = _thrive_generate_price_shortcode_output( $attr, $content, "price_one_fourth", "last" );

	return $output;
}

function thrive_price_one_fifth( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'     => '',
		'time'      => '',
		'price'     => "",
		'btn_text'  => "",
		'btn_link'  => "",
		'btn_color' => 'orange',
		'highlight' => "",
		'btn_size'  => 'big'
	), $attr );

	$output = _thrive_generate_price_shortcode_output( $attr, $content, "price_one_fifth", "normal" );

	return $output;
}

function thrive_price_one_fifth_first( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'     => '',
		'time'      => '',
		'price'     => "",
		'btn_text'  => "",
		'btn_link'  => "",
		'btn_color' => 'orange',
		'highlight' => "",
		'btn_size'  => 'big'
	), $attr );

	$output = _thrive_generate_price_shortcode_output( $attr, $content, "price_one_fifth", "first" );

	return $output;
}

function thrive_price_one_fifth_last( $attr, $content ) {
	$attr = shortcode_atts( array(
		'title'     => '',
		'time'      => '',
		'price'     => "",
		'btn_text'  => "",
		'btn_link'  => "",
		'btn_color' => 'orange',
		'highlight' => "",
		'btn_size'  => 'big'
	), $attr );

	$output = _thrive_generate_price_shortcode_output( $attr, $content, "price_one_fifth", "last" );

	return $output;
}

function _thrive_generate_price_shortcode_output( $attr, $content, $type, $position ) {
	$output = "";
	if ( $position == "first" ) {
		$output .= "<div class='row'>";
	}

	switch ( $type ) {
		case "price_one":
			$output .= "<div class='pt_one pt'>";
			break;
		case "price_one_half":
			$output .= "<div class='pt_two pt'>";
			break;
		case "price_one_third":
			$output .= "<div class='pt_three pt'>";
			break;
		case "price_one_fourth":
			$output .= "<div class='pt_four pt'>";
			break;
		case "price_one_fifth":
			$output .= "<div class='pt_five pt'>";
			break;
		default:
			$output .= "<div class='pt_one pt'>";
	}
	$in_div_class = ( ! empty( $attr['highlight'] ) ) ? "pt_in pt_hgh" : "pt_in";

	$output .= "<div class='" . $in_div_class . "'><h3 class='ctr'>" . $attr['title'] . "</h3>";

	$output .= "<p class='prc ctr'>" . $attr['price'];
	if ( ! empty( $attr['time'] ) ) {
		$output .= "<span>/" . $attr['time'] . "</span>";
	}
	$output .= "</p><ul class='check'>";

	$items = explode( "[*]", $content );

	foreach ( $items as $item ) {
		$output .= "<li>" . $item . "</li>";
	}

	$output .= "</ul><div class='prb'><a href='" . $attr['btn_link'] . "' class='btn " . $attr['btn_size'] . " " . $attr['btn_color'] . "'><span class='upp'>" . $attr['btn_text'] . "</span></a></div>";
	$output .= "</div></div>";

	if ( $position == "last" || $type == "price_one" ) {
		$output .= "</div>";
	}

	return $output;
}
