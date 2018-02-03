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
		$this->load->config('ci_elements');
		$this->load->config('ci_sidebar_menu');
		$this->load->library(array('breadcrumbs', 'sidebar_menu'));
		$this->load->helper(array('adminlte', 'common'));
		$this->load->model(array('user_model'));

		// Load language file
		$this->lang->load(array('adminlte'));

		// Define data array
		$this->data = array();

		//
		if (in_array($_SERVER['HTTP_HOST'], $this->config->item('host_dev'), TRUE))
		{
			$source = 'internal';
			$dns_prefetch = NULL;
		}
		else
		{
			$source = 'external';
			$dns_prefetch = insert_link_tag($this->config->item('array_dns_prefetch'), $source, 'dns-prefetch');
		}
		$this->data['dns_prefetch'] = $dns_prefetch;
		$this->data['stylesheet'] = insert_link_tag($this->config->item('array_stylesheet'), $source, 'stylesheet');
		$this->data['javascript_body'] = insert_javascript($this->config->item('array_javascript_body'), $source);

		// Get user login infos
		$user_id = $this->ion_auth->user()->row()->id;
		$this->data['user_login'] = $this->user_model->get_infos($user_id);

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
