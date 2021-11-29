<?php session_start(); ?>
<div class="container p-3 mt-3">
    <?php if(isset($_SESSION['message'])): ?>          
        <div class="alert alert-<?= $_SESSION['alert']?> alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Message: !</strong> <?= $_SESSION['message']?>
        </div>
    <?php endif; ?>
    <?php
        session_destroy();
    ?>
    <?php
        require_once('database.php');
        $allTeacher = selectAll();
        foreach($allTeacher as $teacher): 
    ?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <?php if($teacher['age'] < 30) : ?>
                <div class="card mb-2 border border-info">
            <?php else : ?>
                <div class="card mb-2 border border-danger">
            <?php endif; ?>
                    <div class="card-body">
                        <div class="action">
                            <a href="views/update_view.php?id=<?=$teacher['id']?>">
                                <i class="fa fa-pencil text-info"></i>
                            </a>
                            <a href="models/delete_model.php?id=<?= $teacher['id']?>">
                                <i class="fa fa-trash text-danger"></i>
                            </a>
                        </div>
                <hr>
                <a href="views/detail_view.php?id=<?=$teacher['id']?>" style="text-decoration: none; color: #000">
                    <div class="d-flex justify-content-between">
                        <strong><?= $teacher['name']?></strong>
                        <span class="badge badge-info"><?= $teacher['age']?></span>
                    </div>
                </a>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
    <?php endforeach; ?>
</div>