<?php
    require_once('../database.php');
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $isUpdated = update($_POST);
        if ($isUpdated){
            header("Location: https://localhost/student/?page=teacher");
        }
    }
?>