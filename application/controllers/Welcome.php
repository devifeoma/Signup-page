<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		Parent::__construct();
		$this->load->model('userModel');
	}

	public function index()
	{
		
		$this->load->view('treehouse/login');
	}

	public function home(){
		$this->load->view("templates/header");
	}

	public function register()
	{
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');
		$email=$this->input->post('email');
		$password=$this->input->post('password');

		$this->userModel->register($first_name,$last_name,$email,$password);
	}

	public function dashboard()
	{
		echo "Welcome to your Dashboard";
	}
}
