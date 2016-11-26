<?php

class bors_layouts_bootstrap3_items extends bors_module
{
	function html_code()
	{
		$items = $this->args('items');

		if(!$items || $items->is_null())
			return "";

		$table_columns = $this->args('item_fields');

		if(!$table_columns)
			$table_columns = $this->item_fields($items->first());

		return bors_module::mod_html(bors_pages_module_paginated_items::class, [ 'items' => $items, 'table_columns' => $table_columns]);

	}

	function item_fields($foo)
	{
//		$foo->set_attr('container_view_object', $this);

/*
		if($this->args('is_admin'))
		{
			$admin_foo = bors_foo($this->model_admin_class());
			$admin_foo->set_attr('container_view_object', $this);
			$data = $admin_foo->get('item_list_admin_fields', []);
		}
*/
		if(empty($data))
			$data = $foo->get('item_list_fields');

		if($data)
			return $data;
/*
		if($this->__is_admin())
			return [
				'admin()->titled_link()' => _('Название'),
				'mtime' => _('Дата изменения'),
				'id' => ec('ID'),
			];
*/
		return [
			'title' => _('Название'),
			'mtime' => _('Дата изменения'),
			'id' => ec('ID'),
		];
	}
}
