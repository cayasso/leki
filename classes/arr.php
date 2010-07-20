<?php defined('SYSPATH') or die('No direct script access.');

class Arr extends Kohana_Arr {

	public static function xss(array $array)
	{

		foreach ($array as &$value)
		{
			if (is_array($value))
			{
				$value = self::xss($value);
			}
			else
			{
				$value = Security::xss_clean($value);
			}
		}

		return $array;
	}

}