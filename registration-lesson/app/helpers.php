<?php

/**
 * @param string $path
 * @param string $active_class
 * @return string
 */
function is_active($path, $active_class = 'active')
{
//	dd($path,Request::is($path) ? $active_class : '');
	return Request::is($path) ? $active_class : '';
}