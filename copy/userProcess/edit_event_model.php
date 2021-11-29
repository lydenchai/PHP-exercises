<?php 
    require_once('../database/database.php');
   if($_SERVER['REQUEST_METHOD'] == 'POST') {
       $isEventUpdated = updateEvent($_POST);
       if($isEventUpdated){
           header("Location: https://localhost/copy/index.php?page=event");
       }
   }
?>