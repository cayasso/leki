<?php defined('SYSPATH') or die('No direct script access.');

class Leki_Controller_Leki extends Leki_Controller_Service {
	
	// Session instance
	protected $_session;
			
	// Id in the url
	protected $_id;
	
	// Page instance
	protected $_page;
		
	// Language
	protected $_lang;
	
	// Configurations
	protected $_config; 
	
	// Current url
	protected $_current_url;
	
	// Pagination status
	public $pagination = TRUE;
		
	public function before()
	{
		parent::before();
		
		$request = $this->request;
		
		// Set the id
		$this->_id = $request->param('id');
		
		// Set the page (uri)
		$this->_page = $request->param('page');

		// Set the default session instance, this will be used throughout the application
		$this->_session = Session::instance();
		
		// Set the current url
		$this->_current_url = $request->uri;
		
		
		// Get site configs
		
		$this->_config = Kohana::config('site');
				
		// Set configs
		$this->_config->set('cnf', DB::query(Database::SELECT, 'SELECT `key` , `value` FROM `configs`')->execute()->as_array('key', 'value'));						
		
		
		// Set global variables				
		$this->template->set_global($this->_config['urls']);
		$this->template->set_global($this->_config['cnf']);
		$this->template->set_global('html_tags',$this->_config['html_tags']);
		$this->template->set_global('page', $this->_page);
		
	}
			
	public function action_404()
	{
		// Set the 404 status
		$this->request->status = 404;
		
		// Set error styles
		$this->template->styles .= html::style('med/css/errors.css', array('media' => 'screen'));
						
		// Set the 404 error title
		$this->template->title = __('Page Not Found');
		
		// Set the 404 error view as content
		$this->template->content = View::factory('errors/404');
		
		return FALSE;
	}
	
	public function pagination($model = NULL)
	{
		if ($model !== NULL AND $this->pagination)
		{
			// Get total entry items
			$count = $model->count();
		
			// Set pagination
			$pagination = Pagination::factory(array('total_items' => ($count) ? $count : Kohana::config('pagination')->default['total_items']));
			
			// Seting offset and limit
			$model->limit($pagination->items_per_page)->offset($pagination->offset);
			
			// Render pagination
			Data::$pagination = $pagination->render();
		}
	}
	
} // End Controller_Leki