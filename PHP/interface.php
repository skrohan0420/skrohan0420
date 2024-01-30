<?php
interface A {
  public function fun();
  public function fun2();
}

class B implements A {
  public function fun() {
    echo "Hello World!";
  }
}
class C implements A{
  public function fun2(){
  	echo "Hello World2!";
  }
}

$ob = new B();
$ob-> fun();
$ob = new C();
$ob-> fun2();
?>
?>