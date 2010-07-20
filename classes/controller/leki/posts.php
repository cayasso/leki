<?php defined ( 'SYSPATH' ) or die ( 'No direct script access.' );

abstract class Controller_Leki_Posts extends Controller_Admin {
	
	public $login_required = TRUE;
	
	public $model = 'post';

} // End Controller_Leki_Posts