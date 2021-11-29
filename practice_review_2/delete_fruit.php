<?php
    require_once('database/database.php');
    $id = $_GET['id'];
    $isFruitDeleted = deleteFruit($id);
    if ($isFruitDeleted){
        header("Location:  https://localhost/practice_review_2/?page=post");
    }
?>