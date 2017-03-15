<?php

namespace B2\Theme;

class Bootstrap3 extends \B2\Theme\Common
{
	var $layout_class = \B2\Layout\Bootstrap3::class;

	function pre_show()
	{
		if(empty(\bors::$bower_asset_packages['bower-asset/bootstrap']))
		{
			bors_use('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
			bors_use('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css');
			bors_use('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
			// IE10 viewport hack for Surface/desktop Windows 8 bug
		}
		else
		{
			$asset = \B2\cfg('bower-asset.path', '/bower-asset').'/bootstrap/dist';
			bors_use($asset.'/css/bootstrap.min.css');
			bors_use($asset.'/css/bootstrap-theme.min.css');
			bors_use($asset.'/js/bootstrap.min.js');
		}

		bors_use('//maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js');

		return parent::pre_show();
	}
}
