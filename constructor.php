<?php
class person{
    public $name;
    public $age;
            function __construct($name, $age) {
              $this->name=$name;
              $this->age=$age;
                
        
    }
    public function personDetails() {
        
        echo "The name is ".$this->name."<br>";
    }
    public function personAge() {
       // =$age;
        echo "this person's age is " . $this->age."<br>";
    }

}

$p = new person("mahtab" , "21");
$p -> personDetails();
$p -> personAge();


?>
