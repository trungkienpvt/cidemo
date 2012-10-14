<?php

/**
 * This originally started as an overhaul of codeigniter-base-model
 * written by Jamie Rumbelow. It has grown into much much more, and
 * although no original code remains, the ideas are still there. This code
 * is based on code by Jamie Rumbelow, Phil Sturgeon and Dan Horrigan.
 *
 * The Code I started with is at https://bitbucket.org/jamierumbelow/codeigniter-base-model/overview
 *
 * @author William Manley <william@kindari.net>
 * 
 */
class MY_Model extends CI_Model
{
	/**
	 *
	 *Static properties
	 *
	 */
	
	public $table_name = null;
	public $primary_key = 'id';
	protected $instances = array();
	protected $rows = array();
	protected $query_prepped = FALSE;
	protected $CI = null;
	protected $fields = array();
	protected $default_rules = array();
	protected $default_type = 'input';
	protected $rules = array();
	protected $types = array();
	protected $ignored = array(); // Dont output these fields in a form
	protected $labels = array(); // $field => $label;
	private $__data = array();
	private $__changes = array();
	/**
	 *
	 * Static methods
	 *
	 */
	
	public function init()
	{
		$this->initialized = TRUE;
		$this->CI = get_instance();
		$this->CI->load->database();
		$this->CI->load->helper('inflector');
	}
	
	public function debug()
	{
		$arr = get_class_vars( get_called_class () );
		unset ( $arr[ 'CI' ]);
		var_dump($arr);
	}
	
	
	/**
	 * Build Relationship information
	 *
	 * @todo actually make this
	 */
	public function describe_relations()
	{
	}
	
	/**
	 *Perform insert
	 *
	 *@param array $data Array of key => value pairs to insert.
	 *@return int Insert Id
	 *@author William Manley
	 */
	public function insert($data)
	{
		$this->CI->db->insert( $this->table_name, $this->prefix_array($data));
		return $this->CI->db->insert_id();
	}
	
	/**
	 * Perform many inserts
	 *
	 * @param array $data Array of rows to insert.
	 * @return array Array of insert ids
	 * @author William Manley
	 */
	public function insert_many($data)
	{
		$ids = array();
		foreach($data as $row)
		{
			$ids[] = self::insert($row);
		}
		return $ids;
	}
	
	/**
	 * Update table rows with data, based on optional constraints
	 *
	 * @param array $data Associative array of data to set
	 * @param mixed $constraints Update where $constraints. Optional.
	 * @author William Manley
	 */
	public function update( $data, $constraints = null)
	{
		if ($constraints)
		{
			self::where($constraints);
		}
		$this->CI->db->set( self::prefix_array($data));
		$this->CI->db->update( $this->table_name );
	}
	
	/**
	 * Build instances of all table results
	 * Results can be limited by calling other functions
	 * (where, where_in, etc)
	 *
	 * @return array Array of Model instances
	 * @author William Manley
	 */
	public function all( $constraints = null )
	{
		if ( $constraints )
		{
			self::where($constraints);
		}
		
		$query = $this->CI->db->get($this->table_name);print_r($query);exit;
		$return = array();
		foreach($query->result_array() as $row)
		{
			$primary = $row[$this->primary_key];
			$this->rows[$primary] = $row;
			$class = get_called_class();
			$instance = array_key_exists($primary, $this->instances) ? $this->instances[$primary] : new $class($primary);
			$return[$primary] = $instance;
		}
		$this->query_prepped = FALSE;
		if ( count($return)==1 )
		{
			return array_shift($return);
		}
		return $return;
	}
	
	/**
	 * Count all rows, or optional just number of results if constraints supplied.
	 *
	 *@param mixed $constraints Constraints to restrict count to
	 *@return int The Count
	 */
	public function count( $constraints = null)
	{
		if ( $constraints )
		{
			self::where($constraints);
		}
		if ($this->query_prepped)
		{
			$this->query_prepped = FALSE;
			return $this->CI->db->count_all_results($this->table_name);
		}
		return $this->CI->db->count_all($this->table_name);
	}
	
	/**
	 * Perform a where or where_in based on logic.
	 *
	 * @param mixed $key Key to constrain to, or array
	 * @param mixed $value Value to constrain $key to
	 * @param bool $or Perform an OR where?
	 * @author William Manley
	 */
	public function where( $key, $value=null, $or=FALSE)
	{
		/**
		 *Both Key and value were specified, either by calling
		 * where( 'foo', 'bar' ) or by internal recursion.
		 *
		 * If value is an array perform where_in
		 * switch between "and where" (default) mode and "or where" by toggling $or
		 */
		if ($value)
		{
			$this->query_prepped = TRUE;
			$key = self::prefix_field($key);
			$func = ($or ? 'or_' : '') . (is_array($value) ? 'where_in' : 'where');
			call_user_func_array(
				array($this->CI->db, $func),
				array($key, $value)
				);
		}
		/**
		 * Value was not specified, but key is an array
		 */
		elseif ( is_array($key) )
		{
			/**
			 *Check if the array is associative or not
			 *
			 * where( array( 'foo' => 'bar' ) )
			 */
			if ( array_keys( $key ) !== range(0, count( $key ) - 1) )
			{
				foreach($key as $k => $v)
				{
					self::where($k, $v, $or);
				}
			}
			/**
			 * Array given, but not associative. Assume key is primary key and do where_in
			 *
			 * where ( array ( 1, 2, 3, 4, ...) )
			 */
			else
			{
				self::where( $this->primary_key, $key, $or);
			}
		}
		/**
		 *No value specified and key is not an array, if key is an integer assume
		 *it is the value of the primary key and get it
		 *
		 * where ( 1 )
		 */
		elseif ( is_numeric($key) )
		{
			self::where( $this->primary_key, $key, $or);
		}
	}
	
	/**
	 * Wrapper for where, setting $or to TRUE by default
	 */
	public function or_where($key, $value=null, $or = TRUE)
	{
		return self::where($key, $value, $or);
	}
	
	
	/**
	 * Return table name prefixed field names
	 *
	 * @param string $field Field name, if not supplied defaults to primary key
	 * @return string Prefixed field name
	 * @internal
	 * @author William Manley
	 */
	public function prefix_field($field=null)
	{
		if ( ! in_array( $field, $this->fields) )
		{
			return $field;
		}
		if ( $field === null )
		{
			$field = $this>primary_key;
		}
		return $this->table_name . ".{$field}";
	}
	
	public function prefix_array( $data )
	{
		$return = array();
		foreach ($data as $key => $value)
		{
			$return[ self::prefix_field($key)] = $value;
		}
		return $return;
	}
	
	/**
	 * Get and Set the field labels.
	 *
	 * @param string $field Field name to use
	 * @param string $label Optional label to use
	 */
	public function label( $field, $label = null)
	{
		if ( $label )
		{
			$this->labels[$field] = $label;
		}
		if ( ! array_key_exists($field, $this->labels ))
		{
			$this->labels[$field] = humanize($field);
		}
		return $this->labels[$field];
	}

	public function field_type( $field, $type= null, $override = TRUE)
	{
		$exists = array_key_exists( $field, $this->types);
		
		if ( $type )
		{
			if ( ! $exists OR ($exists and $override))
			{
				$this->types[$field] = $type;
			}
		}
		elseif ( ! $exists)
		{
			$this->$types[$field] = $this->default_type;
		}
		
		return $this->types[$field];
	}
	
	/**
	 * Called when method does not exist when called in a static context
	 * Wrap calls to the database object if the method exists
	 *
	 * @param string $name Function name called
	 * @param array $arguments List of arguments passed
	 * @return mixed
	 */
		
	public function delete( $constraints = null )
	{
		if ( $constraints )
		{
			self::where( $constraints );
		}
		$this->CI->db->delete( $this->table_name );
	}
	
	/**
	 *
	 *Instance properties
	 *
	 */
	
	
	
	
	/**
	 *
	 * Instance methods
	 *
	 */
	
	
	/**
	 * Instance Constructor.
	 * If Primary key is specified, get data for associated row.
	 * @param int $primary Primary Key
	 * @author William Manley
	 */
	public function __construct( $primary = null )
	{
		self::init();
		if ( is_numeric($primary) )
		{
			$this->instances[$primary] = $this;
			if ( ! array_key_exists($primary, $this->rows ))
			{
				self::all($primary);
			}
			$this->__data = array_merge( $this->__data, $this->rows[$primary]);
		}
		
	}
	
	/**
	 * Magic method get field names
	 * @param string $key Field Name
	 * @return string Value of field name
	 * @author William Manley
	 */
	public function __get($key=null)
	{
		if (array_key_exists($key, $this->__changes))
		{
			return $this->__changes[$key];
		}
		if ( array_key_exists($key, $this->__data))
		{
			return $this->__data[$key];
		}
		if($key==null)
			return $this->__data;
		else
			return "";
	}
	
	/**
	 * Magic Method set for changing field values
	 *
	 * @param string $key Field Name to use
	 * @param string $value Value to set to
	 * @author William Manley
	 */
	public function __set($key, $value)
	{
		if(!empty($this__data))
			if ( $this->__data[$key]==$value)
			{
				return;
			}
		$this->__changes[$key] = $value;
	}
	
	/**
	 * Save values to database.
	 * Perform insert if no primary key is specified
	 * Perform update otherwise
	 * @author William Manley
	 */
	public function save() {
		if ( ! $this->__changes )
		{
			return;
		}
		if ( array_key_exists( $this->primary_key, $this->__data) )
		{
			self::update( $this->__changes, $this->__data[ $this->primary_key ] );
		}
		else
		{
			$this->__data[ $this->primary_key ] = self::insert( $this->__changes );
		}
		$this->__data = array_merge( $this->__data, $this->__changes);
		$this->revert();
	}

	/**
	 * Build data from array. Used automaticly by validate()
	 *
	 * @param array $arr
	 */
	public function from_array( $arr )
	{
		if (array_key_exists( $this->primary_key, $arr))
		{
			$this->__construct( $arr[ $this->primary_key ] );
		}
		foreach ( $this->fields as $field )
		{
			if (  array_key_exists($field, $arr) )
			{
				$this->$field = $arr[$field];
			}
		}
		return $this;
	}
}

