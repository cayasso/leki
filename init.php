<?php defined('SYSPATH') or die('No direct script access.');
Route::set('leki/posts', '<page>(/<id>)', array('page' => '(publicaciones)'))
	->defaults(array(
		'controller' => 'blog',
		'id'		 => NULL,
	));
	
Route::set('leki-cms-login', 'cms/login')
		->defaults(array(
			'controller' => 'cms',
			'action'	=> 'login',
		));
		
Route::set('leki-cms-logout', 'cms/logout')
		->defaults(array(
			'controller' => 'cms',
			'action'	=> 'logout',
		));
		
Route::set('leki-cms','cms(/<controller>(/<action>(/<params>)))',array('params'=>'.*'))
	->defaults(array(
		'controller' => 'pages',
		'action'	=> 'index',
		'directory'	=> 'cms',		
	));
	
		

