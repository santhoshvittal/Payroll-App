<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	* This User_model is used to Get model information of user.
*/

class User_model extends CI_Model
{
	// Checking the user logged into the system.

	public function check_login($username,$password)
	{
		$md5_password = md5($password);
		$query = "select slno from UserDetails where user_name= ? and passwrd =?"; 
		$result1 = $this->db->query($query,array($username,$md5_password));

		if($result1->num_rows() ==1){
			return $result1->row(0)->slno;
		}
		else{
			return false;
		}	
	}

	public function save($data)
	{
		$this->db->insert('UserDetails',$data);
		if($this->db->affected_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function retrieve()
	{
		$this->db->select('*');
		$query = $this->db->get('UserDetails');		
		return $query->result();		
	}	

	public function update($data)
	{
		$this->db->where($slno,$this->slno);
		$this->db->update('data',$data);
	}

}

?>