<?php

namespace B2\Theme\Bootstrap3\Smarty;

class Layout extends \B2\Layout
{
	function table_class() { return 'table table-bordered table-striped'; }
	function ul_tab_class() { return 'nav nav-tabs'; }

	function forms_template_class() { return 'bors_layouts_bootstrap3_forms'; }
}
