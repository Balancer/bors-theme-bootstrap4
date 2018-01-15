<?php

namespace B2\Theme;

class Bootstrap3 extends \B2\Theme\Common
{
	function _layout_class_def() { return \B2\Layout\Bootstrap3::class; }

	function pre_show()
	{
		// Bootstrap's JavaScript requires jQuery
		\B2\jQuery::load();

		if(!$this->get('__skip_pure_bootstrap_load'))
			\B2\Bootstrap3::load();

		return parent::pre_show();
	}
}
