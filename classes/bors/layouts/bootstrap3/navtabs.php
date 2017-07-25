<?php

class bors_layouts_bootstrap3_navtabs extends bors_module
{
	function is_active_tab($url)
	{
		$url = str_replace('&r=1', '', $url);

		if($url[0] == '?')
			$url = preg_replace('!^(.+?)\?.+$!', '$1', bors()->request()->url()) . $url;

//		r($url, bors()->request()->url());
		return $url == bors()->request()->url();
	}
}
