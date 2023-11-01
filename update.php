<?php 

include 'connect.php';

$id = $_GET['updateid'];

$sql = "Select * from `curd` where id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];



    $sql = "update `curd` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
    
    $result = mysqli_query($con,$sql);
    if($result){
        header("Location: display.php");
    }else{
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container{
            width: 500px;
            background-color: #F8F8F8;
            padding: 30px;
            box-shadow: 1px 3px 7px 0.3px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container m-5 mx-auto">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value="<?php echo $name?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off"value="<?php echo $email?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Your Number" name="mobile" autocomplete="off" value="<?php echo $mobile?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off" value="<?php echo $password?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>