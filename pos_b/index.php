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
        <div class="d-flex justify-content-end p-4">
            <a href="create_view.php" class="btn btn-primary">Add Item</a>
        </div>
        <?php
            require_once ('model.php');
            $items = getItem();
            foreach ($items as $item):
        ?>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <h1 class="display-3 text-capitalize"><?=$item['item']?></h1>
                        <?php if($item['price']>1000): ?>
                            <strong class="badge badge-danger"><?=$item['price']?>$</strong>
                        <?php elseif($item['price']<1000):?>
                            <strong class="badge badge-success"><?=$item['price']?>$</strong>
                        <?php else: ?>
                            <strong class="badge badge-primary"><?=$item['price']?>$</strong>
                        <?php endif; ?>
                        <div class="d-flex justify-content-end">
                            <a href="edit_view.php?id=<?=$item['id']?>" class="btn btn-primary mr-1"><i class="fa fa-pencil"></i></a>
                            <a href="remove_model.php?id=<?= $item['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>


