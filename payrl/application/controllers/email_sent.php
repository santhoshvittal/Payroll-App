<?php

class Email_sent extends CI_Controller
{
	// By default, this index page is displaying.
	
	public function index()
	{
		$this->layout->view('form_success');
	}

	public function email_value()
	{
		/* Set all email configuration in /config/email.php file */

		$this->email->set_newline("\r\n");  /* this is needed for email sent */
		$this->email->from('raghavendra.ml@myshoreitsolutions.co.in','raghavendra.ml');
		$this->email->to('raghavendra726@gmail.com');
		$this->email->subject('Test for mail send');
		$this->email->message('New Mail will you get soon');
		$result = $this->email->send(); 
		if($result)
		{			
			redirect('email_sent/test');
		}
		else
		{			
			redirect('email_sent/index');
		}
	}

	public function test()
	{
		$this->layout->view('create_employee');
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