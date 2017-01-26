<?php

namespace B2\Layout\Bootstrap3;

/*
	Cards list.
	Inspired from:	https://codepen.io/bootstrapped/pen/OMNYpq
	Also: 			https://codepen.io/lottejackson/pen/PwvjPj
					https://codepen.io/liakwee/pen/FzEpo

	Guides in russian:
		- http://frontender.info/a-guide-to-flexbox/
		- https://habrahabr.ru/post/242545/
		- https://html5book.ru/css3-flexbox/
		- https://webformyself.com/dizajn-maketa-stranicy-s-tovarami-pri-pomoshhi-flexbox/
*/

class Cards extends \B2\Layout\Module
{
	function body_data()
	{
		return array_merge(parent::body_data(), [
			'items' => $this->args('items'),
		]);
	}
}
