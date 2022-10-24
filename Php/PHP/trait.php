<?php
trait message1 {
  public function msg1() {
    
  }
  public function msg2() {
    
  }
}

class Welcome {
  use message1;

}

$obj = new Welcome();
$obj->msg1();
echo '<br>';
$obj->msg2();
?>