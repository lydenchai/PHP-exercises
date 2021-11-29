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
    <?php 
        require_once ('databases.php');
        $data = $db-> query ('SELECT * FROM student');
    ?>
    <div class="p-4. d-flex justify-content-end mt-3" >
        <a href="create.php" class="btn btn-primary">+ADD</a>
    </div>
    <table class='table table-striped mt-3'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Province</th>
            <th>Action</th>
        </tr>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td><?php echo $row['province'] ?></td>
                <td>
                    <a href="edit.php?id=<?=$row['id']?>" class='btn btn-info btn-sm'>EDIT</a>
                    <a href="delete.php?id=<?= $row['id']?>"  class='btn btn-danger btn-sm'>DELETE</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>