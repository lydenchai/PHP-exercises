<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <?php
            require_once('database/database.php');
            $updateData = selectOnestudent($_GET['id']);
            foreach( $updateData as $data):
        ?>
        <form action="update_model.php" method="post">
            <input type="hidden"  name="id" value="<?= $data['id']?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" value="<?=$data['name']?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Age" name="age"value="<?=$data['age']?>">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" value="<?=$data['email']?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Image URL" name="image_url" value="<?=$data['profile']?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>