<?php defined ( 'SYSPATH' ) or die ( 'No direct script access.' );

abstract class Controller_Leki_Comments extends Controller_Admin {
	
	public $login_required = TRUE;
	
	public $model = 'comment';
		
	public function action_list($id = NULL) 
	{
		$view = 'comments/list';
		$pmodel = Inflector::plural($this->model);
		
		if ($post = $_POST)
		{		
			foreach($this->actions as $action)
			{
				if (array_key_exists($action, $post) AND array_key_exists($pmodel, $post))
				{															
					call_user_func_array(array('self', 'multi_'.$action), array($this->model, $post[$pmodel]));										
				}
			}			
		}						
		
		$this->pagination($comments = Jelly::select('post', $id)->get('comments'));		
		$this->template->content = View::factory($this->view_path.$view, array('comments' => $comments->execute()));		
	}	
	
} // End Controller_Leki_Comments