<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 mt-3">
            <div class="d-flex justify-content-end">
                <a href="http://localhost/copy/userProcess/create_event_html.php" class="btn btn-primary">ADD EVENT +</a>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<?php
    require_once('database/database.php');
    $events = getAllEvents();
    foreach ($events as $event) :
?>
    <div class="mt-5 container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="action d-flex justify-content-end">
                            <a href="http://localhost/copy/userProcess/edit_event_html.php?id=<?= $event['event_id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                            <!-- <a href="delete_book.php?id=#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> -->
                            <a href="userProcess/delete_event.php?id=<?= $event['event_id']?>" class="btn btn-danger btn-sm mr-2"><i class="fa fa-trash"></i></a>
                        </div>
                        <div class="d-flex">
                            <div class="card-image mr-4" style="width: 450px; height: auto; box-sizing: border-box;">
                                <img class="img-fluid" max-width="200" height="200" src="userProcess/images/<?= $event['image'] ?>" alt="">
                            </div>
                            <div class="info" style="height:auto; width: 100%; box-sizing: border-box;">
                                <h1 class="display-4 text-danger"><?= $event['title'] ?></h1>
                                <p>From <?= $event['start_date'] ?> To <?= $event['end_date'] ?> </p>
                                <p><?= $event['description'] ?></p>
                            </div>
                        </div>
                        <div class="action d-flex justify-content-end">
                            <a href="edit_html.php?id=<?=$event['event_id'] ?>"><i class="fa fa-check" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-2"></div>
        </div>

    <?php endforeach; ?>
    </div>