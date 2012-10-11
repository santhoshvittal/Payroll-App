<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sample_con extends CI_Controller
{
	// By default, this index page is displaying.
	
	public function index()
	{
		$this->layout->view('sample');
	}

	public function te()
	{
		$this->layout->view('test');		
	}

}