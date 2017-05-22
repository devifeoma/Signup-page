<?php

class home extends CI_CONTROLLER{

	public function __construct(){
		parent::__construct();
	}

	public function about(){
		$this->load->view("templates/header");
	}
}