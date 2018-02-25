<?php
/**
 * @package   CodeIgniter
 * @author    Emmanuel CAMPAIT
 * @copyright Copyright (c) 2013 - 2018, domProjects (https://domprojects.com)
 * @license   http://opensource.org/licenses/MIT	MIT License
 * @link      https://domprojects.com
 * @since     Version 1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Versioning Generating Class
 *
 *
 * @package    CodeIgniter
 * @subpackage Libraries
 * @category   Versioning
 * @author     Emmanuel CAMPAIT
 * @link       https://domprojects.com
 */
class Versioning
{
	private $CI;

	/**
	 * Versioning layout template
	 *
	 * @var array
	 */
	public $template = NULL;

	/**
	 * Unknow setting
	 *
	 * @var string
	 */
	public $unknow = 'lang_unknow';

	/**
	 * Result source file
	 *
	 * @var array
	 */
	public $result = array();

		

	/**
	 * Set the template from the versioning config file if it exists
	 *
	 * @param	array	$config	(default: array())
	 * @return	void
	 */
	public function __construct($config = array())
	{	
		// initialize config
		foreach ($config as $key => $val)
		{
			$this->template[$key] = $val;
		}

		//
		$this->CI =& get_instance();

		log_message('info', 'Versioning Class Initialized');
	}

	// --------------------------------------------------------------------

	/**
	 * Set the template
	 *
	 * @param	array	$template
	 * @return	bool
	 */
	public function set_template($template)
	{
		if ( ! is_array($template))
		{
			return FALSE;
		}

		$this->template = $template;
		return TRUE;
	}

	// --------------------------------------------------------------------

	public function get_apache()
	{
		if (function_exists('apache_get_version'))
		{
			if (preg_match('/Apache\/(?P<version>[1-9][0-9]*\.[0-9][^\s]*)/i', apache_get_version(), $result))
			{
				$out = $result['version'];
			}
			else
			{
				$out = lang($this->unknow);
			}
		}
		else
		{
			$out = lang($this->unknow);
		}

		return $out;
	}

	// --------------------------------------------------------------------

	public function get_php()
	{
		if (function_exists('phpversion'))
		{
			$out = phpversion();
		}
		else
		{
			$out = lang($this->unknow);
		}

		return $out;
	}

	// --------------------------------------------------------------------

	/**
	 *
	 */
	public function get_zend()
	{
		if (function_exists('zend_version'))
		{
			$out = zend_version();
		}
		else
		{
			$out = lang($this->unknow);
		}

		return $out;
	}

	// --------------------------------------------------------------------

	/**
	 *
	 */
	public function get_db()
	{
		return $this->CI->db->version();
	}

	// --------------------------------------------------------------------

	/**
	 *
	 */
	public function get_source_version()
	{
		if (($handle = @fopen('https://raw.githubusercontent.com/domProjects/CI-AdminLTE_4/master/VERSION.md', 'r')) !== FALSE)
		{
			ini_set('auto_detect_line_endings', TRUE);

			while (($data = fgetcsv($handle, 500, '=')) !== FALSE)
			{
				$result[$data[0]] = $data[1];
			}

			ini_set('auto_detect_line_endings', FALSE);

			return $result;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Generate the versioning
	 *
	 * @param	string	$installed
	 * @param	string	$available
	 * @return	string
	 */
	public function compare($installed, $available)
	{
		// Compile and validate the template date
		$this->_compile_template();

		if (version_compare($installed, $available, '='))
		{
			$out = $this->template['version_equal'];
		}
		elseif (version_compare($installed, $available, '<'))
		{
			$out = $this->template['version_lower'];
		}
		elseif (version_compare($installed, $available, '>'))
		{
			$out = $this->template['version_upper'];
		}
		else
		{
			$out = $this->template['version_unknow'];
		}

		return $out;
	}

	// --------------------------------------------------------------------

	/**
	 * Compile Template
	 *
	 * @return	void
	 */
	protected function _compile_template()
	{
		if ($this->template === NULL)
		{
			$this->template = $this->_default_template();
			return;
		}

		$this->temp = $this->_default_template();

		foreach (array('version_equal', 'version_lower', 'version_upper', 'version_unknow') as $val)
		{
			if ( ! isset($this->template[$val]))
			{
				$this->template[$val] = $this->temp[$val];
			}
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Default Template
	 *
	 * @return	array
	 */
	protected function _default_template()
	{
		return array(
			'version_equal'  => 'text-bold text-green',
			'version_lower'  => 'text-bold text-red',
			'version_upper'  => 'text-bold text-yellow',
			'version_unknow' => 'text-muted'
		);
	}
}
