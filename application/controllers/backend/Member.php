<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends Backend {

	public function __construct()
	{
		parent::__construct();

		//
		$this->data['page_home']  = lang('lang_dashboard');
		$this->data['page_title'] = lang('lang_member');
	}


	public function index()
	{
		// Title
		$this->data['meta_title'] = $this->data['page_title'];

		// Breadcrumbs
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/member'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title']);
		$this->data['content'] = 'member';

		//
		$this->render();
	}


	public function profile()
	{
		//
		$subtitle = lang('lang_profile');

		// Breadcrumbs
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/member',
			$subtitle                 => 'backend/member/profile'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title'], $subtitle);
		$this->data['content'] = 'member/profile';

		//
		$this->render();
	}


	public function online()
	{
		//
		$subtitle = 'Online';

		//
		$this->data['array_breadcrumbs'] = array(
			$this->data['page_home']  => 'backend',
			$this->data['page_title'] => 'backend/member',
			$subtitle                 => 'backend/member/online'
		);

		//
		$this->data['content_header_title'] = content_header_title($this->data['page_title'], $subtitle);
		$this->data['content'] = 'member/online';

		//
		$this->render();
	}
}
