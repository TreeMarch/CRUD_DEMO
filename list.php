<?php 
    $server = "localhost";
    $user  = "root";
    $pass = "";
    $db = "studentdb";
    $conn = new mysqli($server,$user,$pass,$db);


    $list = "SELECT * FROM `Students`";

    $sql  = $conn->query($list);
    if($sql->num_rows>0){
        while($row = $sql -> fetch_assoc()){
            $ds[] = $row;
        }
    };  



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 style="text-align: center;" >LIST OF STUDENT</h3>
        <!-- <a style="margin-bottom: 10px;" class="btn btn-primary" href="./list.php" role="button">HOME</a> -->
        <div class="row">
        </div>
        <a style="margin-bottom: 10px;" class="btn btn-primary" href="addStudents.php" role="button">Adding Page</a>
        <div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>STATUS</th>
                        <th>PHONE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ds as $listStudents ) {?>
                    <tr>
                        <th><?php echo $listStudents['id'] ?></th>
                        <th><?php echo $listStudents['name'] ?></th>
                        <th><?php echo $listStudents['email'] ?></th>
                        <th><?php echo $listStudents['status'] ?></th>
                        <th><?php echo $listStudents['phone'] ?></th>
                        <th>
                            <a class="text-danger" href="./delete.php?id=<?php echo $listStudents['id'] ?>">DELETE</a>
                            --------
                            <a class="text-success" href="./edit.php?id=<?php echo $listStudents['id']?>">EDIT</a>
                        </th>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>