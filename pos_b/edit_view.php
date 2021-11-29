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
    <div class="containter p-4">
        <?php
            require_once ('model.php');
            $id = $_GET['id'];
            $data = getItemById($id);
            foreach ($data as $item):
        ?>
        <form action="edit_model.php" method="post">
            <input type="hidden"  name="id" value="<?= $item['id']?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Item name" name="item" value="<?=$item['item']?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Item price" name="price" value="<?=$item['price']?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
</body>
</html>