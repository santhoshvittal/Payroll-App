<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calculator extends CI_Controller
{
	// By default, this index page is displaying.
	
	public function index()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else{
			 $this->layout->view('calculator/calc');
		}
	}

	public function calc()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else
		{
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red;width:225px;font-size:13px;">', '</div>');
			$this->form_validation->set_rules('month' , 'Month','required|trim');
			$this->form_validation->set_rules('payable' , 'Days Payable','required|trim');

			if($this->form_validation->run() == FALSE){		
				$this->layout->view('calculator/calc');
			}
			else
			{
				$data = array('No_of_Days_In_Month'=>$this->input->post('emp_code'),
							  'No_of_Days_Payable'=>$this->input->post('name')			 
							  );
				$id = $this->userdetails_model->insert_employee($data);
				if(!$id){
					$this->session->set_flashdata('login_error_create',TRUE);
					redirect('user/create_employer');
					}
				else{
					$this->session->set_userdata(array('employee_inserted'=>TRUE,'id'=>$id));			
					redirect('user/display');
				}
			}
			
		}	
	}

	public function modify_sal()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else
		{
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red;width:240px;font-size:13px;">', '</div>');
			$this->form_validation->set_rules('basicsalary' , 'Basic salary','required|trim');
			$this->form_validation->set_rules('providentfund' , 'Provident fund','required|trim');
			$this->form_validation->set_rules('vda' , 'VDA','required|trim');
			$this->form_validation->set_rules('esi' , 'ESI','required|trim');
			
			if($this->form_validation->run() == FALSE){
				$this->layout->view('calculator/modify_salary');
			}
			else{
				redirect('calculator/modify_sal');
			}
			
		}

	}


	// Logout the application.

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('user/login');
	}
}


?>