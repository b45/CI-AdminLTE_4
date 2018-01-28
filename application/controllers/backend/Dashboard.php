<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Backend
{
	public function __construct()
	{
		parent::__construct();

		//
		$this->data['page_home']  = lang('lang_dashboard');
	}


	public function index()
	{
		//
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
