<?php

namespace B2\Layout\Bootstrap3;

class Flipster extends \B2\Layout\Module
{
	function body_data()
	{
		bors_use('/bower-asset/jquery-flipster/dist/jquery.flipster.min.css');
		bors_use('/bower-asset/jquery-flipster/dist/jquery.flipster.min.js');

		return array_merge(parent::body_data(), [
			'items' => $this->args('items'),
		]);
	}
}
