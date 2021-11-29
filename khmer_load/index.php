<?php 

include_once('partial/navbar.php');
include_once('partial/header.php');
if (isset($_GET['page'])){
    if ($_GET['page'] == "home"){
        include_once('pages/home.php');
    }elseif($_GET['page'] == "about"){
        include_once('pages/about.php');
    }elseif($_GET['page'] == "services"){
        include_once('pages/services.php');
    }else{
        include_once('pages/404.php');
    }
}else {
    include_once('pages/home.php');
}

include_once('partial/footer.php');
?>
