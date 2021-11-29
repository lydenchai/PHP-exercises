<?php
    require_once ('database/database.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $isBookUpdated = updateBook($_POST);
        if ($isBookUpdated){
            header("Location: http://localhost/partial_homework/index.php?page=book");
        }
    }
?>