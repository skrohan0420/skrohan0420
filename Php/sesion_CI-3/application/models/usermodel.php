<?php 

class Usermodel extends CI_Model{


	public function addData($arr){
		if (count($arr)) {
			return $this->db->insert('user_table',$arr);
		}else{
			return 0;
		}
	}

	public function login($username, $password){


		$q = $this->db->where([
			'Name'=>$username,
			'Password'=>$password
		])->get('user_table');
		return $q;
	}


}


 ?>