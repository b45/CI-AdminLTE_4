<?php
/**
 * @package   CodeIgniter
 * @author    Emmanuel CAMPAIT
 * @copyright Copyright (c) 2013 - 2018, domProjects (https://domprojects.com)
 * @license   http://opensource.org/licenses/MIT	MIT License
 * @link      https://domprojects.com
 * @since     Version 1.0.2
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * HTML Sidebar Menu Generating Class
 *
 *
 * @package    CodeIgniter
 * @subpackage Libraries
 * @category   HTML Sidebar Menu
 * @author     Emmanuel CAMPAIT
 * @link       https://domprojects.com
 */
class Sidebar_menu
{
	private $CI;

	/**
	 * Sidebar menu template
	 *
	 * @var array
	 */
	public $template = NULL;

	/**
	 * Newline setting
	 *
	 * @var string
	 */
	public $newline = "\n";

	/**
	 * Set the template from the sidebar menu config file if it exists
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

		log_message('info', 'Sidebar_menu Class Initialized');
	}

	// --------------------------------------------------------------------

	/**
	 * Generate the sidebar menu
	 *
	 * @param	mixed	$sidebar_menu_data
	 * @return	string
	 */
	public function generate($args)
	{
		if ( ! is_array($args))
		{
			return FALSE;
		}
		else
		{
			// Compile and validate the template date
			$this->_compile_template();

			// Build the sidebar menu!

			$out = $this->template['menu_open'] . $this->newline;

			foreach ($args as $header => $header_value)
			{
				$out .= $this->template['menu_header_open'] . lang($header) . $this->template['menu_header_close'] . $this->newline;

				foreach ($header_value as $menu_key => $menu_value)
				{
					$active_menu = ($this->_get_router_class() == $menu_value['router']) ? $this->template['elem_active'] : $this->template['elem_noactive'];

					if ($menu_value['url'] === FALSE && is_array($menu_value['submenu']))
					{
						$out .= '<li class="treeview ' . $active_menu . '">';
						$out .= '<a href="#">' . $menu_value['icon'] . ' <span>' . lang($menu_key) . '</span>';
						$out .= '<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>';
						$out .= '</a>' . $this->newline;
						$out .= '<ul class="treeview-menu">' . $this->newline;

						foreach ($menu_value['submenu'] as $submenu_key => $submenu_value)
						{
							$active_submenu = ($this->_get_router_method() == $submenu_value['router']) ? $this->template['elem_active'] : $this->template['elem_noactive'];

							$out .= '<li class="' . $active_submenu . '">';
							$out .= '<a href="' . site_url($submenu_value['url']) . '">' . $submenu_value['icon'] . ' ' . lang($submenu_key) . '</a>';
							$out .= '</li>' . $this->newline;
						}

						$out .= '</ul>' . $this->newline;
						$out .= '</li>' . $this->newline;
					}
					else
					{
						$out .= '<li class="' . $active_menu . '">';
						$out .= '<a href="' . site_url($menu_value['url']) . '">' . $menu_value['icon'] . ' <span>' . lang($menu_key) . '</span></a>';
						$out .= '</li>' . $this->newline;
					}
				}
			}

			$out .= $this->template['menu_close'] . $this->newline;

			return $out;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Router fetch class
	 *
	 * @return	void
	 */
	protected function _get_router_class()
	{
		return $this->CI->router->fetch_class();
	}

	// --------------------------------------------------------------------

	/**
	 * Router fetch method
	 *
	 * @return	void
	 */
	protected function _get_router_method()
	{
		return $this->CI->router->fetch_method();
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

		foreach (array('menu_open', 'menu_close', 'menu_header_open', 'menu_header_close', 'elem_active', 'elem_noactive') as $val)
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
			'menu_open'         => '<ul class="sidebar-menu" data-widget="tree">',
			'menu_close'        => '</ul>',
			'menu_header_open'  => '<li class="header text-uppercase">',
			'menu_header_close' => '</li>',
			'elem_active'       => 'active',
			'elem_noactive'     => 'no-active'
		);
	}
}
