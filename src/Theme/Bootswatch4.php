<?php

namespace B2\Theme;

class Bootswatch4 extends Bootstrap4
{
	var $__skip_pure_bootstrap_load = true;

	function pre_show()
	{
		\B2\jQuery::load();

		bors_use('https://bootswatch.com/4/slate/bootstrap.min.css');
		bors_use('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js');

		return parent::pre_show();
	}
}
