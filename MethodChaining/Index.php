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
echo $cal->getValue(3, 5)->getResult();
?>