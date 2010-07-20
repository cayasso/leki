<?php defined('SYSPATH') or die('No direct script access.');

abstract class Leki_Controller_Website extends Leki_Controller_Leki {
	
	public function after() 
	{		
		parent::after();
		
		if ( ! $this->_ajax)
		{		
			// Set navigation
			$this->template->navigation = Jelly::select('page')->active_menu()->execute();	
			
			// Set breadcrumbs
			$this->template->breadcrumbs = html::breadcrumbs($this->request->param());
			
			// Set pagination if enable
			if ($this->pagination)
			{
				$this->template->set_global('pagination', Data::$pagination);
			}
			
			// Set config values to template
			$this->template->header = View::factory('layouts/header');
			$this->template->footer = View::factory('layouts/footer');
			$this->template->sidebar = View::factory('layouts/sidebar');
			$this->template->styles .= html::style('media/css/style.css', array('media' => 'screen'));
			$this->template->scripts .= html::script('http://cdn.jquerytools.org/1.1.2/full/jquery.tools.min.js');
			$this->template->scripts .= html::script('media/js/animations.js');
		}
	}
	
} // End Website Controller