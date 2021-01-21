<?php
class Calculation {
    public $a;
    public $b;
    public $result;
            function getValue($a, $b) {
                $this->a=$a;
                $this->b=$b;
                return $this;
    }
    
    function getResult() {
        return $this->result= $this->a * $this->b;
        
    }
    //TypeHintingPhp

}