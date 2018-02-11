<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentation extends Backend {

	public function __construct()
	{
		parent::__construct();

		//
		$this->data['page_home']  = lang('lang_dashboard');
		$this->data['page_title'] = lang('lang_documentation');
	}


	public function index()
	{
		// Title
		$this->data['meta_title'] = $this->data['page_title'];

		// Breadcrumbs
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/documentation'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title']);
		$this->data['content'] = 'documentation';

		//
		$this->render();
	}
}
