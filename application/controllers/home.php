<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->database();
		$this->load->helper('url');
		$this->load->view('front-end/header');
		$this->load->view('front-end/pages/home');
		$this->load->view('front-end/footer');
	}
	
	public function about()
	{
		$this->load->view('front-end/header');
		$this->load->view('front-end/pages/about');
		$this->load->view('front-end/footer');
	}
}
