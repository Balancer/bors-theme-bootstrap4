<?php

namespace B2\Layout\Bootstrap3;

class Carousel extends \B2\Layout\Module
{
	function body_data()
	{
		bors_use('https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js');

		return array_merge(parent::body_data(), [
			'items' => $this->args('items'),
		]);
	}
}
