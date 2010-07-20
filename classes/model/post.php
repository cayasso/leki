<?php defined('SYSPATH') or die('No direct script access.');

class Model_Post extends Jelly_Model {
	
	public static function initialize(Jelly_Meta $meta)
	{		
		$meta->name_key('title')
			->fields(array(						
			'id' => new Field_Primary,
			'page' => new Field_BelongsTo,
			'comments' => new Field_HasMany,					
			'title' => new Field_String(array(
				'label' => __('Title'),
			)),
			'sub_title' => new Field_String(array(
				'label' => __('Sub Title'),
			)),
			'uri' => new Field_Slug,		
			'keywords' => new Field_String(array(
				'label' => __('Keywords'),
			)),			
			'description' => new Field_String(array(
				'label' => __('Description'),
			)),
			'author' => new Field_String(array(
				'label' => __('Author'),
			)),
			'content' => new Field_Text(array(
				'label' => __('Content'),
			)),
			'tags' => new Field_ManyToMany(array(
				'through' => 'posts_tags',
				'editable' => array(TRUE),			
			)),
			'status' => new Field_Boolean,
			'language' => new Field_String(array(
				'label' => __('Language'),
			)),
			'tid' => new Field_Integer,
			'allow_comments' => new Field_Boolean(array(
				'label' => __('Allow Comment'),
			)),
			'modified_by' => new Field_String(array(
				'label' => __('Modified By'),
			)),
			'modified' => new Field_Timestamp(array(
				'auto_now_update' => TRUE
			)),
			'created' => new Field_Timestamp(array(
				'auto_now_create' => TRUE
			)),			
		));
	}

} // End Post Model