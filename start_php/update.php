<?php

    require_once('databases.php');
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $province = $_POST['province'];
        $id = $_POST['stu_id'];
        
        $sql = "UPDATE student SET name='$name', age='$age', province='$province' WHERE id=$id";
        $db->query($sql);

        header("Location: index.php");
    }
?>