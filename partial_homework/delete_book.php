<?php
    require_once('database/database.php');
    $id = $_GET['id'];
    $isBookDeleted = deleteBook($id);
    if ($isBookDeleted){
        header("Location: http://localhost/partial_homework/index.php?page=book");
    }
?>