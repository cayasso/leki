<?php defined('SYSPATH') or die('No direct script access.');

return array
(
	// Site default values
	'site' => array
	(
		//  Site name
		'name' => 'ACME',
	
		// Company name that runs the site
		'company' => 'ACME',	
	
		// Site domain
		'domain' => 'localhost/leki/',

		// Logo alt tag text
		'logo_alt' => 'Sitio Oficial Infoganadero Centroamericano',
	
		// Site copyright statement
		'copyright' => '© Copyright 2010 Leki |  Todos los Derechos Reservados. <a href="http://validator.w3.org/check/referer" title="Validates this page">XHTML</a>,<a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.kirev.com/css/kirev.css" title="Valid CSS!">CSS</a>. Iconos por <a href="http://www.famfamfam.com/lab/icons/silk/">Fam Fam Silk</a>. Producido por <a href="http://www.lekinox.com" title="Lekinox Studios">Lekinox Studios</a>',
	
		// Default meta data information
		'meta' => array
		(
			'keywords'		=> 'Porcino, lechera, tecnología, ganaderías, ganadero, leche, carne, equino, revista electrónica, centroamericano, centroamerica, caballos, agroecoturismo, mascosa, territorio avícola',
			'description' 	=> 'Portal web informativo y revista electrónica de centroamerica con novedades del mundo de la carne, leche, equinos, bovinos mediante eventos, noticias, artículos y mucho más.',
		),		
	
		// Default site contact information
		'contact' => array 
		(
			'email' => 'leki@localhost',
			'phone' => '(506) 8888-8888', 
			'fax' => '(506) 8888-8888',			
		),
		
		// Default site location
		'location' => array
		(
			'country' => 'Costa Rica', 
			'city' => 'San Jose',
			'zip_code' => '00000',
			'address' => 'None',
		),
		
		// Social media accounts
		'social' => array
		(
			'facebook' => '',
			'twitter' => '',
		),
		
		'status' => TRUE,
	)
);