<?php 



class student{

	public $name;
	public $age;
	public $address;
	public $class;
	public $gender;


	public function __construct($name = 'Not Set',
							   	$age = 0,
							   	$address = 'Not Set',
							   	$class = 0,
							   	$gender = 'Not Set'){

		$this->name 	= $name;
		$this->age 		= $age;
		$this->address 	= $address;
		$this->class 	= $class;
		$this->gender 	= $gender;
	}


	public function show(){
		
		return 	'Student Name : ' 	 . $this->name 		. '<br>'.
		 		'Student age : ' 	 . $this->age 		. '<br>'.
		 		'Student address : ' . $this->address 	. '<br>'.
		 		'Student class : ' 	 . $this->class 	. '<br>'.
		 		'Student gender : '  . $this->gender;

	}
}


$student1 = new student('Rohan',22,'chandannagore','','male');

echo $student1->show();


 ?>