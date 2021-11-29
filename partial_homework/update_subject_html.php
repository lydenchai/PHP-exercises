<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <?php
            require_once('database/database.php');
            $updateSubject = selectOneSubject($_GET['id']);
            foreach( $updateSubject as $subject):
        ?>
        <form action="update_subject_model.php" method="post">
            <input type="hidden"  name="id" value="<?= $subject['pro_id']?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="name" name="name" value="<?=$subject['name']?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update Subject</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>