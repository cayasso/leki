<?php defined('SYSPATH') or die('No direct script access.');

class Leki_Formit_Field {
    
	const ORDER_ERROR = 'error';
    const ORDER_FIELD = 'field';
    const ORDER_LABEL = 'label';
        
    protected $_settings = array
    (
    	'name' 		=> NULL,
       	'label' 	=> NULL,
    	'value' 	=> NULL, 	
    	'attributes'=> array(),   
    	'html'		=> array(),
    	'order' 	=> array
    	(
    		Formit_Field::ORDER_LABEL,
	    	Formit_Field::ORDER_FIELD,
	    	Formit_Field::ORDER_ERROR,
    	)
    );
    
	protected $_model;
	
	protected $_fields = array();
	
	protected $_post = array();
	
	protected $_errors = array();
	
	protected $_data = array();
	
	protected $_form_fields = array();
	
	protected $_form_options = array();

	protected $_posted = FALSE;
	
	protected $_fields_order = array
	(   
	    Formit::ORDER_LABEL,
	    Formit::ORDER_FIELD,
	    Formit::ORDER_ERROR,
	);
		
	public static function factory()
	{
		return new Formit_Field();
	}

	public function __construct($model = NULL, $options = array())
	{		

	}



	public function field($field, $options = array())
	{
		$this->_form_fields[$field] = $options;

		return $this;
	}	

	
	

	
// Render fields as html
	public function __toString()
	{
		return $this->render();
	}
	
	public function add_field($field_name, $options = array())
	{
		$field = $this->_model->meta()->fields($field_name);		
					
		if ($field instanceof Jelly_Field)
		{				
			if (is_array($options))
			{	
				$file = Arr::get($options, 'file', array());

				$attributes = Arr::get($options, 'attributes', array());
				
				$order = Arr::get($options, 'order', $this->_fields_order);
				
				$label = Arr::get($options, 'label', $field->label);
			}		
			
			$this->order();
			
			$this->_form_output[] = $this->view('jelly/field', array( 'field_object' => implode(PHP_EOL, $frm)));
		}
		else if ($field_name)
		{						
			$this->_form_output[] = $options;
		}		
	}
	
	public function order($field)
	{
		for ($i=0; $i < count($order); $i++)
      	{	
            switch ($order[$i])
          	{
                case self::ORDER_LABEL:
                 	$this->_form_fields_output[] = $this->view('jelly/label', array
					(
						'text' => ucfirst($label),
						'for' => $field_name, 
						'attributes' => $attributes
					));
					break;
                	
                case self::ORDER_ERROR:
                	$this->_form_fields_output[] = $this->view('jelly/error', array
					(
						'text' => Arr::get($this->_errors, $field_name),					 
						'attributes' => $attributes
					));
					break;
                	
             	case self::ORDER_FIELD:
                	$this->_form_fields_output[] = $field->input('jelly/field', $this->attributes($attributes));
                	break;
          	}
		}	
	}
	
	public function render()
	{
		$file = NULL;	
		
		$data = array();
		
		$output = array();
		
		$input_data = array();
		
		$order = $this->_fields_order;
		
		$form_fields = $this->_form_fields;
		
		$form_options = $this->_form_options;
				
		$meta = $this->_model->meta();
				        
        $output[] = View::factory('jelly/open', array
        (            
            'action' => Arr::get($form_options, 'action', Request::instance()->uri),
            'attributes' => Arr::get($form_options, 'attributes', array()),
        ));
        
		if (is_array($form_fields) AND ! empty($form_fields))
		{
			if (Arr::is_assoc($form_fields))
			{				
				foreach ($form_fields as $field_name => $options)
				{							
					$frm = array();

					$field = $meta->fields($field_name);
					
					if ($field instanceof Jelly_Field)
					{				
						if (is_array($options))
						{	
							$file = Arr::get($options, 'file', array());
	
							$attributes = Arr::get($options, 'attributes', array());
							
							$order = Arr::get($options, 'order', $this->_fields_order);
							
							$label = Arr::get($options, 'label', $field->label);
						}					
						
						for ($i=0; $i < count($order); $i++)
		                {	
		                	switch ($order[$i])
		                	{
			                	case self::ORDER_LABEL:
			                	 	$frm[] = $this->view('jelly/label', array
									(
										'text' => ucfirst($label),
										'for' => $field_name, 
										'attributes' => $attributes
									));
									break;
			                		
			                	case self::ORDER_ERROR:
			                		$frm[] = $this->view('jelly/error', array
									(
										'text' => Arr::get($this->_errors, $field_name),					 
										'attributes' => $attributes
									));
									break;
			                		
			                	case self::ORDER_FIELD:
			                		$frm[] = $field->input('jelly/field', $this->attributes($attributes));
			                		break;
		                	}
						}
					}
					else if ($field_name)
					{						
						$output[] = $options;
					}
					
					$output[] = $this->view('jelly/field', array( 'field_object' => implode(PHP_EOL, $frm)));
					
					$file = NULL;
				}				
			}
			else
			{
				for ($i=0; $i < count($form_fields); $i++)
                {                	
					$output[] = $this->_model->input($form_fields[$i]);
				}
			}
		}

		$output[] = $this->view('jelly/close');
		
		return implode(PHP_EOL, $output);
	}
    

    		
	public function errors()
	{
		return $this->_errors;
	}
	
	public function attributes($attributes)
	{
		return array('attributes' => $attributes);
	}
	
	public function view($path = 'jelly', $data = array())
	{
		return View::factory($path, $data);
	}

	
	
} // End Serivice Validate Controller