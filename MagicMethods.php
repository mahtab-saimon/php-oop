<?php 
/*
class Student {

  
    public function describe() {
        echo "I am a student <br>";
        
    }
    public function __get($pm) {
        echo "$pm doesnt exist<br>";
    }
    public function __set($pm, $value){

    echo "We set $pm $value <br>";
    }
    
    public function __call($pm, $value) {
        echo "there is no $pm  method and Arguments : ".implode(', ', $value);
    }
    
    }
$st = new Student();
$st ->describe();
$st->mahtab;
$st->age = 20;
$st->notExistMethod('2','5','5');
*/


abstract class StudentDemo {

  
    public function describe() {
        echo "I am a student ->".__CLASS__."<br/>";
        echo "I am a student of csc-> ".get_CLASS($this)."<br/>";
        
    }
}

class Child extends StudentDemo{
    
    public function describe2() {
        echo "I am a student ->".__CLASS__."<br/>";
        echo "I am a student of csc->".get_CLASS($this)."<br/>";
        
    }

}


$st = new Child();
$st ->describe();
echo "<hr>";
$st->describe2();
