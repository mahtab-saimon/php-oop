<?php

$conn = new PDO("mysql:host=localhost;dbname=onlineexam", "root", "");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$_id = 1484;
$query = "select * from applicant where id=:id";
$stmt=$conn->prepare($query);
//$stmt->bindParam(:id,$_id);
$stmt->execute();