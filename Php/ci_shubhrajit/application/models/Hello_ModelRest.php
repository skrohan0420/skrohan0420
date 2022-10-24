<?php
class Hello_ModelRest extends CI_Model
{
	function saverecords($data)
	{
		$query=$this->db->insert('testing',$data);
		if ($query) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function displaydata()
	{
		$this->db->select('*');
		$this->db->from('testing');
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
	function updaterecords($data,$userid)
	{

		$this->db->where('user_id', $userid);
		if ($this->db->update('testing', $data)) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function deleterecords($userid)
	{
		$this->db->where("user_id",$userid);
		if ($this->db->delete("testing")) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>