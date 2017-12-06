<ul class="<?=$ul_css?>">
<?php

use HtmlObject\Element;
use HtmlObject\Link;
use HtmlObject\Input;

if($navbar)
{
	foreach($navbar as $title => $items)
	{
		if(is_array($items))
		{
			$url = popval($items, 'url');

			if($fa = popval($items, 'fa'))
				$icon = 'fa fa-'.$fa;
			else
			{
				$icon = popval($items, 'i_class');

				if(!$icon)
					$icon = 'fa fa-circle-o';
			}

			if(count($items) < 1)
				$items = array_pop($items);
		}
		else
		{
			$url = $items;
			$icon = 'fa fa-circle-o';
		}

		if(preg_match('/^\w+$/', $url))
			$url = "/$url/";

		// Не объединять с предыдущей проверкой, так как массив может превратиться в одиночный элемент.
		if(is_array($items))
		{
			$link = Link::create($url, '')
				->addClass("dropdown-toggle")
				->appendChild(Element::i()->addClass($icon))
				->appendChild(Element::span($title))//.'&nbsp;&nbsp;<i class="fa fa-folder-open-o"></i>')->addClass("hidden-xs"));
				->appendChild(Element::span('<i class="fa fa-angle-left pull-right"></i>')->addClass("pull-right-container"));

//			$link->appendChild(Element::i()->addClass("fa fa-folder-o")->addClass('pull-right'));
			$el = Element::li()->addClass($li_tree_css ?: "dropdown")
				->nest($link);

			if($append = trim(\bors_layouts_bootstrap3_dropdown::draw_dropdown([$title => $items], 1)))
			{
				$ul = Element::ul(preg_replace("!^<ul[^>]*>(.+)</ul>$!s", '$1', $append))
					->addClass('treeview-menu');
//				dump((string)$ul);
				if($ul)
					$el->appendChild($ul);
			}
		}
		else
		{
			$el = Element::li()->nest(
				Link::create($url, '')
					->appendChild(Element::i()->addClass($icon))
					->appendChild(Element::span($title)->addClass('hidden-xs'))
			);
		}

		if(blib_urls::is_parent($url, bors()->request()->url()))
			$el->addClass('need-toggle active');

		echo $el;
	}
}
?>
</ul>
