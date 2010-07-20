<?php defined('SYSPATH') or die('No direct script access.');
 /**
 * File ORM model
 *
 * @package    	File model
 * @author     	Jonathan Brumley
 * @copyright  	(c) 2009 Lekinox
 * @created  	2009 Apr 30
 */
class Model_File extends Jelly_Model {
	
	protected $_has_one = array
	(
	 	'magazine' => array()
	);
}

/* End of file file.php */
/* Location: ./nox/modules/nox/models/file.php */