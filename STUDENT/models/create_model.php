<?php
    require_once('../database.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isCreated = create($_POST);
        if ($isCreated){
            header("Location: https://localhost/student/?page=teacher");
        }
    }
?>