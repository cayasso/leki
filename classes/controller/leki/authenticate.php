<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Leki_Authenticate extends Controller_Leki {
	
	// Current url
	protected $_current_url;
	
	// login is required
	public $login_required = FALSE;
	
	// Page is public or not
	protected $_is_public = FALSE;
	
	// User login status
	protected $_logged_in = FALSE;
	
	// Auth instance
	public $auth;
	
	public function before()
	{
		parent::before();
		
		// Get auth instance
		$this->auth = Auth::instance();
		
		// Get the user informatioon if logged in
		$this->_user = $this->auth->get_user();

		// Check if user is logged in
		if ($this->auth->logged_in())
		{
			 $this->_logged_in	= TRUE;		
		}
		else if ($this->login_required === TRUE)
		{
			// If login is required redirect to login
			$this->request->redirect('cms/login');
		}
		
		// Set tge current url in session
		$this->_session->set('current_url', $this->_current_url);
		
		// Set public flag in session
		$this->_session->set('is_public', (int) $this->_is_public);
		
		$this->template->set_global('user', $this->_user);
		$this->template->set_global('logged_in', $this->_logged_in);		
	}
	
} // End Controller_Leki_Authenticate