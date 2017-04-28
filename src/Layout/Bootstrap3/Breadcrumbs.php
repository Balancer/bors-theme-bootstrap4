<?php

namespace B2\Layout\Bootstrap3;

class Breadcrumbs extends \B2\Layout\Module
{
	function body_data()
	{
		$breadcrumbs = [];
		foreach(\bors_lib_object::parent_lines($this->args('view')) as $line)
		{
			if(count($line) > 1)
				$breadcrumbs[] = $line;
		}

		return array_merge(parent::body_data(), compact('breadcrumbs'));
	}
}
