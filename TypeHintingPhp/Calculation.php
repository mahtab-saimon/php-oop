<?php
class Calculation {
    public $a;
  
            function getValue(array $a) {
                foreach ($a as $value) {
                    echo $value[0];
                    echo ":";
                    echo $value[1] * $value[2]."<br>";
                }
    }
    
   
    //TypeHintingPhp

}