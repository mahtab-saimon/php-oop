<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TraitsDemo
 *
 * @author mahtab
 */

trait Java {
    function javaCoder() {
        return "I love Java <br/>";
    }
    
}
trait Php {
    function phpCoder() {
        return "I love Php <br/>";
    }
    
}
trait JavaPhp {
    use Java, Php;
}
class TraitsDemo {
    //put your code here
    use JavaPhp;
    
}
class TraitsDemo2 {
    //put your code here
    use Java, Php;
}
$t = new TraitsDemo();
$t = new TraitsDemo2();
//echo $t->javaCoder();
echo $t->javaCoder();
