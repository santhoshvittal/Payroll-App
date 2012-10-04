<?php 

class Salary_model extends CI_Model
{
	public function retrieve()
	{
		$this->db->select('*');
		$query = $this->db->get('UserDetails');		
		return $query->result();		
	}
	
}

?>