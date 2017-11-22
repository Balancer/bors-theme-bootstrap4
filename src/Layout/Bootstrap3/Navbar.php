<?php

namespace B2\Layout\Bootstrap3;

class Navbar extends \B2\Layout\Module
{
	function body_data()
	{
		$view = $this->args('view');
//		$object = $this->args('object');

		$ul_css = $this->args('ul_css', 'navbar navbar-inverse');

		$navbar = $view->get('navbar');

		// Expand old legacy format
		if(is_array($navbar) && count($navbar) == 1 && !empty($navbar['Разделы']))
			$navbar = $navbar['Разделы'];

		return array_merge(parent::body_data(), [
			'navbar' => $navbar,
			'tree_li_css' => $this->args('tree_li_css', 'dropdown'),
		], compact('ul_css', 'view'));
	}
}
