<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Backend {

	public function __construct()
	{
		parent::__construct();

		//
		$this->load->helper('number');
		$this->load->model('resources_model');

		//
		$this->data['page_home'] = lang('lang_dashboard');
	}


	public function index()
	{
		//
		$this->data['disk_total_space'] = byte_format($this->resources_model->get_disk_total_space(), 3);
		$this->data['disk_free_space']  = byte_format($this->resources_model->get_disk_free_space(), 3);
		$this->data['disk_use_space']   = byte_format($this->resources_model->get_disk_use_space(), 3);
		$this->data['disk_use_percent'] = $this->resources_model->get_disk_use_percent();
		//
		$this->data['memory_usage']         = byte_format($this->resources_model->memory_usage(), 3);
		$this->data['memory_peak_usage']    = byte_format($this->resources_model->memory_peak_usage(), 3);
		$this->data['memory_usage_percent'] = $this->resources_model->memory_usage_percent();

		// Title
		$this->data['meta_title'] = $this->data['page_home'];

		// Breadcrumbs
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home'] => 'backend'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_home']);
		$this->data['content'] = 'dashboard';

		//
		$this->render();
	}
}
