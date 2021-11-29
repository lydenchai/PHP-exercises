<?php
    require_once ('database/database.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $isfruitUpdated = updateFruit($_POST);
        if ($isfruitUpdated){
            header("Location: https://localhost/practice_review_2/?page=post");
        }
    }
?>