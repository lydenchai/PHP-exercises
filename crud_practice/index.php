<?php 
    include_once('partial/header.php'); 
    require_once('database/database.php');
    $posts = getAllPost();
?>
<div class="p-3 container mt-3">
    <?php
        foreach( $posts as $post):
    ?>
    <div class="card">
        <div class="card-body">
            <a href="detail.php?id=<?=$post['id'];?>">
                <h3 class="display-4"><?= $post['title']?></h3>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php include_once('partial/footer.php') ?>
