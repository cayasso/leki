<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Jelly url field.
 *
 * @package    Jelly
 * @author     Jonathan Brumley
 * @copyright  (c) 2010 Lekinox
 * @license    MIT
 */
class Jelly_Field_URL extends Jelly_Field_String {

	/**
	 * @var  string  Validate as an url
	 */
	public $rules = array(
		'url' => NULL
	);
	
} // End Jelly_Field_URL