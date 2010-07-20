<?php defined('SYSPATH') or die('No direct script access.');

return array(
	
	'success'			=> 'Your registration was successful! please check your email for instructions.',	
	'error'				=> 'You have errors submiting your form, check the error messages bellow.',	
	'token'		=> array
	(
		'not_empty'			=> 'Invalid Authorization token',
		'validate::token'	=> 'Authorization token was invalid.',
	),
	'captcha'		=> array
	(
		'not_empty'			=> 'Type the security code',
		'validate::captcha'	=> 'Invalid security code',
	),
	'name'    	=> array
	(
	 	'not_empty' 	=> 'Enter your :field',
		'min_length'	=> 'Your :field is too short',		
		'regex'			=> 'Your :field has invalid characters',
		
	),
	'url'		=> 'Enter a valid :field',
	'email'		=> 'Enter a valid :field',
	'not_empty'		=> ':field No puede estar vacio',
	'message'	=> array
	(
		'not_empty'		=> 'Enter your :field',
	),
	'subject'	=> array
	(
		'not_empty'		=> 'Enter your :field',
		'min_length'	=> 'Your :field is too short',
		'max_length'	=> 'Your :field is too large',
	),
	'username'	=> array
	(
		'not_empty' 	=> 'Enter your :field',
		'max_length'	=> 'Your :field is too large',
		'min_length'	=> 'Your :field is too short',
		'username_available' => ':field already registered',
		'invalid'	=> 'Invalid username or password',
		'unique'	=> 'unico'
	),
	'password'	=> array		
	(
		'not_empty' 	=> 'Enter your :field',
		'invalid'		=> 'Invalid :field',
	),
	'password_confirm' => array
	(
		'matches'		=> 'Password confirm must be the same as new password',
	),
	'city'		=> array
	(
		'not_empty'		=> 'Enter your :field',
		'regex'			=> 'Your :field has invalid characters',
	),
	'province'	=> array
	(
		'not_empty'		=> 'Enter your :field',
		'regex'			=> 'Your :field has invalid characters',
	),
	'postal_code'=> array
	(
		'digit'			=> 'Enter your :field',
	),
	'address'	=> array
	(
		'not_empty'		=> 'Enter your :field',
	),
	'country'	=> array
	(
		'not_empty'		=> 'Enter your :field',
	),
	'phone'		=> array
	(
		'not_empty'		=> 'Enter your :field',
	),
	'company'	=> array
	(
		'min_length'	=> 'Your :field name is too short',
		'max_length'	=> 'Your :field name is too large',
	),
);