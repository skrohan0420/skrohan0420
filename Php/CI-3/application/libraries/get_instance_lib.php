<?php 


// get_instance() is used to load resorce like lib, helper in the librery


class Get_instance_lib{


	public function abc(){
		$ci = & get_instance();
		$ci->load->helper('array');
		echo "abc func of testlib";
	}


}



?>