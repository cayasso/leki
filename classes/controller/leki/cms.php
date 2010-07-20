<?php defined ( 'SYSPATH' ) or die ( 'No direct script access.' );

abstract class Controller_Leki_CMS extends Controller_Admin {

	
		
	public function action_login() 
	{		
		
		$usuario = Jelly::factory('user');
		
		$usuario->set(array('username' => '', 'email' => 'todo-ggg.com'));
		
		try
		{
		    $usuario->validate();
		} 
		catch (Validate_Exception $e)
		{
		    // Get the errors using the Jelly_Validator::errors() method
		    $errors = $e->array->errors('blog/post');
		    echo Kohana::debug($errors);
		}
		

		
		
		
		/*
		$view = 'users/login';
		$this->template->header = "";
		$this->template->footer = "";
		
		$form = Folly::factory('user', Request::instance()->uri(), array('id' => 'form-login'));
		
		$form->model('user', array('username', 'password'));
		
		// Redirect to the index page if the user is already logged in
		if ($this->auth->logged_in())
		{
			$this->request->redirect(Route::get('leki-cms')->uri(array('action' => 'list')));
		}
		
		if ($form->valid(FALSE, array('username')))
		{					
			// See if user checked 'Stay logged in'
			$remember = ($form->post('remember')) ? TRUE : FALSE;
		
			// Try to log the user in
			if ( ! $this->auth->login($form->post('username'), $form->post('password'), $remember))
			{
				// There was a problem logging in
				$form->flash_message('Unable to login, please try again');
			}
			
			// Redirect to the index page if the user was logged in successfully
			if ($this->auth->logged_in())
			{
				$this->request->redirect(Route::get('leki-cms')->uri());
			}
		}		

		$data['field'] = $form;
				
		// Set the page view
		$this->template->content = View::factory($this->view_path.$view, $data);*/
	}
	
	public function action_logout()
	{
		// Log the user out if he is logged in
		if ($this->auth->logged_in())
		{
			$this->auth->logout();
		}

		// Redirect to the index page
		$this->request->redirect('cms/login');
	}
	
	public function action_register() 
	{
			$user = Jelly::factory ( 'user' );
			
			$user->set ( array('username' => 'caya', 'email' => 'caya@gmail.com', 'password' => 'shalom', 'password_confirm' => 'shalom', 'last_login' => time()) );
			
			// Add the 'login' role to the user model
			$user->add ( 'roles', 1 );
			
			try 
			{
				// Try to save our user model
				$user->save ();
				
				// Redirect to the index page
				$this->request->redirect ( Route::get ( 'default' )->uri ( array ('action' => 'index' ) ) );
				
			} // There were errors saving our user model
			catch ( Validate_Exception $e ) 
			{
				// Load custom error messages from `messages/forms/user/register.php`
				$errors = $e->array->errors ( 'forms/user/register' );
			}
		echo kohana::debug($errors);
	}

} // End Serivice Validate Controller