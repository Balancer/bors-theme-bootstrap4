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

		$this->url   = $url;
		$this->label = $label;

		return $this;
	}

	function url($url = false)
	{
		if($url === false)
			return $this->url;

		$this->url = $url;
		return $this;
	}

	function __toString()
	{
		return "<a href=\"{$this->url()}\" class=\"btn btn-default\">{$this->label()}</a>";
	}
}
