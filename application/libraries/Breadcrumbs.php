<?php
/**
 * @package	CodeIgniter
 * @author	Emmanuel CAMPAIT
 * @copyright	Copyright (c) 2013 - 2017, domProjects (https://domprojects.com)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://domprojects.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * HTML Breadcrumbs Generating Class
 *
 * Lets you create breadcrumbs manually.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	HTML Breadcrumbs
 * @author		Emmanuel CAMPAIT
 * @link		https://domprojects.com
 */

class Breadcrumbs
{
	private $breadcrumbs = array();

	/**
	 * Breadcrumbs layout template
	 *
	 * @var array
	 */
	public $template = NULL;


	/**
	 * Set the template from the breadcrumbs config file if it exists
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

		log_message('info', 'Breadcrumbs Class Initialized');
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

	public function set_elements($args = array())
	{
		if ( ! is_array($args))
		{
			return FALSE;
		}
		else
		{
			foreach ($args as $key => $value)
			{
				$href = site_url($value);

				$this->breadcrumbs[$href] = array('page' => $key, 'href' => $href);
			}
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Generate the breadcrumbs
	 *
	 * @param	mixed	$breadcrumbs_data
	 * @return	string
	 */
	public function generate()
	{
		if ($this->breadcrumbs)
		{
			// Compile and validate the template date
			$this->_compile_template();

			// Build the breadcrumbs!

			$out = $this->template['tag_open'];

			foreach ($this->breadcrumbs as $key => $value)
			{
				$keys = array_keys($this->breadcrumbs);

				if (end($keys) == $key)
				{
					$out .= $this->template['crumb_active'] . $value['page'] . $this->template['crumb_close'];
				}
				else
				{
					$out .= $this->template['crumb_open'] . '<a href="' . $value['href'] . '">' . $value['page'] . '</a>' . $this->template['crumb_close'];
				}
			}

			$out .= $this->template['tag_close'];

			// Clear breadcrumbs class properties before generating the breadcrumbs
			$this->clear();

			return $out;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Clears the breadcrumbs arrays.  Useful if multiple tables are being generated
	 *
	 * @return	CI_Breadcrumbs
	 */
	public function clear()
	{
		$this->breadcrumbs = array();
		return $this;
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

		foreach (array('tag_open', 'tag_close', 'crumb_open', 'crumb_close', 'crumb_active') as $val)
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
			'tag_open'     => '<ol class="breadcrumb">',
			'tag_close'    => '</ol>',
			'crumb_open'   => '<li>',
			'crumb_close'  => '</li>',
			'crumb_active' => '<li class="active">'
		);
	}
}
