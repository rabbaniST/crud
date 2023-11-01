<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <button class="btn btn-primary m-5"><a class="text-white" href="user.php">Add User</a></button>

        <table class="table">
            <tbody>
                <thead>
                    <tr>
                        <th scope="col">Sl No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Password</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
            </tbody>

            <?php

$sql = "Select * from `curd`";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $id = $row["Id"];
        $name = $row["name"];
        $email = $row["email"];
        $mobile = $row["mobile"];
        $password = $row["password"];

        echo '
        <tr>
           <th scope="row">'.$id.'</th>
           <td>'.$name.'</td>
           <td>'.$email.'</td>
           <td>'.$mobile.'</td>
           <td>'.$password.'</td>
           <td>
           <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
           <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
           </td>

        </tr>
                    ';
    }
}

?>

   

        </table>
    </div>
</body>

</html>