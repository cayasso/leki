<?php defined('SYSPATH') or die('No direct access allowed.');

class Leki_Form extends Kohana_Form {

	
	/**
	 * Creates a email form input.
	 *
	 *     echo Form::email('csrf', $token);
	 *
	 * @param   string  input name
	 * @param   string  input value
	 * @param   array   html attributes
	 * @return  string
	 * @uses    Form::input
	 */
	public static function email($name, $value = NULL, array $attributes = NULL)
	{
		$attributes['type'] = 'email';

		return Form::input($name, $value, $attributes);
	}
	
	/**
	 * Creates a url form input.
	 *
	 *     echo Form::url('csrf', $token);
	 *
	 * @param   string  input name
	 * @param   string  input value
	 * @param   array   html attributes
	 * @return  string
	 * @uses    Form::input
	 */
	public static function url($name, $value = NULL, array $attributes = NULL)
	{
		$attributes['type'] = 'url';

		return Form::input($name, $value, $attributes);
	}
	
	/**
	 * Creates a number form input.
	 *
	 *     echo Form::number('csrf', $token);
	 *
	 * @param   string  input name
	 * @param   string  input value
	 * @param   array   html attributes
	 * @return  string
	 * @uses    Form::input
	 */
	public static function number($name, $value = NULL, array $attributes = NULL)
	{
		$attributes['type'] = 'number';

		return Form::input($name, $value, $attributes);
	}
	
	/**
	 * Creates a search form input.
	 *
	 *     echo Form::search('csrf', $token);
	 *
	 * @param   string  input name
	 * @param   string  input value
	 * @param   array   html attributes
	 * @return  string
	 * @uses    Form::input
	 */
	public static function search($name, $value = NULL, array $attributes = NULL)
	{
		$attributes['type'] = 'search';

		return Form::input($name, $value, $attributes);
	}
	
	/**
	 * Creates a search form input.
	 *
	 *     echo Form::search('csrf', $token);
	 *
	 * @param   string  input name
	 * @param   string  input value
	 * @param   array   html attributes
	 * @return  string
	 * @uses    Form::input
	 */
	public static function date($name, $value = NULL, array $attributes = NULL)
	{
		$attributes['type'] = 'date';

		return Form::input($name, $value, $attributes);
	}
	
	/**
	 * Creates a color form input.
	 *
	 *     echo Form::color('csrf', $token);
	 *
	 * @param   string  input name
	 * @param   string  input value
	 * @param   array   html attributes
	 * @return  string
	 * @uses    Form::input
	 */
	public static function color($name, $value = NULL, array $attributes = NULL)
	{
		$attributes['type'] = 'color';

		return Form::input($name, $value, $attributes);
	}
	
	/**
	 * Creates a range form input.
	 *
	 *     echo Form::hidden('csrf', $token);
	 *
	 * @param   string  input name
	 * @param   string  input value
	 * @param   array   html attributes
	 * @return  string
	 * @uses    Form::input
	 */
	public static function range($name, $value = NULL, array $attributes = NULL)
	{
		$attributes['type'] = 'range';

		return Form::input($name, $value, $attributes);
	}

	
} // End form
