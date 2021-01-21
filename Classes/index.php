<?php
   
//    
//    function __autoload($class_name){
//        
//        include_once ''.$class_name.".php";
//    }
   
spl_autoload_register( 
        function($class_name)
        {
        include_once ''.$class_name.".php";
}
);    
  

    $ruby = new Ruby();
    $java = new Java();
    $php = new Php();

?>