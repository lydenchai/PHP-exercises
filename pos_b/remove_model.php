<?php
    require_once ('model.php');
    $id = $_GET['id'];

    $isDeleted = deleteItem($id);
    
    if($isDeleted){
        header('Location: index.php');
    }
    
?>