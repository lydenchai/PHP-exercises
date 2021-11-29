<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
        <?php
            require_once('../database/database.php');
            $id = $_GET['id'];
            $events = getOneEvent($id);
            foreach ($events as $event):
        ?>
        <form action="edit_event_model.php" method="post">
        <input type="hidden" value="<?= $event['event_id']?>" name="event_id">
            <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="title" placeholder="Event Title" value="<?= $event['title']?>">
                </div>
                <div class="form-floating mb-3">
                    <input type="datetime-local" class="form-control" name="start_date" placeholder="Start Date" value="<?= $event['start_date']?>">
                </div>
                <div class="form-floating mb-3">
                    <input type="datetime-local" class="form-control" name="end_date" placeholder="End Date" value="<?= $event['end_date']?>">
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="description" placeholder="Description" value="<?= $event['description']?>">
                </div>
                <div class="form-floating mb-3">
                    <select name="categorySeleted">
                    <option value="selected">Choose event type</option>
                    <option value="1">Monthly Party</option>
                    <option value="2">Graducation</option>
                    </select>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold " type="submit">Update</button>
                </div>
            </div>
             
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('../partial/footer.php'); ?>