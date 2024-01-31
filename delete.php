<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "studentdb";
    $conn = new mysqli($server,$user,$pass,$db);


    $id = $_GET['id'];
    

    $sql = "DELETE FROM students WHERE id = $id ";

    $delete = $conn->query($sql);
    if($delete==true){
        header("location:./list.php");
    }else{
        echo "Delete Failed";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE PAGE</title>
</head>
<body>
    
</body>
</html>