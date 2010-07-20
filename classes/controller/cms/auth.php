<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cms_Auth extends Controller_Admin {
	
	public function before()
	{
		parent::before();
		
		$this->_is_public = $this->_session->get('is_public');
		
		$this->_redirect_to = $this->_session->get('current_url');
	}
	
	/**
	 * Call the login method
	 *
	 * @return	void
	 */
	public function action_login()
	{
		$this->template->set_global('page', 'login');
				
		$form = $this->form('form_login', array('user' => 'login'));
		
		// If request is ajax set json return
		if ($this->_ajax === TRUE)
		{
			if ($this->_success)
			{
				$this->_flash_message = __('Your login was successfull');
			}			
		}
		else
		{		
			$this->template->content = $form;			
			
			if ($this->_success)
			{
				$this->_redirect();
			}
		}
	}
	
	/**
	 * Call the logout instance of Auth
	 *
	 * @return	void
	 */
	public function action_logout()
	{
		// Load auth and log out
		Auth::instance()->logout(TRUE);
		
		// Redirect to current url
		$this->_redirect();
	}
	
	/**
	 * Redirect method (redirecto to corresponding page)
	 *
	 * @return	void
	 */
	private function _redirect()
	{
		Request::instance()->redirect(($this->is_public) ? $this->redirect_to : 'auth/login');
	}
	
	/**
	* Send temp reset pwd link to user email
	*
	* @access	public
	* @return	void
	*/
	public function action_recover_pwd()
	{	
		if ($this->_id AND $secret = $this->request->param('secret'))
		{
			$auth = Auth::instance();
			
			$user = ORM::factory('user', $this->_id);
			
			$key = $user->email.date("Ymd", time());
			
			if ($user->loaded() AND ($auth->hash_password($key, $auth->find_salt($secret)) == $secret))
			{
				$form = $this->form('form_change_pwd', array('user' => 'change_password'), TRUE);
				
				if ( ! $this->_ajax)
				{
					$this->template->content = $form;	
					
					if($this->_success)
					{
						$this->_redirect('auth/login');
					}
				}
				else
				{
					if ($this->_success)
					{
						$this->_flash_message = __('Your password has been changed successfully!');
					}	
				}
			}	
		}
		else
		{			
			$form = $this->form('form_request_pwd', array('user' => 'recover_password'));

			if ( ! $this->_ajax)
			{								
				$this->template->content = $form;
			}
			
			if ($this->_success)
			{
				$this->_flash_message = __('Process successfull! Check your email for instructions to reset your password');
			}
		}	
	}
	
} // End Serivice Validate Controller