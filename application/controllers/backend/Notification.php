<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends Backend {

	public function __construct()
	{
		parent::__construct();

		//
		$this->data['page_home']  = lang('lang_dashboard');
		$this->data['page_title'] = lang('lang_notification');
	}


	public function index()
	{
		// Title
		$this->data['meta_title'] = $this->data['page_title'];

		// Breadcrumbs
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/notification'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title']);
		$this->data['content'] = 'notification';

		//
		$this->render();
	}


	public function read()
	{
		//
		$subtitle = lang('lang_read');

		// Breadcrumbs
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/notification',
			$subtitle                 => 'backend/notification/read'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title'], $subtitle);
		$this->data['content'] = 'notification/read';

		//
		$this->render();
	}
}
