<?php

namespace B2\Theme\Bootstrap4;

class Layout extends \B2\Layout\Bootstrap3
{
	function table_class() { return 'table table-bordered table-striped'; }
	function ul_tab_class() { return 'nav nav-tabs'; }

	function forms_template_class() { return \B2\Layout\Bootstrap3\Form::class; }
}
