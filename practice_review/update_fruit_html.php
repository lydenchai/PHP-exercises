
    
<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <?php
            require_once('database/database.php');
            $updateFruit = selectOneFruit($_GET['id']);
            foreach( $updateFruit as $fruit):
        ?>
        <form action="update_fruit_model.php" method="post">
            <input type="hidden"  name="id" value="<?= $fruit['fruitID']?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Fruit Name" name="fruitName" value="<?=$fruit['fruitName']?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price" value="<?=$fruit['price']?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update Fruit</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>