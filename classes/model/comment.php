<?php defined('SYSPATH') or die('No direct script access.');

class Model_Comment extends Jelly_Model {
	
	public static function initialize(Jelly_Meta $meta)
	{		
		$meta->name_key('id')
			->fields(array(
			'id' => new Field_Primary,
			'post' => new Field_BelongsTo,			
			'url' => new Field_URL(array(
				'label' => __('Url'),				
			)),	
			'email' => new Field_Email(array(
				'label' => __('Email'),
				'rules' => array(
					'not_empty' => array(TRUE),
					'max_length' => array(64),
				)
			)),			
			'author' => new Field_String(array(
				'label' => __('Author'),
				'rules' => array(
					'not_empty' => array(TRUE),
					'max_length' => array(64),
				)
			)),			
			'subject' => new Field_String(array(
				'label' => __('Subject'),
				'default' => '',
				'rules' => array(
					'not_empty' => array(TRUE),
					'max_length' => array(127),
				)
			)),
			'page' => new Field_String(array(
				'label' => __('Web'),
				'rules' => array(
					'not_empty' => array(TRUE),
					'max_length' => array(64),
				)
			)),			
			'message' => new Field_Text(array(
				'label' => __('Comment'),				
				'rules' => array(
					'not_empty' => array(TRUE),
				)
			)),			
			'ip' => new Field_String(array(
				'label' => __('IP'),
				'default' => Request::$client_ip,
				'rules' => array(
					'max_length' => array(64),
				)
			)),	
			'agent' => new Field_String(array(
				'default' => Request::$user_agent,
				'rules' => array(
					'max_length' => array(127),
				)
			)),			
			'created' => new Field_Timestamp(array(
				'auto_now_create' => TRUE,
			)),
			'status' => new Field_Boolean(array(
				'default' => TRUE,
			)),
			'recaptcha_challenge_field' => new Field_Captcha(array(
				'in_db' => FALSE,
				'rules' => array(
					'not_empty' => array(TRUE),
				)
			))			
		));
	}
	
} // End Comment Model