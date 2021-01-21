<?php
include "DB.php";
//include 'DB.php';
class StudentP{
    private $table = 'student';
    public function readAll(){
        $query = "Select * from $this->student";
        $stmt = DB::prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
        
    }
}