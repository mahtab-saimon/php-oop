<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lnguage
 *
 * @author mahtab
 */
class Lnguage {
    //put your code here

    private $category;
    private $framework;
    function getCategory() {
        return $this->category;
    }

    function getFramework() {
        return $this->framework;
    }

    function setCategory($category) {
        $this->category = $category;
    }

    function setFramework($framework) {
        $this->framework = $framework;
    }


    
}

$j = new Lnguage();
$j->setCategory("oop");
$j->setFramework("");
$p= clone $j;
echo $j->getCategory()."<br>";
echo $j->getFramework()."<br>";
$p->setCategory("kkk");
$p->setFramework("hh");
echo $p->getCategory()."<br>";
echo $p->getFramework();