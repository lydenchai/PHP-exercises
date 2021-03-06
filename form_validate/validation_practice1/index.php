<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container p-4">
        <?php require_once ('validate.php'); ?>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="user">
                <small class="text-danger"><?= $user_error; ?></small>
                
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="pass">
                <small class="text-danger"><?= $pass_error; ?></small>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>
        <hr>
            <h1 class="display-2"><?= $username ?></h1>
            <h1 class="display-2"><?= $password ?></h1>
    </div>
</body>
</html>