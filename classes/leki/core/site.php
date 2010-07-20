<?php defined('SYSPATH') or die('No direct access allowed.');

class Leki_Core_Site {

	protected $_data = array();
			
	protected $config = array();
	
	public function __construct()
	{
		// Get site configs
		if ( $this->config = Kohana::config('site') )
		{				
			// Set configs
			$this->config->set('site', DB::query(Database::SELECT, 'SELECT `key` , `value` FROM `configs`')->execute()->as_array('key', 'value'));			
		}
	}
		
	public static function load()
	{
		return new Leki_Site();	
	}
	
	protected function _register_data()
	{
		
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