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
    <?php
        $title = "";
        $description = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title = $_POST['title'];
            $description = $_POST['description'];
        }
        date_default_timezone_set('Asia/Phnom_Penh');
    ?>
    <div class="container p-4">
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Description" name="description">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Add post + </button>
            </div>
        </form>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <?php  if($title != ''): ?>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4><?= $title ?></h4>
                                    <small><?= $description ?></small>
                                </div>
                                <div class="justify-content-end">
                                    <p><?= date('l jS \of F Y h:i:s A');   ?></p>
                                </div>
                            </div>
                        <?php else: ?>
                            <div>
                                <h4>Empty Data</h4>
                            </div>    
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

