<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		//
		$this->load->config('ci_config');
		$this->load->add_package_path(APPPATH . 'third_party/ion_auth/');
		$this->load->library(array('ion_auth', 'parser'));
		$this->load->helper(array('language', 'url'));
	}
}


class Backend extends MY_Controller
{
	// Parameters for view components
	protected $data = array();

	public function __construct()
	{
		parent::__construct();

		//
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }

		// Load ressource
		$this->load->config('ci_sidebar_menu');
		$this->load->library(array('breadcrumbs', 'sidebar_menu'));
		$this->load->helper(array('adminlte'));

		// Load language file
		$this->lang->load(array('adminlte'));

		// Define data array
		$this->data = array();

		//
		$user = $this->ion_auth->user($this->ion_auth->user()->row()->id)->row();

		$this->data['user_id']         = $user->id;
		$this->data['user_email']      = $user->email;
		$this->data['user_created_on'] = $user->created_on;
		$this->data['user_lastlogin']  = ! empty($user->last_login) ? $user->last_login : NULL;
		$this->data['user_username']   = ! empty($user->username) ? $user->username : NULL;
		$this->data['user_firstname']  = ! empty($user->first_name) ? $user->first_name : NULL;
		$this->data['user_lastname']   = ! empty($user->last_name) ? $user->last_name : NULL;
		$this->data['user_fullname']   = $this->data['user_firstname'] . ' ' . $this->data['user_lastname'];
		$this->data['user_company']    = ! empty($user->company) ? $user->company : NULL;
		$this->data['user_phone']      = ! empty($user->phone) ? $user->phone : NULL;



		//
		$this->data['title']    = $this->config->item('title');
		$this->data['title_sm'] = $this->config->item('title_sm');
		$this->data['title_lg'] = $this->config->item('title_lg');
		$this->data['charset']  = $this->config->item('charset');
		$this->data['assets']   = base_url($this->config->item('assets_backend'));
		$this->data['theme']    = $this->config->item('theme_backend');
		$this->data['picture_users'] = base_url($this->config->item('picture_users'));

		//
		$this->data['content_header_breadcrumbs'] = '';

		//
		$this->data['sidebar_menu'] = $this->sidebar_menu->generate($this->config->item('array_sidebar_menu'));
	}


	public function render()
	{
		//
		if ( ! isset($this->data['meta_title']) OR empty($this->data['meta_title']))
		{
			$this->data['meta_title'] = $this->data['title'];
		}
		else
		{
			$this->data['meta_title'] = $this->data['title'] . ' &bull; ' . $this->data['meta_title'];
		}

		//
		if (isset($this->data['array_breadcrumbs']) OR ! empty($this->data['array_breadcrumbs']))
		{
			$this->breadcrumbs->set_elements($this->data['array_breadcrumbs']);
			$this->data['content_header_breadcrumbs'] = $this->breadcrumbs->generate();
		}

		//
		$this->data['tpl_header'] = $this->parser->parse('backend/_template/header', $this->data, TRUE);
		//
		$this->data['tpl_sidebar'] = $this->parser->parse('backend/_template/sidebar', $this->data, TRUE);
		//
		$this->data['tpl_content'] = $this->parser->parse('backend/' . $this->data['content'], $this->data, TRUE);
		//
		$this->data['tpl_footer'] = $this->parser->parse('backend/_template/footer', $this->data, TRUE);
		//
		$this->data['tpl_control_sidebar'] = $this->parser->parse('backend/_template/control_sidebar', $this->data, TRUE);

		// Build page
		$this->data['data'] = &$this->data;
		$this->parser->parse('backend/_template/render', $this->data);
	}
}
