<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Leki_Admin extends Controller_Authenticate {
	
	// This controller is for public pages
	protected $_is_public = FALSE;
    
	// Reset the template
	public $template = 'leki/template';

	public $view_path = 'leki/';
	
	public $actions = array('delete', 'publish', 'unpublish');
	
	public function action_index() 
	{
		$this->list_data($this->model);
	}
	
	public function action_edit($id = NULL)
	{		
		$this->edit($this->model, $id);
	}
		
	public function action_new()
	{		
		$this->create($this->model);
	}
		
	public function action_delete($id = NULL) 
	{		
		if ( $id !== NULL)
		{
			$this->delete($this->model, $id);
		}
	}
	
	public function list_data($model) 
	{
		$pmodel = Inflector::plural($model);
		
		$view = $pmodel.'/list';
		
		$this->pagination($select = Jelly::select($model));
		
		$data[$pmodel] = $select->execute(); 
		
		// Set the page view
		$this->template->content = View::factory($this->view_path.$view, $data);	
	}
	
	protected function create($model)
	{		
		$this->update($model);
	}
	
	protected function edit($model, $id = NULL)
	{		
		if ( $id !== NULL)
		{
			$this->update($model, $id);
		}
	}	
	
	public function update($model, $id = NULL)
	{		
		$view = Inflector::plural($model).'/update';
		
		$results = ($id !== NULL) ? Jelly::select($model, $id) : Jelly::factory($model);
		
		$form = Folly::factory($model, Request::instance()->uri(), array('id' => 'form-'.$model));
		
		$form->model($results);
		
		if ($status = $form->posted())
		{			
			$form->values($form->post);
			
			if ( ! $status = $form->save())
			{
				$form->flash_message('You have errors in your form, please check bellow.');
			}		
			else
			{			
				$form->flash_message('Su información fue guardada exitosamente.');
			}		
		}
		
		
		$data['field'] = $form;
				
		// Set the page view
		$this->template->content = View::factory($this->view_path.$view, $data);
		
		return $status;
	}
	
	public function delete($model, $id)
	{			
		$view = 'layouts/delete';
						
		if ($_POST)
		{
			try
			{
				Jelly::factory($model)->delete($id);
				$this->request->redirect(Route::get('leki-cms')->uri());
			}
			catch (Exception $e)
			{
				$data['message'] = 'Could not delete user.';
			}
		}
		
		// Set the page view
		$data['name'] = $model;
		$data['page'] = Inflector::plural($model);
		
		$this->template->content = View::factory($this->view_path.$view, $data);
	}

	public function multi_publish($model_name, $data = array(), $status = TRUE)
	{
		foreach ($data as $field => $result)
		{						
			foreach ($result as $id => $value)
			{								
				$model = Jelly::select($model_name)->load($id);										
				$model->{$field} = $status;
				$model->save();				
			}		
		}				
	}
	
	public function multi_unpublish($model_name, $data = array())
	{	
		$this->multi_publish($model_name, $data, FALSE);				
	}
	
	public function multi_delete($model_name, $data = array(), $redirect = NULL)
	{	
		foreach ($data as $field => $result)
		{						
			foreach ($result as $id => $value)
			{	
				if ($status = Jelly::factory($model_name)->delete($id))
				{				
					if ($redirect !== NULL)
					{
						$this->request->redirect($redirect);
					}
				}
			}
		}

		return $status;
	}
	
	public function after() 
	{		
		parent::after();
		
		if ( ! $this->_ajax)
		{			
			// Set pagination if enable
			if ($this->pagination)
			{
				$this->template->set_global('pagination', Data::$pagination);
			}
			
			// Set config values to template
			$this->template->header = View::factory('leki/layouts/header');
			$this->template->footer = View::factory('leki/layouts/footer');

			$this->template->styles .= html::style('media/css/960/reset.css');
			$this->template->styles .= html::style('media/css/960/fluid.css');
			$this->template->styles .= html::style('media/css/960/text.css');
			
			$this->template->styles .= html::style('media/css/admin/template.css');			
			$this->template->styles .= html::style('media/css/admin/color.css');			
			$this->template->styles .= html::style('media/css/calendar.css');
			
			$this->template->scripts .= html::script('http://cdn.jquerytools.org/1.2.3/full/jquery.tools.min.js');
			$this->template->scripts .= html::script('http://js.nicedit.com/nicEdit-latest.js');			
			$this->template->scripts .= html::script('media/js/leki.js');
		}
	}
	
} // End Controller_Leki_Admin