<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tag extends Jelly_Model {
	
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->name_key('name')
			->fields(array(
			'id' => new Field_Primary,
			'posts' => new Field_ManyToMany(array(
				'through' => 'posts_tags',
			)),
			'name' => new Field_String,
			'count' => new Field_Integer,						
		));
	}
	
} // End Tag Model