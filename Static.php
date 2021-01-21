<?php

    class constantsDemo {
        public $name;
        public $id;
        public static $age="30";
        const   NAME = "Mahtab uddin";

        function __construct($name, $id) {
                    $this->name=$name;
                    $this->$id=$id;
                    echo "UserName is = $name and user id is = $id";
    }
    public static function disply() {
        echo "Full name is :".constantsDemo::NAME ."<br>";
        echo " Age is : ".self::$age ;
    }
    

}
$c = new constantsDemo("mahtab", 1484);
echo "<br>";
constantsDemo::disply();    

?>

