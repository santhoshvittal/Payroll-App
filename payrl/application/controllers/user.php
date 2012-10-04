<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	* This User Controller is mainly used to login the payroll system.
	* And After login landing page will be displayed to that User.
	* Several Processes(links) are held this user controller.
*/

class User extends CI_Controller
{
	// By default, this index page is displaying.
	
	public function index()
	{
		if(!$this->session->userdata('logged_in')){
			$this->layout->view('user/login_page');
		}
		else{
			redirect('user/data_fetch');
		}
	}

	// Login with valid credential held here.
	public function login()
	{	
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red;margin-left:12px;font-size:13px;">', '</div>');
		$this->form_validation->set_rules('username','Username','required|trim|xss_clean');
		$this->form_validation->set_rules('password','Password','required|trim|xss_clean');

		if($this->form_validation->run() == FALSE){
			$this->layout->view('user/login_page');
		}
		else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$id = $this->user_model->check_login($username ,$password);
			if(!$id){				
				$this->session->set_flashdata('login_error',TRUE);
				redirect('user/login');
			}
			else{
				$this->load->library('session');
				$this->session->set_userdata(array('logged_in'=>'qwerty'));				
				redirect('user/valid_login'); 							
			}				
		}
	}

	// Validation of the login page.

	public function valid_login()
	{
		if($this->session->userdata('logged_in')){	
			redirect('user/data_fetch');
		}
		else{
			redirect('user/index');
		}
	}

	// Displaying the neccessary information about Employee or Employer.

	public function data_fetch()
	{	
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else{  
			$data['query'] = $this->user_model->retrieve();
			$this->layout->view('user/display_view',$data);	
		}
	}
	
	public function update()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else{	
			redirect('user/data_fetch');
		}
	}

	public function search_employee()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else{	 
			$data['query'] = $this->user_model->retrieve();
			$this->layout->view('user/search_emp_details');	
		}
	}

	public function create_employee()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else{
			$this->load->view('create_employee');
		}
	}

	public function insert_user()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else{
			$data['query'] = $this->user_model->retrieve();
			$this->layout->view('form_success');
		}
	}

	// Logout of this application.

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('user/login');
	}

}
