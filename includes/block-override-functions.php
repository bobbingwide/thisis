<?php
/**
 * Overrides a core block's render_callback method, if required.
 *
 * For the given blockname, if the overriding function is available
 * and the current callback is the gutenberg function
 * replace the render_callback with our own function.
 *
 * @param array $args Block attributes.
 * @param string $blockname The block name to test for.
 * @param string $render_callback The common suffix for the block's callback function.
 * @return array Block attributes.
 */
function thisis_maybe_override_block($args, $blockname, $render_callback)
{
	$thisis_render_callback = 'thisis_' . $render_callback;
	if ($blockname == $args['name'] && function_exists($thisis_render_callback)) {
		if ('gutenberg_' . $render_callback == $args['render_callback']) {
			$args['render_callback'] = $thisis_render_callback;
		}
	}
	return $args;
}