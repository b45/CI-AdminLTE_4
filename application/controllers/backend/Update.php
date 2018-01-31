<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends Backend
{
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
