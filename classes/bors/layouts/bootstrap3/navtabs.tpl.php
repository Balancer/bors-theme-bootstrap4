<?php

if(!$tabs)
	return;

echo "<ul class=\"nav nav-tabs\">\n";

foreach($tabs as $title => $link)
	echo "<li".($self->is_active_tab($link) ? ' class="active"' : '')."><a href=\"{$link}\">".htmlspecialchars($title)."</a></li>\n";

echo "</ul>\n";
