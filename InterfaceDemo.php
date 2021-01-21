<?php

    interface School {
        public function mySchool();
        
}
    
interface Versity {
        public function myVersity();
}
    
interface College {
        public function myCollege();
}


class Teacher implements School, Versity, College{
    
    function __construct() {
        $this->mySchool();
        $this-> myCollege();
         $this->myVersity();
    }

    public function mySchool() {
        echo "I am a school teacher <br>";
    }

    public function myCollege() {
                echo "I am a College teacher <br>";

    }

    public function myVersity() {
                echo "I am a Versity teacher <br>";

    }

}

class Student implements School, Versity, College{
    
    function __construct() {
        $this->mySchool();
        $this-> myCollege();
         $this->myVersity();
    }

    public function mySchool() {
        echo "I am a school Student <br>";
    }

    public function myCollege() {
                echo "I am a College Student <br>";

    }

    public function myVersity() {
                echo "I am a Versity Student <br>";

    }

}



$tea = new Teacher();
$tea = new Student();
?>
