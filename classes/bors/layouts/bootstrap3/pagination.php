<?php

class bors_layouts_bootstrap3_pagination extends bors_module
{
	function html_code()
	{
		$object = $this->args('object');

		if($object->total_pages() < 2)
			return '';

//		if(empty($skip_title))
//			$title = ec('<li>Страницы:</li>');

        include_once("inc/design/page_split.php");
		$object->attr['___pagination_item_before'] = '<li>';
		$object->attr['___pagination_item_before_current'] = '<li class="active">';
		$object->attr['___pagination_item_after'] = '</li>';

        $pages = join("\n", pages_show(
			$object, $object->total_pages(), $object->items_around_page(),
			true
		));

		return '<ul class="pagination">'.$pages.'</ul>';
	}
}
