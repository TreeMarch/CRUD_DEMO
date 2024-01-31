<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDING STUDENT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div>
        <h2 style="text-align: center;">ADDING PAGE</h2>
        <a style="margin-bottom: 10px;" class="btn btn-primary" href="./list.php" role="button">HOME</a>

        </div>
        <div class="row">
            <form action="saveStudent.php" method="post">
                <!-- <input type="text" name="id" placeholder="Student ID"> -->
                <input type="text" name="name" placeholder="Student Name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="status" placeholder="Status">
                <input type="text" name="phone" placeholder="Phone Number">
                <button type="submit">ADD</button>
            </form>
        </div>
    </div>
</body>
</html>