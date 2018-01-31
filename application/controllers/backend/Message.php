<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends Backend
{
	public function __construct()
	{
		parent::__construct();

		//
		$this->data['page_home']  = lang('lang_dashboard');
		$this->data['page_title'] = lang('lang_message');
	}


	public function index()
	{
		//
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/message'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title']);
		$this->data['content'] = 'message';

		//
		$this->render();
	}


	public function compose()
	{
		//
		$subtitle = lang('lang_compose');

		//
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/message',
			$subtitle                 => 'backend/message/compose'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title'], $subtitle);
		$this->data['content'] = 'message/compose';

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
			$this->data['page_title'] => 'backend/message',
			$subtitle                 => 'backend/message/read'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title'], $subtitle);
		$this->data['content'] = 'message/read';

		//
		$this->render();
	}
}
