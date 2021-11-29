<?php 
    include_once('partial/navbar.php');
    include_once('partial/header.php');
    if (isset($_GET['page'])){
        if($_GET['page'] == "home"){
            include_once('views/home.php');
        }elseif($_GET['page'] == "teacher"){
            include_once('views/teacher.php');
        }elseif($_GET['page'] == "create_view"){
            include_once('views/create_view.php');
        }else{
            include_once('views/404.php');
        }
    }else {
        include_once('views/home.php');
    }
    include_once('partial/footer.php');
?>
