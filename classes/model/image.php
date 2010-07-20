<?php defined('SYSPATH') or die('No direct script access.');
 /**
 * Image ORM model
 *
 * @package    	Image model
 * @author     	Jonathan Brumley
 * @copyright  	(c) 2009 Lekinox
 * @created  	2009 Apr 30
 */
class Model_Image extends Jelly_Model {
	
	protected $_has_one = array
	(
	 	'magazine', 
		'sponsor'
	);
}

/* End of file image.php */
/* Location: ./nox/modules/nox/models/image.php */