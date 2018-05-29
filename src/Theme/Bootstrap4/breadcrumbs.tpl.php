<nav aria-label="breadcrumb">
<?php

	foreach(bors_lib_object::parent_lines($self) as $breadcrumbs_line)
	{
?>
<ol class="breadcrumb">
<?php
		foreach($breadcrumbs_line as $x)
		{
			if(empty($x['is_active']))
				echo "<li class=\"breadcrumb-item\"><a href=\"{$x['url']}\">{$x['title']}</a></li>\n";
			else
				echo "<li class=\"breadcrumb-item active\" aria-current=\"page\">{$x['title']}</li>\n";
		}
?>
</ol>
<?php
	}
?>
</nav>
