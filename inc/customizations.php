<?php
/**
 * Smellycat - Customizations Goes Here
 *
 * @package Smellycat
 * @author iamRahul1973
 */

/**
 * Add Extra Attributes to Enqueued Stylesheets.
 *
 * @param string $html The link tag html targeted towards the DOM.
 * @param string $handle The id we used to enqueue the stylesheet.
 * @return string
 */
function add_extra_attributes_to_enqueued_css( $html, $handle ) {

	$search = "media='all'";

	if ( 'bootstrap' === $handle ) {
		return str_replace( $search, "media='all' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'", $html );
	}

	if ( 'flexpanel' === $handle ) {
		return str_replace( $search, "media='screen'", $html );
	}

	if ( 'font-awesome' === $handle ) {
		return str_replace( $search, "media='all' integrity='sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==' crossorigin='anonymous'", $html );
	}

	return $html;

}

add_filter( 'style_loader_tag', 'add_extra_attributes_to_enqueued_css', 10, 2 );

/**
 * Add Extra Attributes to Enqueued Scripts for the theme
 *
 * @param string $tag The HTML tag element to be inserted in the DOM.
 * @param string $handle The ID that we used to enqueue the script.
 * @return string
 */
function add_extra_attributes_to_enqueued_js( $tag, $handle ) {

	$search = '></script>';

	if ( 'jquery' === $handle ) {
		return str_replace( $search, " integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'", $tag );
	}

	if ( 'bootstrap-bundle' === $handle ) {
		return str_replace( $search, " integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx' crossorigin='anonymous'", $tag );
	}

	if ( 'font-awesome' === $handle ) {
		return str_replace( $search, " integrity='sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==' crossorigin='anonymous'", $tag );
	}

	return $tag;

}

add_filter( 'script_loader_tag', 'add_extra_attributes_to_enqueued_js', 10, 2 );

/**
 * Remove Prefix Term From Get_the_archive_title
 *
 * @param string $title archive title.
 * @return string
 */
function remove_prefix_from_archive_title( $title ) {

	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_tax() ) { // for custom post types.
		// translators: term title.
		$title = sprintf( '%1$s', single_term_title( '', false ) );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	}

	return $title;

}

add_filter( 'get_the_archive_title', 'remove_prefix_from_archive_title' );
