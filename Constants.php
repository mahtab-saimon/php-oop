<?php

    class constantsDemo {
        public $name;
        public $id;
        const   NAME = "Mahtab uddin";

        function __construct($name, $id) {
                    $this->name=$name;
                    $this->$id=$id;
                    echo "UserName is = $name and user id is = $id";
    }
    public function disply() {
        echo "Full name is :".constantsDemo::NAME ;
    }
    

}
$c = new constantsDemo("mahtab", 1484);
echo "<br>";
$c ->disply();
?>