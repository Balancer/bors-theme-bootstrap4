<?php

namespace B2\Theme;

class Bootswatch3 extends Bootstrap3
{
	var $__skip_pure_bootstrap_load = true;

	function pre_show()
	{
		\B2\jQuery::load();

		bors_use('https://bootswatch.com/3/slate/bootstrap.min.css');
		bors_use('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');

		return parent::pre_show();
	}
}
