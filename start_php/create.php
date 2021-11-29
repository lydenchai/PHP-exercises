<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>List user</title>
</head>
<body>
    <div class="container mt-5">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="age" placeholder="Age">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="province" placeholder="Province">
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit" name="create">Create User</button>
            </div>
        </form>
        <?php 
            require_once('databases.php');
            if(isset($_POST['create'])){
                $name = $_POST['name'];
                $age = $_POST['age'];
                $province = $_POST['province'];
                $sql = "INSERT INTO student (name, age, province) VALUES('$name', '$age', '$province')";
                $db->query($sql);

                header("Location: index.php");
            }
        ?>
    </div>
</body>
</html>