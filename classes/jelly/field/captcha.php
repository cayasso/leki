<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Jelly url field.
 *
 * @package    Jelly
 * @author     Jonathan Brumley
 * @copyright  (c) 2010 Lekinox
 * @license    MIT
 */
abstract class Jelly_Field_Captcha extends Jelly_Field_String {

	/**
	 * @var  string  Validate as an url
	 */
	public $rules = array(
		'Captcha::validate' => NULL
	);
	
} // End Jelly_Field_URL