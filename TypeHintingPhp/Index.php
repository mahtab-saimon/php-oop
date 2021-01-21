<?php


spl_autoload_register( 
        function($class_name)
        {
        include_once ''.$class_name.".php";
}
);    
  
//$php = new MethodChaining();
//$php->Framework()->cms();
$cal = new calculation();
$num1 = array(
    array(
        "number_one",10,10
    ),
    array(
        "number_Two",30,30
    ),
);
echo $cal->getValue($num1);
?>