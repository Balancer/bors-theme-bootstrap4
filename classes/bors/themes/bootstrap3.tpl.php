<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= htmlspecialchars($self->description());/*"*/?>">
	<meta name="author" content="">
<?php /*	<link rel="icon" href="../../favicon.ico"> */?>

	<title><?= htmlspecialchars($self->browser_title()); ?></title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-hQpvDQiCJaD2H465dQfA717v7lu5qHWtDbWNPvaTJ0ID5xnPUlVXnKzq7b8YUkbN" crossorigin="anonymous">

<style>
	body { padding-top: 70px; }
</style>

<?php
	if(!empty($css_list))
		foreach($css_list as $css)
			echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{$css}\" />\n";

	if(!empty($style))
		echo bors_pages_helper::style($style);

	if(!empty($javascript))
	{
		echo "<script type=\"text/javascript\"><!--\n";
		foreach($javascript as $s)
			echo $s,"\n";
		echo "--></script>\n";
	}
?>

</head>

<body role="document">

	<!-- Fixed navbar -->
<?php
if(empty($navbar_classes))
	echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">";
else
	echo "<nav class=\"{$navbar_classes}\" role=\"navigation\">";
?>
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

<?php
if(empty($brand_logo))
	echo "<a class=\"navbar-brand\" href=\"{$self->project()->url()}\">".htmlspecialchars($self->project()->title())."</a>";
else
	echo "<a class=\"navbar-brand\" href=\"{$self->project()->url()}\">{$brand_logo}</a>";
?>
			</div>
<?php
	if($nav_menu = $self->get('navbar'))
	{
?>
			<div class="collapse navbar-collapse">
<?php
		foreach($nav_menu as $title => $submenu)
		{
				$pull = popval($submenu, '*pull');
				$icon_css = popval($submenu, '*icon_css');
?>
				<ul class="nav navbar-nav<?= ($pull=='right') ? ' navbar-right' : ''?>">
<?php

			if(is_array($submenu))
			{
				$pull = popval($submenu, '*pull');
				if($pull)
					$pull = " pull-right";
?>
				<li class="dropdown<?=$pull?>">
<!--				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>-->
<?php
			bors_layouts_bootstrap3_dropdown::show(['menu' => [$title => $submenu], 'icon_css' => $icon_css]);
?>
				</li>
<?php
			}
			else
			{
				if(preg_match('/^\w+$/', $submenu))
					$url = "/$submenu/";
				else
					$url = $submenu;
				echo "<li class=\"active2\"><a href=\"{$url}\">".htmlspecialchars($title)."</a></li>\n";
			}
?>
				</ul>
<?php
		}
?>
<?php
	}
?>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<div class="container theme-showcase" role="main">

<?php
	foreach(bors_lib_object::parent_lines($self) as $breadcrumbs_line)
	{
?>
		<ol class="breadcrumb">
<?php
		foreach($breadcrumbs_line as $x)
		{
			if(empty($x['is_active']))
				echo "<li><a href=\"{$x['url']}\">{$x['title']}</a></li>";
			else
				echo "<li class=\"active\">{$x['title']}</li>";
		}
?>
		</ol>
<?php
	}
?>


		<div class="page-header">
			<h1><?= $self->page_title() ?></h1>
			<?php if($self->description()) echo "<p>".htmlspecialchars($self->description())."</p>"; ?>
		</div>


		<?= $self->body() ?>

	</div> <!-- /container -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<script src="../../assets/js/docs.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<?php

	if(!empty($js_include))
		foreach($js_include as $s)
			echo "<script type=\"text/javascript\" src=\"{$s}\"></script>\n";

	if(!empty($js_include_post))
		foreach($js_include_post as $s)
			echo Element::script()->type("text/javascript")->src($s);

	if(!empty($javascript_post) || !empty($jquery_document_ready))
	{
		echo "<script type=\"text/javascript\"><!--\n";
		if(!empty($javascript_post))
		{
			foreach($javascript_post as $js)
				echo $js;
		}

		if(!empty($jquery_document_ready))
		{
//			echo "\$(document).ready(function() {\n";
			echo "\$(function() {\n";
			foreach($jquery_document_ready as $js)
				echo $js, "\n";
			echo "})\n";
		}

		echo "--></script>\n";
	}
?>

</body>
</html>
