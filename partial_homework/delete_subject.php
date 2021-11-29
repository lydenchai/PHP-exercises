<?php
    require_once('database/database.php');
    $id = $_GET['id'];
    $isSubjectDeleted = deleteSubject($id);
    if ($isSubjectDeleted){
        header("Location: http://localhost/partial_homework/index.php?page=programming");
    }
?>