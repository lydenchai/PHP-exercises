<?php
    require_once('database/database.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isfruitCreated = createFruit($_POST);
        if ($isfruitCreated){
            header("Location: https://localhost/practice_review_2/?page=post");
        }
    }
?>