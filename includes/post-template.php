<?php
/**
 * Overrides core/post-template
 *
 * Hack until a solution is delivered in Gutenberg.
 *
 * @param $attributes
 * @param $content
 * @param $block
 * @return string
 */
function thisis_render_block_core_post_template( $attributes, $content, $block ) {
	$block = thisis_post_template_fiddle( $attributes, $content, $block );
	$html = gutenberg_render_block_core_post_template( $attributes, $content, $block );
	return $html;
}

/**
 * Fiddles the query to support orderby=rand when the className is "rand".
 *
 */
function thisis_post_template_fiddle( $attributes, $content, $block ) {
	$className = isset( $attributes['className'])  ? $attributes['className'] : null;
	if ( $className && 'rand' === $className ) {
		$block->context['query']['orderBy'] = $className;
	}
	//bw_trace2();
	return $block;
}

