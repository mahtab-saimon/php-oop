<pre>
<?php

        class person {
            
            public $name;
            public $age;


            public function personName() {
                echo "person name is ".$this->name."<br>";
    }
    public function personAge($age) {
        $this->age=$age;
        echo "person age is : ".$age;
        
    }

}
    $personOne= new person();
    $personOne -> name="mahtab";
    $personOne ->personName();
    $personOne ->personAge("18");
    


?>
</pre>

