<?php
   class Person{
      private $name;
      public function setName($name){
         $this->name = $name;
      }
      public function getName(){
         return 'Welocme '. $this->name;
      }
   }
   $person = new Person();
   $person->setName('Alex');
   $name = $person->getName();
   echo $name;
?>