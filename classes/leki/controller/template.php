<?php defined('SYSPATH') or die('No direct script access.');

abstract class Leki_Controller_Template extends Controller_Koutline { 
	
	public function before()
	{
		parent::before();
		
		if ($this->auto_render === TRUE)
		{
			// Initialize template variables
			$this->template->title 			= '';
			$this->template->keywords 		= '';
			$this->template->description	= '';
			$this->template->styles 		= '';
			$this->template->scripts 		= '';		
			$this->template->header 		= '';
			$this->template->footer 		= '';
			$this->template->sidebar 		= '';
			$this->template->content 		= '';
			$this->template->navigation 	= '';
		}
	}
}
	