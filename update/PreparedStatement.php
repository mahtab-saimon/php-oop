<?php
/*
$con = new mysqli("localhost", "root", "", "onlineexam");
if (mysqli_connect_errno()) {
    echo "connection failed......";
    exit();
    
}
 else {
          echo "connection successfull......";

 }
     
 */
//Connect to database
$conn = new PDO("mysql:host=localhost;dbname=onlineexam", "root", "");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$_first_name="mahtab";
$_last_naem="uddin";
$_age="20";
$_email_address="y@gmail.com";
$_gender="male";
        
        
$query = "insert into applicant(first_name, last_naem,age, email_address, gender) values(:first_name, :last_naem, :age, :email_address, :gender)";
$stmt = $conn->prepare($query);
$stmt->bindParam(':first_name',$_first_name);
$stmt->bindParam(':last_naem',$_last_naem);
$stmt->bindParam(':age',$_age);
$stmt->bindParam(':email_address',$_email_address);
$stmt->bindParam(':gender',$_gender);
$stmt->execute();
    

