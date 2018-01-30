<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Version extends Backend
{
	public function __construct()
	{
		parent::__construct();

		//
		$this->data['page_home']  = lang('lang_dashboard');
		$this->data['page_title'] = lang('lang_version');
	}


	public function index()
	{
		//
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/version'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title']);
		$this->data['content'] = 'version';

		//
		$this->render();
	}
}
