<?php defined ( 'SYSPATH' ) or die ( 'No direct script access.' );

abstract class Controller_Leki_Pages extends Controller_Admin {
	
	public $login_required = TRUE;
	
	public $model = 'page';

} // End Controller_Leki_Pages