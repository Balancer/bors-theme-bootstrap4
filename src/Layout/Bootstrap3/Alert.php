<?php

namespace B2\Layout\Bootstrap3;

class Alert extends \B2\Layout\Module
{
	function html_code()
	{
		$text = $this->args('text');
		$size = $this->args('size');
		$type = $this->args('type');

//		if($fa = $this->arg('fa'))
//			$label = "<i class=\"fa fa-$fa\"></i> $label";

		return "<div class=\"alert alert-$type\">{$text}</div>";
	}
}
