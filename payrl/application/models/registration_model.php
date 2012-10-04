<?php 

class Registration_model extends CI_Model
{

	public function fetch_value()
	{
		$this->db->select('*');
		$query = $this->db->get('UserDetails');		
		return $query->result();		
	}

	public function insert_employee($val,$parent,$child)
	{

		$tableName = $child.'s';
		$selectId = $child.'_id';
		$selectName = $child.'_name';
		$parentId = $parent.'_id';

		$res = "select $selectId as id,$selectName as name from $tableName where $parentId=".$val;		
		$query = $this->db->query($res);
		$r = $query->result();
		return $r;		
	}

	public function insert_zone()
	{
		$this->db->select('zonal_id,zonal_name');
		$this->db->from('zones');
		$query = $this->db->get();			
		$res = $query->result();
		return $res;
	}

	public function save($data)
	{
		$this->db->insert('EmployeeMaster',$data);
		if($this->db->affected_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}
}

?>