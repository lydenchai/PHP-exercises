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
        <?php 
            require_once('databases.php');
            $id = $_GET['id'];
            $student = $db->query("SELECT * FROM student WHERE id = $id");
            foreach ($student as $row):
        ?>
        <form action="update.php" method="POST">
            <input type="hidden" value="<?=$row['id']?>" name="stu_id">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" value="<?= $row['name']?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="age" placeholder="Age" value="<?= $row['age']?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="province" placeholder="Province" value="<?= $row['province']?>">
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit" name="update">Update User</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
</body>
</html>