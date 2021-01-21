<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArrayObjectDemo
 *
 * @author mahtab
 */

     $arr= array(
         "HTML",
         "CSS",
         "PHP",
         "JAVASCRIPT",
        
    );
          $coding  = new ArrayObject($arr);
          $iter = $coding->getIterator();
          while ($iter->valid()) {
              echo $iter->current()."<br>";
              $iter->next();
              
}

