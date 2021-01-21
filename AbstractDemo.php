<?php

   abstract class Student {
        public $name;
        public $age;
        public function studentDetails() {
            echo "$this->name"."  is "." $this->age". "  years old ";
        }
        abstract public function School();

}
class Boy extends Student {

    function __construct() {
        
    }
    function deacribe() {
        return parent::studentDetails()."And I am a high school student <br>";
    }

    public function School() {
        return "I like to read story book";
    }

}
$s = new Boy();
$s->name="kamal";
$s->age="50";
echo $s->deacribe();
echo $s->School();

