<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan extends Backend {

	public function __construct()
	{
		parent::__construct();

		//
		$this->load->helper('number');
		$this->load->model('resources_model');

		//
		$this->data['page_home'] = lang('lang_pemasukan');
	}


	public function index()
	{

		// Title
		$this->data['meta_title'] = $this->data['page_home'];

		// Breadcrumbs
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home'] => 'backend'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_home']);
		$this->data['content'] = 'pemasukan';

		//
		$this->render();
	}
}
