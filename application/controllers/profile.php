<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->model('Profilemodel', 'profile');
		$userData['full_name'] = $this->profile->get_user_name();
		$this->load->view('profile', $userData);
	}
	
}