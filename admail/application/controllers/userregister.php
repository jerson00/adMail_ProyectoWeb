<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserRegister extends CI_Controller {

	public function index()
	{
		$this->load->view('user/register');
	}
}