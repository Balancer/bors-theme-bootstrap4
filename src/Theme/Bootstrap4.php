<?php

namespace B2\Theme;

class Bootstrap4 extends \B2\Theme\Common
{
	function _layout_class_def() { return Bootstrap4\Layout::class; }

	function pre_show()
	{
		// Bootstrap's JavaScript requires jQuery
		\B2\jQuery::load();

		if(!$this->get('__skip_pure_bootstrap_load'))
			\B2\Bootstrap4::load();

		return parent::pre_show();
	}
}
