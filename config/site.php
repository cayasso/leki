<?php defined('SYSPATH') or die('No direct script access.');

// Set the base url
$base_url = URL::base();

return array
(
 	'theme'	=> 'default',
	
	'cnf' 	=> array
	(
	 	'contact_email' => 'cayasso@gmail.com',
		'keywords'		=> 'Porcino, lechera, tecnología, ganaderías, ganadero, leche, carne, equino, revista electrónica, centroamericano, centroamerica, caballos, agroecoturismo, mascosa, territorio avícola',
		'copyright'		=> '© Copyright 2005-2009 www.infoganaderocentroamericano.com |  Todos los Derechos Reservados. <a href="http://validator.w3.org/check/referer" title="Validates this page">XHTML</a>,<a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.kirev.com/css/kirev.css" title="Valid CSS!">CSS</a>. Iconos por <a href="http://www.famfamfam.com/lab/icons/silk/">Fam Fam Silk</a>. Producido por <a href="http://www.lekinox.com" title="Lekinox Studios">Lekinox Studios</a>',
		'name'			=> 'Infoganadero Centroamericano',
		'domain'		=> 'www.infoganaderocentroamericano.com',
		'logo_alt'		=> 'Sitio Oficial Infoganadero Centroamericano',
		'description' 	=> 'Portal web informativo y revista electrónica de centroamerica con novedades del mundo de la carne, leche, equinos, bovinos mediante eventos, noticias, artículos y mucho más.'
	 ),
	 
	 'urls' =>	array
	 (
		//'lang' 			=> Data::$lang,
		//'active_page' 	=> Data::$page_name,		
		//'site_url' 		=> $base_url.Data::$lang.'/',				
		'base_url' 		=> $base_url,
		'media_url' 	=> $base_url.'media/',
		'current_url' 	=> $base_url.Request::instance()->uri,		
	 ),
	 
	 'html_tags' => array('<p>', '</p>', '<b>', '<i>', '<u>', '<strong>', '<em>', '</strong>')
);