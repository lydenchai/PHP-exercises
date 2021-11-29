<?php include_once('partial/header.php'); 
    require_once('database/database.php');
    $id = $_GET['id'];
    $posts = getOnePost($id);
?>
<div class="p-3 container mt-3">
    <?php
        foreach( $posts as $post):
    ?>
    <div class="card">
        <div class="card-body">
            <h3 class="display-4"><?= $post['title']?></h3>
            <p><?= $post['description']?></p>
            <div class="d-flex justify-content-end">
                <span><?= $post['date']?></span>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php include_once('partial/footer.php') ?>