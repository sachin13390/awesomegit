<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Frontend_Controller {
	
	public function index()
	{
		var_dump($this->data);
		
		$this->load->view('welcome_message');
	}
}

