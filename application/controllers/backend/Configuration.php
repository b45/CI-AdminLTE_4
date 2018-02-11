<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends Backend {

	public function __construct()
	{
		parent::__construct();

		//
		$this->data['page_home']  = lang('lang_dashboard');
		$this->data['page_title'] = lang('lang_configuration');

		//
		$this->load->helper('form');
	}


	public function index()
	{
		// Title
		$this->data['meta_title'] = $this->data['page_title'];

		// Breadcrumbs
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/configuration'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title']);
		$this->data['content'] = 'configuration';

		//
		$this->render();
	}


	public function Interface($section = 'adm')
	{
		if ($section == 'adm')
		{
			$this->data['status_adm'] = 'active';
			$this->data['status_pub'] = 'no-active';
		}
		elseif ($section == 'pub')
		{
			$this->data['status_adm'] = 'no-active';
			$this->data['status_pub'] = 'active';
		}
		else
		{
			redirect('backend');
		}

		//
		$subtitle = lang('lang_interface');

		// Breadcrumbs
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/configuration',
			$subtitle                 => 'backend/configuration/interface'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title'], $subtitle);
		$this->data['content'] = 'configuration/interface';

		//
		$this->render();
	}
}
