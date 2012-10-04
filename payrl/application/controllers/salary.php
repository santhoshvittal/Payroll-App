<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Salary extends CI_Controller 
{
	// By default, this index page is displaying.
	
   public function index()
	{
		
	}

	public function salary_manage()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in'))
		{
			redirect('user/index');
		}
		else
		{ 
			$data['query'] = $this->salary_model->retrieve();
			$this->layout->view('salary/salary_details',$data);
		}
	}

	public function data_fetch()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in'))
		{
			redirect('user/index');
		}
		else
		{
		 	redirect('salary/salary_manage');
		}
	}

	public function upload_view()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in'))
		{
			redirect('user/index');
		}
		else
		{  
			$data['query'] = $this->salary_model->retrieve();
			$this->layout->view('salary/upload_file');
		}

	}

	// Logout the application.

	public function logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('user/login');
	}

}

