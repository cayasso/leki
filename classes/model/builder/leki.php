<?php defined('SYSPATH') or die('No direct script access.');

abstract class Model_Builder_Leki extends Jelly_Builder
{		
	public function active()
    {
       	return $this->where('status', '=', TRUE);
    }
}