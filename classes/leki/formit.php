<?php defined('SYSPATH') or die('No direct script access.');

class Leki_Formit {
    
	const ORDER_ERROR = 'error';
    const ORDER_FIELD = 'field';
    const ORDER_LABEL = 'label';
    
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

		
	public static function factory($model = NULL, $options = array())
	{
		return new Formit($model, $options);
	}

	public function __construct($model = NULL, $options = array())
	{		
		$this->orm($model);
		
		$this->_options($options);
		
		$this->_posted = ( ! empty($_POST));
		
		$this->_load_post();		
		
	}
		
	public function orm($model, $data = NULL)
	{		
		if (is_string($model) === 'string')
		{
			$model = Jelly::factory($model);
		}
							
		if ($model instanceof Jelly_Model)
		{
			// Get array of fields in this model						
			$this->_model = $model;			
			$this->add_model_data($data);
		}
		else
		{
			throw new Leki_Exception('No model was found in the form array');
		}
		
		return $this;
	}
				
	public function fields($fields = array())
	{
		if (is_array($fields) AND Arr::is_assoc($fields))
		{
			foreach ($fields as $field => $options)
			{
				$this->field($field, $options);
			}
		}
		
		return $this;
	}

	public function field($field, $options = array())
	{
		$this->_form_fields[$field] = $options;

		return $this;
	}	
	
	
	public function add_model_data($data = array())
	{
		if (is_array($data))
		{
			$this->_data += $data;
		}
		
		return $this;
	}
	
	public function valid($file = FALSE, $ignore_unique = array())
	{		
		$status = FALSE;

		if (is_array($file) AND ! empty($file))
		{
			if (array_key_exists('file', $file))
			{
				$file = $file['file'];
			}
			
			if (array_key_exists('ignore_unique', $file))
			{
				$ignore_unique = $file['ignore_unique'];
			}
		}		
		
		// Ignore unique fields if listed as ignore
		if (is_array($ignore_unique) AND ! empty($ignore_unique))
		{
			for ($i=0; $i < count($ignore_unique); $i++)
			{
				$this->_model->meta()->fields($ignore_unique[$i])->unique = FALSE;
			}
		}
		
		// Validate only if there are posted data
		if ($this->_posted) 
		{			
			try
			{
				$this->_model->validate($this->_post);
				
				// Set status to true
				$status = TRUE;
				
				// Reset fields
				$this->_model = array();
			} 
			catch ( Validate_Exception $e )
			{
				$this->_errors = $e->array->errors($file);
			}
		}
		
		return $status;
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
				
			$this->_form_output[] = $this->view('jelly/field', array( 'field_object' => implode(PHP_EOL, $frm)));
		}
		else if ($field_name)
		{						
			$this->_form_output[] = $options;
		}		
	}
	
	public function field_order($field)
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
    
/**
     * Add a submit button to the form.
     * This method is chainable.
     *
     * @param   string  the button text
     * @param   array   field-specific options
     * @return  Jelly_Form
     */
    public function submit($value = 'Submit', $options = array())
    {
		$options['type'] = 'submit';
		$options['id'] = 'field-submit';
			
		$data = array
       	(
         	'name'  => 'submit',                
            'value' => $value,
            'attributtes' => $options
        );
            
		$this->_form_fields['submit'] = $this->view('jelly/submit', $data);
        
        return $this;
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
	
	protected function _options($options)
    {
        if( ! empty($options))
        {
    		$this->_form_options = $options;
        }
    }
	
	protected function _load_post()
	{
		if ($this->_posted)
		{
			$post = Arr::xss ($_POST);
			
			if ( ! empty($post))
			{
				$this->_post = $post;
			}					
		}
	}	
	
} // End Serivice Validate Controller