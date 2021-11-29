<?php
    require_once ('model.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $isUpdate = updateItem($_POST);
        if ($isUpdate){
            header("Location: index.php");
        }
    }
?>