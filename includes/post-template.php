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
 * Fiddles the query depending on the value of the Additional Class(es) field.
 *
 * Fiddles the query to support orderby=rand when the className is "rand".
 * Fiddles the query to support display of posts in the related category/categories when the className is "related"
 */
function thisis_post_template_fiddle( $attributes, $content, $block ) {

	$className = isset( $attributes['className'])  ? $attributes['className'] : null;
	if ( $className && 'rand' === $className ) {
		$block->context['query']['orderBy'] = $className;
	}

	if ( $className && 'related' === $className ) {
		bw_trace2();
		$post = get_post();
		bw_trace2( $post );
		$terms = wp_get_post_categories( $post->ID, [ 'fields' => 'ids']);
		bw_trace2( $terms, "terms", false );
		$block->context['query']['taxQuery']['category'] = $terms;
	}
	//bw_trace2();
	return $block;
}

