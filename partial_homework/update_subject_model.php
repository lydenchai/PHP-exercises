<?php
    require_once ('database/database.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $isSubjectUpdated = updateSubject($_POST);
        if ($isSubjectUpdated){
            header("Location: http://localhost/partial_homework/index.php?page=programming");
        }
    }
?>