<?php 


class UserModel extends CI_Model{
	public function getUsers(){


		
		// $q = $this->db->query('SELECT * FROM users');

		// or


		// for where clous
		// $this->db->select('f',1);
		// $this->db->where('id',1);



		$q = $this->db->get('users');


		$resObj = $q->result();

		return $resObj;

		


		// return[
		// 	['firstName'=>'Sk','lastName'=>'Rohan'],
		// 	['firstName'=>'Moen','lastName'=>'ali'],
		// 	['firstName'=>'Rohit','lastName'=>'Das']

		// ];

	}
}


?>