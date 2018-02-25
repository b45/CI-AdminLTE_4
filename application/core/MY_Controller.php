<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		require_once(APPPATH . 'third_party/app/config/app_version.php');

		//
		$this->load->add_package_path(APPPATH . 'third_party/app/');
		$this->load->config('app_config');

		//
		$this->load->add_package_path(APPPATH . 'third_party/admin_lte/');
		$this->load->config('lte_config');

		//
		$this->load->database();

		//
		if (ini_get('date.timezone') === '')
		{
			date_default_timezone_set($this->config->item('timezone'));
		}

		//
		$this->output->set_header('Cache-Control: public, max-age=0');
		$this->output->set_header('Content-Type: text/html; charset=' . $this->config->item('charset'));
		$this->output->set_header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 604800) . ' GMT');
		$this->output->set_header('Vary: Accept-Encoding');
		$this->output->set_header('X-Content-Type-Options: nosniff');
		$this->output->set_header('X-Frame-Options: DENY');
		$this->output->set_header('X-Powered-By: domProjects');
		$this->output->set_header('X-XSS-Protection: 1; mode=block');
	}
}


class Backend extends MY_Controller {

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
		$this->load->config('lte_elements');
		$this->load->config('lte_sidebar_menu');
		$this->load->library(array('breadcrumbs', 'sidebar_menu'));
		$this->load->helper(array('adminlte'));
		$this->load->model(array('user_model'));

		// Load language file
		$this->lang->load(array('adminlte'));

		// Define data array
		$this->data = array();

		//
		$source = (in_array($_SERVER['HTTP_HOST'], $this->config->item('host_dev'), TRUE)) ? 'internal' : 'external';

		$this->data['dns_prefetch']    = insert_link_tag($this->config->item('array_dns_prefetch'), $source, 'dns-prefetch');
		$this->data['stylesheet']      = insert_link_tag($this->config->item('array_stylesheet'), $source, 'stylesheet');
		$this->data['javascript_body'] = insert_javascript($this->config->item('array_javascript_body'), $source);

		// Get user login infos
		$user_id = $this->ion_auth->user()->row()->id;
		$this->data['user_login'] = $this->user_model->get_infos($user_id);

		//
		$this->data['charset']  = $this->config->item('charset');
		$this->data['title_sm'] = $this->config->item('title_sm');
		$this->data['title_lg'] = $this->config->item('title_lg');
		$this->data['assets']   = base_url($this->config->item('assets_backend'));
		$this->data['theme']    = $this->config->item('theme_backend');
		$this->data['picture_users'] = base_url($this->config->item('picture_users'));

		//
		$this->data['sidebar_menu'] = $this->sidebar_menu->generate($this->config->item('array_sidebar_menu'));
	}


	public function render()
	{
		//
		if ( ! isset($this->data['meta_title']) OR empty($this->data['meta_title']))
		{
			$this->data['meta_title'] = $this->config->item('title');
		}
		else
		{
			$this->data['meta_title'] = $this->config->item('title') . ' &bull; ' . $this->data['meta_title'];
		}

		//
		if (isset($this->data['array_breadcrumbs']) OR ! empty($this->data['array_breadcrumbs']))
		{
			$this->breadcrumbs->set_elements($this->data['array_breadcrumbs']);
			$this->data['content_header_breadcrumbs'] = $this->breadcrumbs->generate();
		}
		else
		{
			$this->data['content_header_breadcrumbs'] = NULL;
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
		$this->data['tpl_footer_scripts'] = $this->parser->parse('backend/_template/footer_scripts', $this->data, TRUE);
		//
		$this->data['tpl_control_sidebar'] = $this->parser->parse('backend/_template/control_sidebar', $this->data, TRUE);

		// Build page
		$this->data['data'] = &$this->data;
		$this->parser->parse('backend/_template/render', $this->data);
	}
}
