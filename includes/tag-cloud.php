<?php
/**
 * Server-side rendering of the `core/tag-cloud` block.
 *
 * @package WordPress
 */

/**
 * Renders the `core/tag-cloud` block on server.
 *
 * @param array $attributes The block attributes.
 *
 * @return string Returns the tag cloud for selected taxonomy.
 */
function thisis_render_block_core_tag_cloud( $attributes, $content, $block ) {
	$args      = array(
		'echo'       => false,
		'taxonomy'   => $attributes['taxonomy'],
		'show_count' => $attributes['showTagCounts'],
		'number' => thisis_tag_cloud_number_arg(  $attributes, $content, $block)
	);
	$tag_cloud = wp_tag_cloud( $args );

	if ( ! $tag_cloud ) {
		$taxonomy = get_taxonomy($attributes['taxonomy']);
		if ($taxonomy) {
			$labels = get_taxonomy_labels(get_taxonomy($attributes['taxonomy']));
			$tag_cloud = esc_html(
				sprintf(
				/* translators: %s: taxonomy name */
					__('Your site doesn&#8217;t have any %s, so there&#8217;s nothing to display here at the moment.'),
					strtolower($labels->name)
				)
			);
		} else {
			$tag_cloud = esc_html(
				sprintf(
				/* translators: %s: taxonomy name */
					__('Tag cloud not displayed. Taxonomy %s is not registered.'), $attributes['taxonomy']

				)
			);
		}

	}

	$wrapper_attributes = get_block_wrapper_attributes();

	return sprintf(
		'<p %1$s>%2$s</p>',
		$wrapper_attributes,
		$tag_cloud
	);
}

/**
 * Returns the number of tags to display.
 *
 * This is an override function. It overrides the default behaviour
 * so that all tags are listed in the tag cloud.
 * If you want to control the amount set the Additional CSS class(es) to "number-nnn"
 * where nnn is an integer.
 *
 * Note: wp_tag_cloud() uses get_terms() to fetch the terms using orderby count DESC.
 * The number of terms to retrieve is passed to get_terms.
 * If term Zzzz is used many times but term Aaaa is only used once then
 * Zzzz may be included but not Aaaa.
 * So when you increase the number of terms to retrieve, the additional terms
 * can appear anywhere in the cloud.
 *
 * CSS class | Value to return
 * --------- | --------------
 * not set   | 0
 * number-nnn | nnn, if nnn is a positive integer
 * number-xxx | 45 - default if xxx isn't an integer
 *
 * @return int
 */
function thisis_tag_cloud_number_arg( $attributes, $content, $block ) {
	//bw_trace2();
	$number = 0;
	$className = isset( $attributes['className']) ? $attributes['className'] : null;
	//echo $className;
	if ( $className && 0 === strpos( $className, 'number') ) {
		$number=substr( $className, 6 );
		if ( is_numeric( $number ) ) {
			$number=absint( $number );
		} else {
			$number = 45;
		}
	}
	return $number;
}