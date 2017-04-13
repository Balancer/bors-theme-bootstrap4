<?php

namespace B2\Layout\Bootstrap3;

/*
	Параметры для форм по умолчанию
*/

class Form extends \B2\Layout\Common\Form
{
	function layout_type() { return 'bootstrap'; }

	function _form_table_css_def() { return 'table'; }
	function _form_table_left_th_css_def() { return 'span4'; }

	function _input_css_def() { return 'form-control'; }
	function _textarea_css_def() { return 'form-control'; }

	function _dropdown_css_def() { return 'span8'; }

	function _submit_css_def() { return 'btn'; }

	// Common form outer html.
	function _form_container_html_def() { return "%s"; }

	// Form title
	function _form_title_html_def() { return "<legend>%s</legend>"; }

	// content inner "<form>...</form>", two arguments: label and fields
	function _form_content_html_def() { return "<fieldset>\n%s\n%s</fieldset>"; }

	// One form row: $element_title and $element_html
	function _form_row_css_def() { return 'form-group'; }
	function _form_row_error_css_def() { return 'has-error'; }
	function _form_row_html_def() { return "\t<div%s>\n\t\t%s\n\t\t%s\n\t</div>\n"; }

	function _form_element_label_html_def() { return "\t\t<label>\t\t\t%s\t\t</label>\n"; }
	function _form_element_html_def() { return "\t\t%s\n"; }
}
