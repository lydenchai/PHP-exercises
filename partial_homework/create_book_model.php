<?php
    require_once('database/database.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isBookCreated = createBook($_POST);
        if ($isBookCreated){
            header("Location: http://localhost/partial_homework/index.php?page=book");
        }
    }
?>