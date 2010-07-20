<?php defined('SYSPATH') or die('No direct script access.');

abstract class Leki_Controller_Service extends Leki_Controller_Template {
		
	// Ajax status
	protected $_ajax = FALSE;
	
	public function before()
	{
		parent::before();
		
		if (Request::$is_ajax OR $this->request !== Request::instance())
		{
			// This is an AJAX request
			$this->_ajax = TRUE;			
		}
	}
	
	public function after()
	{
		if ($this->_ajax === TRUE)
		{			
			if ($this->request->response === '')
			{				
				$this->request->response = $this->template->content;
			}
		}
		else
		{
			parent::after();
		}	
	}
	
} // End Service Controller