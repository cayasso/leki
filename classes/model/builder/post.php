<?php defined('SYSPATH') or die('No direct script access.');

class Model_Builder_Post extends Model_Builder_Leki {
	
	public function active($id = NULL)
    {
		return ($id !== NULL) ? $this->where('uri','=',$id)->and_where('status', '=', TRUE): parent::active();		
    }
		
}