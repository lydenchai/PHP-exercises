<?php
    require_once ('model.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isCreated = createItem($_POST); 
        if($isCreated){
            header("Location: index.php");
        }
    }
?>