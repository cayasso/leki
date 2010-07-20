<?php defined('SYSPATH') or die('No direct script access.');

class Leki_Core {
	    
	const VERSION = "0.1";
	
	public static $page = NULL;
	
	/**
	 * Return the current page nav name
	 *
	 * @return  string
	 */
	public static function page_name()
	{
		// Make sure $page is set and loaded
		if (!is_object(self::$page) || !self::$page->loaded())
		{
			return "No page loaded.";
		}

		return self::$page->name;
	}

	/**
	 * Return the current page url
	 *
	 * @return  string
	 */
	public static function page_url()
	{
		// Make sure $page is set and loaded
		if (!is_object(self::$page) || !self::$page->loaded())
		{
			return "No page loaded.";
		}

		return self::$page->url;
	}
	
	public function __construct()
	{
		echo 'HOOOOLA A TOSDO';
	}
	
	
	public function pagination($model = NULL)
	{
		if ($model !== NULL AND $this->pagination)
		{
			// Get total entry items
			$count = $model->count();
		
			// Set pagination
			$pagination = Pagination::factory(array('total_items' => ($count) ? $count : Kohana::config('pagination')->default['total_items']));
			
			// Seting offset and limit
			$model->limit($pagination->items_per_page)->offset($pagination->offset);
			
			// Render pagination
			Leki::data('pagination', $pagination->render());
		}
	}
	
} // End Leki_Core