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
			$icon = popval($items, 'i_class');
			if(!$icon)
				$icon = 'fa fa-circle-o';
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
			;

			$link->appendChild(Element::i()->addClass($icon));

			$link->appendChild(Element::span($title.'&nbsp;&nbsp;<i class="fa fa-folder-open-o"></i>')->addClass("hidden-xs"));

//			$link->appendChild(Element::i()->addClass("fa fa-folder-o")->addClass('pull-right'));
			$el = Element::li()->addClass("dropdown")
				->nest($link);

			if($append = trim(bors_layouts_bootstrap3_dropdown::draw_dropdown([$title => $items], 1)))
				@$el->appendChild($append);
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
			$el->addClass('need-toggle');

		echo $el;
	}
}
?>
</ul>
