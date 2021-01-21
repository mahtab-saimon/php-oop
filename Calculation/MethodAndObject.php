
<?php 
    include_once "functions.php";
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form method="post" action="">
             <input  type="text" name="num1"/><br>
             <input  type="text" name="num2"/><br>
           <input type="submit" name="calculation" value="submit"/>

         </form>
    </body>
</html>


<?php

if (isset($_POST['calculation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    if (empty($num1)|| empty($num2)) {
        echo "Those Field must not be empty";
        
    }
 else {
        echo "First number is $num1 <br> Second number is $num2 <br>";
    $cal = new calculation();
    $cal -> add($num1, $num2);
    $cal -> sub($num1, $num2);
    $cal -> mul($num1, $num2);
    $cal -> div($num1, $num2);
    
    }
}

?>