<?php defined('SYSPATH') or die('No direct script access.');

class Model_Builder_Page extends Model_Builder_Leki {

	public function active_menu()
    {
        return $this->where('menu_active', '=', TRUE)->where('status', '=', TRUE)->order_by('menu_weight');
    }
}