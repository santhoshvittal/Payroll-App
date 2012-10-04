<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_controller
{
	// By default, this index page is displaying.

	public function index()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else{
			 $this->layout->view('registration/registration');
		}	
	}

	// After login, Create Employee and Employer.

	public function add_employee()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else
		{
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red;font-size:13px;">', '</div>');
			$this->form_validation->set_rules('fullname' , 'Fullname','required|trim');
			$this->form_validation->set_rules('username' , 'Username','required|trim');
			$this->form_validation->set_rules('password' , 'Password','required|trim');
			$this->form_validation->set_rules('designation' , 'Designation','required|trim');
			$this->form_validation->set_rules('department' , 'Department','required|trim');
			
			if($this->form_validation->run() == FALSE){
				$this->layout->view('registration/registration');
			}
			else
			{
				$password = md5($this->input->post('password'));
				$data = array('name'=>$this->input->post('fullname'),
							  'user_name'=>$this->input->post('username'),
							  'passwrd'=>$password,
							  'designation'=>$this->input->post('designation'),
							  'dept'=>$this->input->post('department')
							  );
				$id = $this->user_model->save($data);
				if(!$id){
					$this->session->set_flashdata('login_error1',TRUE);
					redirect('registration/add_employee');
				}
				else{
					$this->session->set_userdata(array('inserted'=>TRUE,'id'=>$id));			
					redirect('registration/display');
				}
			}
		
		}
	}
	public function display()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else{
			if($this->session->userdata('inserted')){					
				redirect('registration/data_fetch');			
			}
			else{
				redirect('registration/add_employee');
			}
		}
	}

	// Displaying the neccessary information about Employee or Employer.

	public function data_fetch()
	{	
		// Pagination for future use.
		/*$this->load->library('pagination');
		$config['base_url']="http://localhost/index.php/user/data_fetch/";
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = 2;
		$config['per_page'] = 3;
		$this->pagination->initialize($config);*/

		// Fetching data from database table

		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else{ 	
			$data['query'] = $this->registration_model->fetch_value();					
			$this->layout->view('registration/display_view',$data);			
		}
	}

	public function create_employer()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else
		{
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red;width:240px;font-size:13px;">', '</div>');
			$this->form_validation->set_rules('emp_code', 'Emp code', 'trim|required|xss_clean');
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('bankname', 'Bank Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('emp_designation', 'Designation', 'trim|required|xss_clean');
			$this->form_validation->set_rules('emailid', 'EmailId', 'trim|required|xss_clean');
			$this->form_validation->set_rules('bankacno', 'Bank A/C no', 'trim|required|xss_clean');
			$this->form_validation->set_rules('zone', 'Zone', 'trim|required|xss_clean');
			$this->form_validation->set_rules('district', 'District', 'trim|required|xss_clean');
			$this->form_validation->set_rules('taluk', 'Taluk', 'trim|required|xss_clean');
			$this->form_validation->set_rules('kiosk', 'Kiosk ID', 'trim|required|xss_clean');
			$this->form_validation->set_rules('join', 'Join', 'trim|required|xss_clean');
		
			if($this->form_validation->run() == FALSE){
				$this->layout->view('registration/create_employer');
			}
			else
			{
				$data = array('Emp_Code'=>$this->input->post('emp_code'),
							  'Name'=>$this->input->post('name'),
							  'Name_of_the_Bank'=>$this->input->post('bankname'),
							  'Designation'=>$this->input->post('emp_designation'),
							  'Email_ID'=>$this->input->post('emailid'),
							  'Bank_Account_Number'=>$this->input->post('bankacno'),
							  'Zone'=>$this->input->post('zone'),
							  'District'=>$this->input->post('district'),
							  'Taluk'=>$this->input->post('taluk'),
							  'Kiosk_ID'=>$this->input->post('kiosk'),
							  'Date_of_Joining'=>$this->input->post('join')
							  );

				$id = $this->registration_model->insert_zone($data);				
				if(!$id){
					$this->session->set_flashdata('login_error_create',TRUE);
					redirect('registration/create_employer');
					}
				else{
					$this->session->set_userdata(array('employee_inserted'=>TRUE,'id'=>$id));			
					redirect('registration/display1');
				}
			}
		}
	}


	public function ajax_val()
	{
		$test = $this->input->get('sel');
		$parent = $this->input->get('parent');
		$child = $this->input->get('child');		
		$data = $this->registration_model->insert_employee($test,$parent,$child);
		echo json_encode($data);
	}


	public function display1()
	{
		if($this->session->userdata('employee_inserted')){	
			redirect('registration/data_fetch1');
		}
		else{
			redirect('user/index');
		}
	}

	public function data_fetch1()
	{	
		// Pagination for future use.
		/*$this->load->library('pagination');
		$config['base_url']="http://localhost/index.php/user/data_fetch/";
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = 2;
		$config['per_page'] = 3;
		$this->pagination->initialize($config);*/

		// Fetching data from database table
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else{  	
			$data['query'] = $this->registration_model->save();	
			$this->layout->view('registration/display_view',$data);	
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