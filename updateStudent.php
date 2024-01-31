<?php 
    $id  = $_POST['id'];
    $name  = $_POST['name'];
    $email  = $_POST['email'];
    $status  = $_POST['status'];
    $phone  = $_POST['phone'];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "studentdb";
    $conn = new mysqli($server,$user,$pass,$db);

    $sql = "UPDATE students SET name = '$name', email = '$email',status = '$status',phone = '$phone'";
    $rs = $conn->query($sql);
    if($rs==true){
        header("location:./list.php");
    }else{
        echo "Fail";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    
</body>
</html>