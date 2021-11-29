<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <form action="create_subject_model.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="name" name="name">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create Subject</button>
            </div>
        </form>
    </div>
<?php require_once('partial/footer.php'); ?>