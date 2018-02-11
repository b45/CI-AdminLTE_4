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


	public function test()
	{
		$this->form_validation->set_rules('valeur1', 'valeur1', 'required');
		$this->form_validation->set_rules('valeur2', 'valeur2', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			echo validation_errors();
		}
		else
		{
			if ($this->input->is_ajax_request())
			{
				$return = array(
					"valeur1" => $this->input->post('valeur1', TRUE),
					"valeur2" => $this->input->post('valeur2', TRUE),
					"csrf"    => $this->security->get_csrf_hash()
				);

				echo json_encode($return);
			}
		}
	}
}
