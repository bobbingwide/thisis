<?php
/**
 * Overrides core/query-loop.
 *
 * Hack until a solution is delivered in Gutenberg.
 *
 * @param $attributes
 * @param $content
 * @param $block
 * @return string
 */
function thisis_render_block_core_query_loop( $attributes, $content, $block ) {
    $block = thisis_query_loop_fiddle( $attributes, $content, $block );
    $html = gutenberg_render_block_core_query_loop( $attributes, $content, $block );
    return $html;
}

/**
 * Fiddles the query to support orderby=rand when the className is "rand".
 *
 */
function thisis_query_loop_fiddle( $attributes, $content, $block ) {
    $className = isset( $attributes['className'])  ? $attributes['className'] : null;
    if ( $className && 'rand' === $className ) {
        $block->context['query']['orderBy'] = $className;
    }
    //bw_trace2();
    return $block;
}
