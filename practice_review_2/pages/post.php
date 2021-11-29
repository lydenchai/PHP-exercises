<?php session_start(); ?>
<div class="container p-4">
    <?php if(isset($_SESSION['message'])): ?>          
        <div class="alert alert-<?= $_SESSION['alert']?> alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Message: !</strong> <?= $_SESSION['message']?>
        </div>
    <?php endif; ?>
    <div class="d-flex justify-content-end p-4">
        <a href="create_fruit_html.php" class="btn btn-primary">Add+</a>
    </div>
    <?php
        require_once('database/database.php');
        $fruits = getFruitData();
        foreach($fruits as $fruit): 
    ?>
    <div class="card mb-2">
        <div class="card-body">
            <h1 class="display-4 text-capitalize"><?= $fruit['fruitName']?></h1>
            <strong class="badge badge-primary"><?= $fruit['price']?>$</strong>

            <div class="action d-flex justify-content-end">
                <a href="update_fruit_html.php?id=<?= $fruit['fruitID']?>" class="btn btn-primary btn-sm mr-2">EDIT</i></a>
                <a href="delete_fruit.php?id=<?= $fruit['fruitID']?>" class="btn btn-danger btn-sm">DELETE</i></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
