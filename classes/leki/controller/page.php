<?php defined('SYSPATH') or die('No direct script access.');

abstract class Leki_Controller_Page extends Leki_Controller_Website {
	
	public $pagination = TRUE;
	
	public $detail = 'detail';
	
	public function before()
	{
		parent::before();
						
		$this->_set_page();
		
		if ($this->_id && $this->detail)
		{			
			// If id in the url then resquet action should be detail
			$this->request->action = $this->detail;
		}
	}
	
	public function _set_page()
	{		
		// Get page from DB
		$page = Jelly::select('page')->where('uri' ,'=', $this->_page)->active()->load();
		
		// If page is valid		
		if ($page->loaded())
		{
			if ($this->_id)
			{							
				// Get the post based on url id
				$post = $page->get('posts')->active($this->_id)->load();				
				
				if ( ! $post->loaded() AND $this->request->controller === 'blog')
				{
					return $this->action_404();
				}
				else
				{
					// Set the page meta data and title
					$this->template->title = $post->title;
					$this->template->keywords = $post->keywords;
					$this->template->description = $post->description;
				}
			}
			else
			{	
				// Default query
				$this->pagination($post = $page->get('posts')->active());				
				$post = $post->execute();
			}
						
			Data::$page = $page;
			Data::$post = $post;
			
			// Set the page view
			$this->template->content = View::factory('pages/'.$page->uri);
		}
		else
		{		
			return $this->action_404();
		}			
	}	
	
} // End Page Controller