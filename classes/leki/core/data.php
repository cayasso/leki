<?php defined('SYSPATH') or die('No direct access allowed.');

class Leki_Core_Data {

	protected static $_data = array();
			
	public static $_instance;
	
	public function __construct()
	{
		// Get site configs
		if ( $this->config = Kohana::config('site') )
		{				
			// Set configs
			$this->config->set('site', DB::query(Database::SELECT, 'SELECT `key` , `value` FROM `configs`')->execute()->as_array('key', 'value'));			
		}
	}
		
	public static function get()
	{
		return new Leki_Site();	
	}
	
	public static function instance()
	{
		if ( ! self::$instance)
		{
			self::$instance = new self;			
		}
		
		return self::$instance;
	}
	
	protected function set($key, $value)
	{
		$this->_data[$key] = $value;
		
		return self;
	}
	
	/**
	 * Removes a variable in the session array.
	 *
	 *     $session->delete('foo');
	 *
	 * @param   string  variable name
	 * @param   ...
	 * @return  $this
	 */
	public function delete($key)
	{
		$args = func_get_args();

		foreach ($args as $key)
		{
			unset($this->_data[$key]);
		}

		return $this;
	}
	
} // End Site


/*
class Page {
	
	$title
	$metas
	$styles
	$scripts
	$content
	$footer
	$header
	$widgets
	$elements	
}

class Leki {
	
	$url;
	
	$nav;
	
	$bread_crumbs;		
}

class Leki_Data {
	$_data;
}

class Leki_Widget {
	$_name;
	$_view;
	$_class;
	$_data;
	
	function render(){}
}


class Leki_Website
class Leki_Base
class Leki_Service
class Leki_Form
*/