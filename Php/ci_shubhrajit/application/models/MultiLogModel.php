<?php
class MultiLogModel extends CI_Model
{
	function saverecords($data)
	{
		$query=$this->db->insert('mullogin',$data);
		if ($query) 
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
		$this->db->from('mullogin');
		$where = "email='$email' and password = '$password'";
		$this->db->where($where);
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
	function displayrecords($e)
	{
		$this->db->select('utype');
		$this->db->from('mullogin');
		$where = "email='$e'";
		$this->db->where($where);
		$query=$this->db->get();

		$result=$query->result_array();

		if($query->num_rows()>0)
		{
			$this->session->set_userdata('email',$result); 
			if($query->row('utype') == 'Admin')
			{
                $this->load->view('adminpage');
            }
            elseif ($query->row('utype') == 'User')
            {
                $this->load->view('userpage');
            }
            else{
               echo "<script>alert('Incorrect Credentials')</script>";
            }
		}
		else
		{
			return false;
		}
	}
}
?>