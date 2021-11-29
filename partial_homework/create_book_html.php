<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <form action="create_book_model.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create Book</button>
            </div>
        </form>
    </div>
<?php require_once('partial/footer.php'); ?>