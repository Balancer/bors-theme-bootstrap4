{foreach $breadcrumbs as $breadcrumbs_line}
<ol class="breadcrumb">
	{foreach $breadcrumbs_line as $x}
		{if $x.is_active}
			<li class="active">{$x.title}</li>
		{else}
			<li><a href="{$x.url}">{$x.title}</a></li>
		{/if}
	{/foreach}
</ol>
{/foreach}
