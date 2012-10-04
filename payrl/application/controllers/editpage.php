<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editpage extends CI_Controller
{
	// By default, this index page is displaying.
	
	public function index()
	{	
		if(!$this->session->userdata('logged_in'))
		{
			redirect('user/index');
		}
		else
		{
		 $this->layout->view('editpage_view');
		}
	}

	public function cre()
	{
		if(!$this->session->userdata('logged_in'))
		{
			redirect('user/index');
		}
		else
		{
			$this->form_validation->set_rules('emp_code','Employee Code', 'trim|required|xss_clean');
			$this->form_validation->set_rules('name','Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('bankname','Bank Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('designation','Designation', 'trim|required|xss_clean');
			$this->form_validation->set_rules('bankacno','Bank A/c No', 'trim|required|xss_clean');
			$this->form_validation->set_rules('emailid','Email ID', 'trim|required|xss_clean');
			
			if($this->form_validation->run() == FALSE)
			{				
				$this->load->view('include/header');
				
				$this->load->view('include/footer');
			}
			else
			{
				$this->layout->view('new_page');
			}

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

?>