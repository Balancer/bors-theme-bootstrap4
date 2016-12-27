<?php

namespace B2\Layout;

class Bootstrap3cdn extends \B2\Layout
{
	function table_class() { return 'table table-bordered table-striped'; }
	function ul_tab_class() { return 'nav nav-tabs'; }

	function forms_template_class() { return \B2\Layout\Bootstrap3cdn\Form::class; }
}
