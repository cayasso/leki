<?php defined('SYSPATH') or die('No direct script access.');

abstract class Leki_Model_User extends Model_Auth_User {

	public static function initialize(Jelly_Meta $meta)
    {		
    	parent::initialize($meta);
    	    	
		$meta->fields(array(
		
		/*	'name' => new Jelly_Field_String(array(
				'label' => __('Name'),				
				'rules' => array(
					'not_empty' => NULL,
					'max_length' => array(127),
				)
			)),
			'passkey' => new Jelly_Field_String(array(
				'label' => __('Passkey'),				
				'rules' => array(
					'not_empty' => NULL,
					'max_length' => array(255),
				)
			)),
			'website' => new Jelly_Field_URL(array(
				'rules' => array(
					'not_empty' => NULL,
					'max_length' => array(127),
				)
			)),
			'phone' => new Jelly_Field_String(array(
				'label' => 'Phone',
				'rules' => array(
					'not_empty' => NULL,
					'max_length' => array(15),
				)				
			)),
			'mobile' => new Jelly_Field_String(array(
				'label' => 'Mobile',
				'rules' => array(
					'not_empty' => NULL,
					'max_length' => array(15),
				)
			)),
			'fax' => new Jelly_Field_String(array(
				'label' => 'Fax',
				'rules' => array(
					'not_empty' => NULL,
					'max_length' => array(15),
				)
			)),
			'address' => new Jelly_Field_String(array(
				'label' => __('Address'),
				'rules' => array(
					'not_empty' => NULL,
					'max_length' => array(255),
				)
			)),
			'city' => new Jelly_Field_String(array(
				'label' => __('City'),
				'rules' => array(
					'not_empty' => NULL,
					'max_length' => array(64),
				)
			)),*/	
			'province' => new Jelly_Field_String(array(
				'label' => __('Province'),
				'rules' => array(
					'not_empty' => FALSE,
					'max_length' => array(64),
				)
			)),		
			//'country' => new Field_Country,
			'created' => new Jelly_Field_Timestamp(array(
				'label' => __('Created On'),
				'format' => 'Y-m-d H:i:s',
				'auto_now_create' => TRUE
			)),
			'modified' => new Jelly_Field_Timestamp(array(
				'label' => __('Modified'),
				'format' => 'Y-m-d H:i:s',
				'auto_now_create' => TRUE
			)),
			'status' => new Jelly_Field_Boolean(array(
				'label' => __('Status'),
				'default' => FALSE,
			)),
			'post' => new Jelly_Field_HasMany(array(
				'model' => 'Post'
			))
		));
	}
	
} // End User Model