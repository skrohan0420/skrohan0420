<?php 

class employee{
	public $name;
	public $age;
	public $salary;

	function __construct($n,$a,$s){
		$this->name= $n;
		$this->age= $a;
		$this->salary= $s;
	}

	// function __construct(){
	// 	echo 'employee constructor';
	// }

	function info(){
		echo "<h3>Employee Profile</h3>";
		echo '<p>employee Name : ' . $this->name . '</p>';
		echo '<p>employee Age : ' . $this->age . '</p>';
		echo '<p>employee Salary : ' . $this->salary . '</p>';
	}

}

class manager extends employee{
	public $ta = 1000;
	public $phone = 300;
	public $totalSal; 

	// function __construct(){
	// 	echo 'manager constructor';
	// }

	function info(){

		$this->totalSal = $this->salary + $this->ta + $this->phone;

		echo "<h3>Manager Profile</h3>";
		echo '<p>employee Name : ' . $this->name . '</p>';
		echo '<p>employee Age : ' . $this->age . '</p>';
		echo '<p>employee Salary : ' . $this->totalSal . '</p>';
	}
} 



$e1 = new manager("Akash",25,40000);
$e2 = new employee("Ram",25,40000);
	
$e1->info();
$e2->info();

 ?>