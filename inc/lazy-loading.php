<?php
/**
 * Set all images returned by `wp_get_attachment_image` to lazy-load by default
 */
function _s_lazy_load_images($attr) {
	$attr['loading'] = 'lazy';
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', '_s_lazy_load_images');

/**
 * Set all images added to posts/pages to lazy-load by default
 */
function _s_lazy_load_post_images( $html, $id, $caption, $title, $align, $url, $size, $alt ) {
	$html = preg_replace( '/(<img[^>]*)(\s*)(\/>)/m', '$1$2loading="lazy" $3', $html );
	return $html;
}
add_filter( 'image_send_to_editor', '_s_lazy_load_post_images', 10, 8 );
