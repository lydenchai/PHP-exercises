<?php
    require_once('database/database.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isSubjectCreated = createSubject($_POST);
        if ($isSubjectCreated){
            header("Location: http://localhost/partial_homework/index.php?page=programming");
        }
    }
?>