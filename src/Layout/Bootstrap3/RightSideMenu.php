<?php

namespace B2\Layout\Bootstrap3;

class RightSideMenu extends \B2\Layout\Module
{
	function body_data()
	{
		return array_merge(parent::body_data(), [
			'side_menu' => $this->args('side_menu'),
		]);
	}
}
