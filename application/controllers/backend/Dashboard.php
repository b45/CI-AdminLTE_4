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
		// Get disk informations
		$this->data['disk_total']       = byte_format($this->resources_model->get_disk_total(), 3);
		$this->data['disk_use']         = byte_format($this->resources_model->get_disk_use(), 3);
		$this->data['disk_free']        = byte_format($this->resources_model->get_disk_free(), 3);
		$this->data['disk_use_percent'] = $this->resources_model->get_disk_use_percent();

		// Get memory informations
		$this->data['memory_total']       = byte_format($this->resources_model->get_memory_total(), 3);
		$this->data['memory_use']         = byte_format($this->resources_model->get_memory_use(), 3);
		$this->data['memory_free']        = byte_format($this->resources_model->get_memory_free(), 3);
		$this->data['memory_use_percent'] = $this->resources_model->get_memory_use_percent();

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
