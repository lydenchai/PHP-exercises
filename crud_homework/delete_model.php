<?php
    require_once('database/database.php');
    $id = $_GET['id'];
    $isDelete = deleteStudent($id);
    if ($isDelete){
        header("Location: index.php");
    }
?>