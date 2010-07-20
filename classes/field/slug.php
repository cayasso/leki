<?php defined('SYSPATH') or die('No direct script access.');

class Field_Slug extends Jelly_Field_Slug {

	public function save($model, $value, $loaded)
	{
		$version = 1; 
		
		$slug_array = explode('-', $value); 
		
		$num_segment = array_pop($slug_array); 
		
		while (TRUE)
		{			
			if ( ! Jelly::select($this->model)->where($this->column, '=', $value)->where(':unique_key', '!=', $model->id())->count())
			{				
				return $value;
			}
			
			$value = implode('-', $slug_array).'-'.$num_segment.'-'.++$version;
		}		
	}
	
} // End Field_Slug