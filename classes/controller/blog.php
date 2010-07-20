<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Leki_Controller_Page {
	
	public function action_index()
	{		
		$this->template->set_global('posts', Data::$post);
	}
	
	public function action_detail()
	{			
		// Get the comments			
		$comments = Data::$post->get('comments')->where('page', '=', Data::$page->uri)->active();
				
		$comment = Jelly::factory('comment');
		
		$form = Formit::factory()->orm($comment, array('subject' => 'Blog Comment', 'post' => Data::$post->id, 'page' => Data::$page->uri));
			
		if ($form->validate('validation'))
		{
			$comment->save();
		}
		
		// Get the entry data
		$this->template->set_global
		(
			array
			(
				'post' => Data::$post,
				'num_comments' => $comments->count(),
				'comments' => $comments->execute(),
				'captcha' => Captcha::instance()->render(),
				'form' => $form->render('comment'),
			)
		);
	}
	
} // End Blog Controller
	
/*	
public function validate($data = NULL)
	{		
		if ($data !== NULL)
		{		
			$view = $data['model'];
			
			if ( ! is_array($data))
			{
				$model = Jelly::factory($data);
			}
			else
			{			
				if (array_key_exists('model', $data))		
				{
					$model = Jelly::factory($data['model']);				
				}
				else
				{
					throw new Leki_Exception('No model was found in the form array');
				}
				
				if (array_key_exists('view', $data))
				{
					$view = $data['view'];
				}
			}
			
			if ($_POST) 
			{				
				if (array_key_exists('fields', $data))		
				{
					foreach ($data['fields'] as $field => $value)
					{
						$model->{$field} = $value;
					}
				}
				
				// Get array of fields in this model
				$fields = array_keys($model->meta()->fields());
				
				// Use Arr::extract() and specify the fields to add
				$model->set(Arr::extract($_POST, $fields));
				
				try 
				{
					// Save data to the model
					$model->validate();
					// $model->save();
					
					$success = "Data saved sucessfull..."; 
					
					// Reset fields
					$model = array(); 
				} 
				catch ( Validate_Exception $e )
				{
					$errors = $e->array->errors('validate');
				}
			}

			$form = View::factory(($this->_ajax) ? 'validate/json' : 'forms/'.$view)
					->bind('errors', $errors)
					->bind('success', $success)
					->bind('data', $model);
					
			if ($this->_ajax)
			{
				$this->template->content = $form;
			}
			else
			{	
				$this->template->set_global('form', $form);
			}
		}
		
		parent::after();
	}
	
} // End Serivice Validate Controller
*/