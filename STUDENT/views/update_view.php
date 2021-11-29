<?php require_once('../partial/header.php');?>
<div class="container mt-5 p-2">
    <?php
        require_once('../database.php');
        $update = selectOne($_GET['id']);
        foreach( $update as $teacher):
    ?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center">
                    Update Profile
                </div>
                <div class="card-body">
                    <form action="../models/update_model.php" method="post">
                        <input type="hidden"  name="id" value="<?= $teacher['id']?>">
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?=$teacher['name']?>" name="name"> 
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" value="<?=$teacher['age']?>" name="age"> 
                        </div>
                        <div class="form-group">
                            <textarea name="info" rows="5" class="form-control"><?=$teacher['info']?></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-warning btn-block" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
    <?php endforeach; ?>
</div>
