<?php
    require_once('../database/database.php');
    $event_id = $_GET['id'];
    $isEventDeleted = deleteEvent($event_id);
    if($isEventDeleted) {
        header("Location:../index.php?page=event");
    }
?>