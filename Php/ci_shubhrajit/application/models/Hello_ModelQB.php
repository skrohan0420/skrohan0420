<?php
class Hello_ModelQB extends CI_Model
{
	function saverecords($data)
	{
		$query=$this->db->insert('testqb',$data);
		if ($query) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function displayrecords()
	{
		$this->db->select('*');
		$this->db->from('testqb');
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
	function deleterecords($userid)
	{
		$this->db->where("user_id",$userid);
		if ($this->db->delete("testqb")) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function displayrecordsById($userid)
	{
		$this->db->select('*');
		$this->db->from('testqb');
		$this->db->where('user_id',$userid);
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
		if ($this->db->update('testqb', $data)) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function loginvalid($email,$password)
	{
		$this->db->select('*');
		$this->db->from('testqb');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get();
		if($query->num_rows())
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
