<?php defined('SYSPATH') or die('No direct script access.');
 /**
 * Page ORM model
 *
 * @package    	Page model
 * @author     	Jonathan Brumley
 * @copyright  	(c) 2008 Lekinox
 * @created  	2008 Dec 29
 */
class Model_Page extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{		
		$meta->name_key('title')
			->fields(array(
			'id' => new Field_Primary,
			'posts' => new Field_HasMany,
			'title' => new Field_String(array(
				'label' => __('Title'),
				'rules' => array(
					'not_empty' => array(TRUE),
					'max_length' => array(128),
					'min_length' => array(3),
				)
			)),
			'uri' => new Field_String(array(							
				'label' => __('Uri'),
				'unique' => TRUE,
				'rules' => array(
					'not_empty' => array(TRUE),				
				)				
			)),
			'status' => new Field_Boolean(array(
				'label' => __('Status'),
			)),	
			'language' => new Field_String(array(
				'label' => __('Language'),
				'default' => 'es',
			)),
			'menu_active' => new Field_Boolean(array(
				'label' => __('Menu Active'),
			)),
			'menu_weight' => new Field_Integer(array(														  
				'label' => 'Menu Weight',
			)),			
			'tid' => new Field_Integer(array(
				'default' => 0,
			)),
			'modified' => new Field_Timestamp(array(
				'auto_now_create' => TRUE,
			)),			
			
		));
	}
}