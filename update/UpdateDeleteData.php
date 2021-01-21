<?php
//Connect to database
$conn = new PDO("mysql:host=localhost;dbname=onlineexam", "root", "");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$_App_no = 1497;
$_first_name = "mmm";
$query = "update applicant set first_name = :first_name WHERE  App_no = :App_no";
$stmt = $conn->prepare($query);
$stmt->bindParam(':first_name', $first_name);
$stmt->bindParam(':App_no', $_App_no);
$stmt->execute();