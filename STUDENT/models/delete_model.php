<?php
    require_once('../database.php');
    $id = $_GET['id'];
    $isDeleted = delete($id);
    if ($isDeleted){
        header("Location:  https://localhost/student/?page=teacher");
    }
?>