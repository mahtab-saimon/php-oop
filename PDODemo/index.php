<?php
spl_autoload_register(function($class){
include "CrudWithPDO/".$class.".php";
});
?>

<?php
$user = new StudentP();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <div class="form-row ">
        <div class=" col-md-7">
            <div class="form-group col-md-6">

        <label for="exampleInputname">Name  </label>
        <input type="text" name="name" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter name">
    </div>
<!--    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>-->
            <div class="form-row ">
                <div class=" col-md-7">
                    <div class="form-group col-md-6">

                        <label for="exampleInputdepartmen">departmen  </label>
                        <input type="text" name="dep" class="form-control" id="exampleInputnamedepartmen" aria-describedby="Help" placeholder="Enter name">
                    </div>
<!--    <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>-->
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
        <div class=" col-md-5">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Action</th>
                </tr>
                <?php
                $i = 0;
                foreach($user->readAll() as $key => $value){
                    $i++;
                
                ?>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $i;  ?></th>
                    <td><?php echo $value['name'];   ?></td>
                    <td><?php echo $value['dep'];   ?></td>
                    <td>Edit || Delete</td>
                </tr>
                <?php }?>
                </tbody>
            </table>


        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

