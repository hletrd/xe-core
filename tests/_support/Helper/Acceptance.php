<?php
namespace Helper;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{
	/**
	* Fill a CK Editor field.
	*
	* @param $value
	*   The value to enter into CK Editor.
	* @param string $selector
	*   A CSS (only) selector to identify the <textarea> element.
	*/
	public function fillCkEditor($value, $id = 'editor1')
	{
		$this->getModule("WebDriver")->executeJs("CKEDITOR.instances['$id'].setData(".json_encode($value).")");
	}
}
