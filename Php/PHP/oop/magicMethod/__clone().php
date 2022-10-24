<?php 
// $a = 5;
// $b = & $a;
// $b = 10;
// echo $a;


class student{

	public $name;
	public $course;

	public function __construct($n){
		$this->name = $n;
	}
	public function setCourse(course $c){
		$this->course = $c;
	}
	public function __clone(){
		$this->course = clone  $this->course;
	}

}


class course{
	public $cName;
	public function __construct($cn){

		$this->cName = $cn;

	}
}

$std1 = new student('Rohan');
$course1 = new course('PHP');

$std1->setCourse($course1);


$std2 = clone $std1;

$std2->name = 'Sk Rohan';
$std2->course->cName = 'Python';


echo '<pre>';
print_r($std1);
print_r($std2);
echo '</pre>';


?>