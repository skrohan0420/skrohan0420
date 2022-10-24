<?php 

class Session_model extends CI_Model{


	function logindone($email,$password)
	{
		$query=$this->db->query("SELECT * FROM testqb WHERE email='$email' AND password='$password'");
		if ($query->num_rows()) 
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}


}

 ?>