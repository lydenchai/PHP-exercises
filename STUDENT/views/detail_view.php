<?php require_once('../partial/header.php');?>
<div class="container p-3 mt-3">
    <div class="p-3">
        <a href="https://localhost/student/?page=teacher"><button class="btn btn-primary" type="button" >&#8592;</button></a>
    </div>
    
    <div class="card border border-success">
        <?php
            require_once('../database.php');
            $update = selectOne($_GET['id']);
            foreach( $update as $teacher):
        ?>
        <div class="card-body">
            <div>
                <strong><?= $teacher['name'] ?></strong>
                <br>
                <span class="badge badge-info"><?= $teacher['age'] ?></span>
                <hr>
                <p class="text-muted"><?= $teacher['info'] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>