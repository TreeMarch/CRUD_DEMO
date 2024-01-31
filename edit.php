<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "studentdb";
    $conn = new mysqli($server,$user,$pass,$db);


    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id = $id";
    $rs = $conn ->query($sql);

    if($rs ->num_rows>0){
        while($row=$rs->fetch_assoc()){
            $list = $row;
            break;
        }
    };


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT INFORMATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 style="margin: 10px;text-align:center" >UPDATE INFORMATION STUDENTS</h1>
        <a style="margin-bottom: 10px;" class="btn btn-primary" href="./list.php" role="button">HOME</a>
        <div class="row">
            <form action="./updateStudent.php" method="post">
                <input type="hidden" name="id"  value="<?php echo $list['id'] ?>"><br> <br>
                <input type="text" name="name" placeholder="Name Of Student" value="<?php echo $list['name'] ?>"><br> <br>
                <input type="email" name="email" placeholder="Student's Email" value="<?php echo $list['email'] ?>"><br> <br>
                <input type="text" name="status" placeholder="Status" value="<?php echo $list['status'] ?>"><br> <br>
                <input type="text" name="phone" placeholder="Phone Number" value="<?php echo $list['phone'] ?>"><br> <br>
                <button class="btn btn-info" type="submit">UPDATE</button>
            </form>
        </div>
    </div>
</body>
</html>