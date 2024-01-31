<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $phone = $_POST['phone'];


    $server = "localhost";
    $user  = "root";
    $pass = "";
    $db = "studentdb";
    $conn = new mysqli($server,$user,$pass,$db);

    $sql = "INSERT INTO students (name,email,status,phone) VALUES ('$name','$email','$status','$phone') ";
    $adding = $conn->query($sql);
    if ($adding==true){
        header("location:./list.php");
    }else{
        echo "FAIL";
    }

?>