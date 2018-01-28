<?php
/**
 * @package	CodeIgniter
 * @author	Emmanuel CAMPAIT
 * @copyright	Copyright (c) 2013 - 2017, domProjects (https://domprojects.com)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://domprojects.com
 * @since	Version 1.0.2
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * HTML Sidebar Menu Generating Class
 *
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	HTML Tables
 * @author		Emmanuel CAMPAIT
 * @link		https://domprojects.com
 */
class Sidebar_menu
{
	/**
	 * Sidebar menu template
	 *
	 * @var array
	 */
	public $template = NULL;

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

		log_message('info', 'Breadcrumbs Class Initialized');
	}

	// --------------------------------------------------------------------

	/**
	 * Generate the sidebar menu
	 *
	 * @param	mixed	$sidebar_menu_data
	 * @return	string
	 */
	public function generate($args = array())
	{
		if ( ! is_array($args))
		{
			return FALSE;
		}
		else
		{
			// Compile and validate the template date
			$this->_compile_template();

			// Get router class and method
			$router_class = $this->_get_router_class();
			$router_method = $this->_get_router_method();

			// Build the sidebar menu!

			$out = $this->template['menu_open'];

			foreach ($args as $header => $header_value)
			{
				$out .= $this->template['menu_header_open'] . lang($header) . $this->template['menu_header_close'];

				foreach ($header_value as $menu_key => $menu_value)
				{
					$active_menu = ($router_class == $menu_value['router']) ? $this->template['elem_active'] : $this->template['elem_noactive'];

					if ($menu_value['url'] === FALSE && is_array($menu_value['submenu']))
					{
						$out .= '<li class="treeview ' . $active_menu . '">';
						$out .= '<a href="#">' . $menu_value['icon'] . ' <span>' . lang($menu_key) . '</span>';
						$out .= '<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>';
						$out .= '</a>';
						$out .= '<ul class="treeview-menu">';

						foreach ($menu_value['submenu'] as $submenu_key => $submenu_value)
						{
							$active_submenu = ($router_method == $submenu_value['router']) ? $this->template['elem_active'] : $this->template['elem_noactive'];

							$out .= '<li class="' . $active_submenu . '">';
							$out .= '<a href="' . site_url($submenu_value['url']) . '">' . $submenu_value['icon'] . ' ' . lang($submenu_key) . '</a>';
							$out .= '</li>';
						}

						$out .= '</ul>';
						$out .= '</li>';
					}
					else
					{
						$out .= '<li class="' . $active_menu . '">';
						$out .= '<a href="' . site_url($menu_value['url']) . '">' . $menu_value['icon'] . ' <span>' . lang($menu_key) . '</span></a>';
						$out .= '</li>';
					}
				}
			}

			$out .= $this->template['menu_close'];

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
		$CI =& get_instance();

		return $CI->router->fetch_class();
	}

	// --------------------------------------------------------------------

	/**
	 * Router fetch method
	 *
	 * @return	void
	 */
	protected function _get_router_method()
	{
		$CI =& get_instance();

		return $CI->router->fetch_method();
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

		foreach (array('menu_open', 'menu_close', 'menu_header_open', 'menu_header_close') as $val)
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
