<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {


	function __construct() {
	    parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		//$this->load->view('welcome_message');
	}
	public function login()
	{
		$this->load->view('login');
	}
}
