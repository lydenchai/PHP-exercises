<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <form action="create_fruit_model.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Fruit Name" name="fruitName">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create Fruit</button>
            </div>
        </form>
    </div>
<?php require_once('partial/footer.php'); ?>