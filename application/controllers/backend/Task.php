<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends Backend
{
	public function __construct()
	{
		parent::__construct();

		//
		$this->data['page_home']  = lang('lang_dashboard');
		$this->data['page_title'] = lang('lang_task');
	}


	public function index()
	{
		//
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/task'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title']);
		$this->data['content'] = 'task';

		//
		$this->render();
	}


	public function read()
	{
		//
		$subtitle = lang('lang_read');

		//
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/task',
			$subtitle                 => 'backend/task/read'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title'], $subtitle);
		$this->data['content'] = 'task/read';

		//
		$this->render();
	}
}
