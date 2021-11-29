<div class="container p-5">
    <div class="d-flex justify-content-end p-4">
        <a href="create_subject_html.php" class="btn btn-primary">Add Subject</a>
    </div>
    <?php
        require_once('database/database.php');
        $programming = getProgramingData();
        foreach($programming as $subject): 
    ?>
    <div class="card mb-2">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="display-4 text-center"><?= $subject['name']?></h1>
                </div>
                <div class="align-items-end">
                    <div class="action d-flex justify-content-end">
                        <a href="update_subject_html.php?id=<?= $subject['pro_id']?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                        <a href="delete_subject.php?id=<?= $subject['pro_id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </div>
                    <br>
                    <br>
                    <strong><?= $subject['date']?></strong> 
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>