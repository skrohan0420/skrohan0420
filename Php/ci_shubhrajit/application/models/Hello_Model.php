<?php
// class Hello_Model extends CI_Model
// {
// 	function saverecords($name,$email,$mobile,$address,$password)
// 	{
// 		echo $name."<br>";
// 		echo $email."<br>";
// 		echo $mobile."<br>";

// 		$query="INSERT INTO `testing`(`user_id`, `name`, `email`, `mobile`, `address`, `password`) VALUES ('','$name','$email','$mobile','$address','$password')";
// 		$this->db->query($query);
// 	}
// function logindone($email,$password)
// 	{
// 		$query=$this->db->query("SELECT * FROM testing WHERE email='$email' AND password='$password'");
// 		if ($query->num_rows()) 
// 		{
// 			return true;
// 		}
// 		else
// 		{
// 			return false;
// 		}
// 	}
// 	function displayrecords()
// 	{
// 		$query=$this->db->query("SELECT * FROM testing");
// 		return $query->result();
// 	}
// 	function deleterecords($getidfromcontroller)
// 	{
// 		$query=$this->db->query("DELETE FROM `testing` WHERE user_id='$getidfromcontroller'");
// 	}
// 	function updatedata($getidfromcontroller)
// 	{
// 			$query=$this->db->query("SELECT * FROM testing WHERE user_id='$getidfromcontroller'");
// 			return $query->result();
// 	}
// 	function updaterecordsinform($name,$email,$mobile,$address,$getidfromcontroller)
// 	{
// 		// echo $name,$email,$mobile,$address,$getidfromcontroller;

// 		$query="UPDATE `testing` SET `name`='$name',`email`='$email',`mobile`='$mobile',`address`='$address' WHERE user_id='$getidfromcontroller'";
		
// 		$this->db->query($query);
// 	}
// }



class Hello_Model extends CI_Model
{
	function saverecords($name,$email,$mobile,$address,$password)
	{

		$query="INSERT INTO `testing`(`user_id`, `name`, `email`, `mobile`, `address`, `password`) VALUES ('','$name','$email','$mobile','$address','$password')";
		$this->db->query($query);
	}
	function displayrecords($e)
	{
		$query=$this->db->query("SELECT * FROM testing WHERE email='$e'");
		return $query->result();
	}
	function logindone($email,$password)
	{
		$query=$this->db->query("SELECT * FROM testing WHERE email='$email' AND password='$password'");
		if ($query->num_rows()) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function updatedata($getidfromcontroller)
	{
			$query=$this->db->query("SELECT * FROM testing WHERE email='$getidfromcontroller'");
			return $query->result();
	}
	function updaterecordsinform($name,$email,$mobile,$address,$getidfromcontroller)
	{
		$query="UPDATE `testing` SET `name`='$name',`email`='$email',`mobile`='$mobile',`address`='$address' WHERE email='$getidfromcontroller'";
		
		$this->db->query($query);
	}
	function deleterecords($getidfromcontroller)
	{
		$query=$this->db->query("DELETE FROM `testing` WHERE email='$getidfromcontroller'");
	}
	function cpf($confirm,$getidfromcontroller)
	{
		$query="UPDATE `testing` SET `password`='$confirm' WHERE email='$getidfromcontroller'";
				
		if($this->db->query($query))
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