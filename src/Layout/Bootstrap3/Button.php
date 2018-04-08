<?php

namespace B2\Layout\Bootstrap3;

class Button extends \B2\Layout\Module
{
	function html_code()
	{
		$url = $this->arg('url');
		$label = $this->arg('label');

		if($fa = $this->arg('fa'))
			$label = "<i class=\"fa fa-$fa\"></i> $label";

		if($icon_class = $this->arg('icon-class'))
			$label = "<i class=\"{$icon_class}\"></i> $label";

		return "<a href=\"$url\" class=\"btn btn-default\">{$label}</a>";
	}
}
