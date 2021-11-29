<?php
    require_once ('databases.php');
    $id = $_GET['id'];
    $db->query("DELETE FROM student WHERE id =$id");

    header('Location: index.php');

?>