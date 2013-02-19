<?php
require_once 'BaseClass.php';

/**
* LineType
* 
* Used attributes
* name default 'continuous'
* flag default 64
* description default 'Solid line'
* lineType default 'continuous'
* elements default array()
*
* TODO: Implement lineType elements
*/

class LineType extends BaseClass{

	/*
	* Constructor
	* It is recommended that sublasses calls parent::__construct($attributes)
	* after setting default attributes 
	*
	* @param  Array	$attributes	array of attributes
	*/
	function __construct($attributes = array()){
		$defaults = array();
		$defaults['name'] = 'continuous';
		$defaults['flag'] = 64;
		$defaults['description'] = 'Solid line';
		// TODO: Implement lineType elements
		$defaults['elements'] = array();
		parent::__construct(array_merge($defaults, $attributes));
	}

	/*
	* __toString
	* Returns a string representation of layer
	* @return 	string	the string representation of this layer
	*/
	function __toString(){
		// TODO all are string values, maybee som should be decimal
		return sprintf("0\nLTYPE\n2\n%s\n70\n%s\n3\n%s\n72\n65\n73\n%s\n40\n0.0",
									strtoupper($this->attributes['name']),
									$this->attributes['flag'],
									$this->attributes['description'],
									count($this->attributes['elements'])
				);
	}
}
?>