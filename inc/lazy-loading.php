<?php
/**
 * Set all images returned by `wp_get_attachment_image` to lazy-load by default
 */
function _s_lazy_load_images($attr) {
	if ( $attr['loading'] !== 'eager' ) {
		$attr['loading'] = 'lazy';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', '_s_lazy_load_images');

/**
 * Set all images added to posts/pages to lazy-load by default
 */
function _s_lazy_load_post_images( $html, $id, $caption, $title, $align, $url, $size, $alt ) {
	$html = preg_replace( '/(<img[^>]*)(\s*)(\/?>)/m', '$1$2 loading="lazy" $3', $html );
	return $html;
}
add_filter( 'image_send_to_editor', '_s_lazy_load_post_images', 10, 8 );

/**
 * Lazy load all oEmbeds with iframes
 *
 * Note: This is disabled by default because it forces ALL oEmbeds to load lazily. When it is enabled (by uncommenting
 *       the add_filter line below), there is no option to change an oEmbed's loading priority except by customizing
 *       the _s_lazy_load_oembeds function below.
 */
function _s_lazy_load_oembeds( $data ) {
	return preg_replace( '/(<iframe[^>]*)(\s*)(\/?>)/mi', '$1$2 loading="lazy" $3', $data );
}
// add_filter('embed_oembed_html', '_s_lazy_load_oembeds', 10, 3);
