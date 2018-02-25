<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends Backend {

	public function __construct()
	{
		parent::__construct();

		//
		$this->data['page_home']  = lang('lang_dashboard');
		$this->data['page_title'] = lang('lang_update');
	}


	public function index()
	{
		//
		$this->load->library('table');
		$this->load->library('versioning');

		//
		$this->data['apache_version'] = $this->versioning->get_apache();
		$this->data['php_version']    = $this->versioning->get_php();
		$this->data['zend_version']   = $this->versioning->get_zend();
		$this->data['db_version']     = $this->versioning->get_db();

		$this->data['db_platform']    = $this->db->platform();

		// Title
		$this->data['meta_title'] = $this->data['page_title'];

		// Breadcrumbs
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/update'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title']);
		$this->data['content'] = 'update';

		//
		$this->render();
	}
}
