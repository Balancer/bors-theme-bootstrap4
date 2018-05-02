{if $side_menu}
	{foreach $side_menu as $block_title => $list}
<h4>{$block_title|escape}</h4>
<ul style="padding-bottom: 8px;">
		{foreach $list as $title => $link}
			{if !empty($link['title'])}
				{$title = $link['title']}
			{/if}

			{* Старый формат ссылки 'title' => $url *}
			{if !is_array($link)}
				{* Это голый текст *}
				{if empty($title)}
	<li>{$link}</li>
				{else}
	<li><a href="{$link}">{$title}</a></li>
				{/if}
			{else}
				{* Новый формат ['title' => $title, 'url' => $url, ...] *}
				{if !empty($link['type'])}
					{$type=" class=\"imaged type-`{$link['type']}`\""}
				{else}
					{type=""}
				{/if}
				{if !empty($link['link_target'])}
					{$target=" target=\"`{$link['link_target']}`\""}
				{else}
					{targete=""}
				{/if}
				{if !empty($link['url'])}
	<li{$type}><a href=\"{$link['url']}\"{$target}>{$title}</a></li>";
				{else}
	<li{$type}>{$title}</li>
				{/if}
			{/if}
		{/foreach}
</ul>
	{/foreach}
{/if}
