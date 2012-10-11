<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	* File upload functionality held here. 		
*/

class Upload extends CI_Controller
{
	// By default, this index page is displaying.
	
	public function index()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/index');
		}
		else{
			$this->layout->view('upload/upload');
		}
	}

	public function do_upload()
	{
		$config['upload_path'] = './uploads/'; // It is present Payroll/payrl folder.
		$config['allowed_types'] = '*'; // Allow all the types of files incuding .png ,.jpg etc.
		$config['max_size']	= '1024';
		
		$this->load->library('upload',$config);

		if (!$this->upload->do_upload()){		
			$this->session->set_flashdata('upload_error',TRUE);
			redirect('upload');
		}
		else{
			$data = array('upload_data'=> $this->upload->data());
			$this->layout->view('upload/upload',$data);	
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