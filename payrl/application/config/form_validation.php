<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

/*
	* This file is used for form validation for all view pages.
	* For example : signup is used in user controller to authenticate the user during login system.
*/

$config = array(
		'signup' => array(
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required|trim|xss_clean|alpha-dash'
				),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|trim|xss_clean'
				)
			),
		'register' => array(
			array(
				'field' => 'fullname',
				'label' => 'Fullname',
				'rules' => 'required|trim'
				),
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required|trim'
				),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|trim'
				),

			array(
				'field' => 'designation',
				'label' => 'Designation',
				'rules' => 'required|trim'
				),
			array(
				'field' => 'department',
				'label' => 'Department',
				'rules' => 'required|trim'
				)
			),

		'employer' => array(
			array(
				'field' => 'emp_code',
				'label' => 'Emp code',
				'rules' => 'required|trim|xss_clean'
				),	
			array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required|trim|xss_clean'
				),	
			array(
				'field' => 'bankname',
				'label' => 'Bank Name',
				'rules' => 'required|trim|xss_clean'
				),	
			array(
				'field' => 'emp_designation',
				'label' => 'Designation',
				'rules' => 'required|trim|xss_clean'
				),
			array(
				'field' => 'emailid',
				'label' => 'EmailId',
				'rules' => 'required|trim|xss_clean'
				),
			array(
				'field' => 'bankacno',
				'label' => 'Bank A/C no',
				'rules' => 'required|trim|xss_clean'
				),
			array(
				'field' => 'zone',
				'label' => 'Zone',
				'rules' => 'required|trim|xss_clean'
				),
			array(
				'field' => 'district',
				'label' => 'District',
				'rules' => 'required|trim|xss_clean'
				),
			array(
				'field' => 'taluk',
				'label' => 'Taluk',
				'rules' => 'required|trim|xss_clean'
				),
			array(
				'field' => 'kiosk',
				'label' => 'Kiosk ID',
				'rules' => 'required|trim|xss_clean'
				),
			array(
				'field' => 'join',
				'label' => 'Join',
				'rules' => 'required|trim|xss_clean'
				)	
			),
			'calculation' => array(
			array(
				'field' => 'month',
				'label' => 'Month',
				'rules' => 'required|trim|xss_clean'
				),	
			array(
				'field' => 'payable',
				'label' => 'Days Payable',
				'rules' => 'required|trim|xss_clean'
				)
			),
			'salary' => array(
			array(
				'field' => 'basicsalary',
				'label' => 'Basic Salary',
				'rules' => 'required|trim|xss_clean'
				),
			array(
				'field' => 'providentfund',
				'label' => 'Provident fund',
				'rules' => 'required|trim|xss_clean'
				),
			array(
				'field' => 'vda',
				'label' => 'VDA',
				'rules' => 'required|trim|xss_clean'
				),
			array(
				'field' => 'esi',
				'label' => 'ESI',
				'rules' => 'required|trim|xss_clean'
				)
			)
);

?>