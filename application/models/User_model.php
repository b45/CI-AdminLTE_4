<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	private $id;
	public $data;

	public function get_infos($id)
	{
		$user = $this->ion_auth->user($id)->row();

		$data['id']         = $user->id;
		$data['email']      = $user->email;
		$data['created_on'] = $user->created_on;
		$data['lastlogin']  = ! empty($user->last_login) ? $user->last_login : NULL;
		$data['username']   = ! empty($user->username) ? $user->username : NULL;
		$data['firstname']  = ! empty($user->first_name) ? $user->first_name : NULL;
		$data['lastname']   = ! empty($user->last_name) ? $user->last_name : NULL;
		$data['fullname']   = $data['firstname'] . ' ' . $data['lastname'];
		$data['company']    = ! empty($user->company) ? $user->company : NULL;
		$data['phone']      = ! empty($user->phone) ? $user->phone : NULL;

		return $data;
	}
}
