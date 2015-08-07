<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hidden extends CI_Controller{
	public function index()
	{
		$this->load->view('hidden_default');
	}

	public function loginPanel()
	{
		$this->load->view('hidden_default');
	}

	public function adminPanel()
	{
		$this->load->view('dashboard');
	}
}

?>