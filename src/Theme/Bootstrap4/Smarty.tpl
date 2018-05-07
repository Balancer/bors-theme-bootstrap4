<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{$self->description()|htmlspecialchars}">
	<meta name="author" content="">

	<title>{$self->browser_title()|htmlspecialchars}</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-hQpvDQiCJaD2H465dQfA717v7lu5qHWtDbWNPvaTJ0ID5xnPUlVXnKzq7b8YUkbN" crossorigin="anonymous">

{if !empty($css_list)}
	{foreach $css_list as $css}
	<link rel="stylesheet" type="text/css" href="{$css}" />
	{/foreach}
{/if}

<style>
	body { padding-top: 70px; }
</style>

{if !empty($style)}
	{bors_pages_helper::style($style)}
{/if}

{if !empty($javascript)}
	<script type="text/javascript"><!--
	{foreach $javascript as $js}
		{$js}
	{/foreach}
	--></script>
{/if}
</head>

<body role="document">

	{* Fixed navbar *}

	<nav class="{if $navbar_classes}{$navbar_classes}{else}navbar navbar-inverse navbar-fixed-top{/if}" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

{if $brand_logo}
				<a class="navbar-brand" href="{$self->project()->url()}">{$brand_logo}</a>
{else}
				<a class="navbar-brand" href="{$self->project()->url()}"><i class="fa fa-home"></i>&nbsp;{$self->project()->title()|htmlspecialchars}</a>
{/if}
			</div>
{$nav_menu = $self->get('navbar')}
{if $nav_menu}
			<div class="collapse navbar-collapse">
	{foreach $nav_menu as $title => $submenu}
		{$pull = popval($submenu, '*pull')}
		{$force_title = popval($submenu, '*title')}
		{if $force_title}
			{$title = $force_title}
		{/if}
		{$icon_css = popval($submenu, '*icon_css')}
				<ul class="nav navbar-nav{if $pull=='right'} navbar-right{/if}">
		{if count($submenu) == 1 && !is_array($submenu[0])}
			{$submenu = $submenu[0]}
		{/if}
		{if is_array($submenu)}
					<li class="dropdown">
<!--					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>-->
			{bors_layouts_bootstrap3_dropdown::show(['menu' => [$title => $submenu], 'icon_css' => $icon_css])}
					</li>
		{else}
			{if preg_match('/^\w+$/', $submenu)}
				{$url = "/$submenu/"}
			{else}
				{$url = $submenu}
			{/if}
					<li class="active2"><a href="{$url}">{$title|htmlspecialchars}</a></li>
		{/if}
				</ul>
	{/foreach}
			</div>{* /.navbar-collapse*}
{/if}
		</div>
	</nav>

	<div class="container theme-showcase" role="main">

{foreach bors_lib_object::parent_lines($self) as $breadcrumbs_line}
		<ol class="breadcrumb">
	{foreach $breadcrumbs_line as $x}
		{if empty($x['is_active'])}
			<li><a href="{$x['url']}">{$x['title']}</a></li>
		{else}
			<li class="active">{$x['title']}</li>
		{/if}
	{/foreach}
		</ol>
{/foreach}

		<div class="page-header">
			<h1>{$self->page_title()|htmlspecialchars}</h1>
{if $self->description()}
			<p>{$self->description()|htmlspecialchars}</p>
{/if}
		</div>


{$self->body()}

	</div> <!-- /container -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

{foreach $js_include as $js}
	<script type="text/javascript" src="{$js}"></script>
{/foreach}

{foreach $js_include_post as $js}
	{Element::script()->type("text/javascript")->src($js)}
{/foreach}

{if !empty($javascript_post) || !empty($jquery_document_ready)}
	<script type="text/javascript"><!--
	{foreach $javascript_post as $js}
		{$js}
	{/foreach}

	{if !empty($jquery_document_ready)}
		$(function() {
		{foreach $jquery_document_ready as $js}
			{$js}
		{/foreach}
		})\n";
	{/if}
	--></script>
{/if}

</body>
</html>
