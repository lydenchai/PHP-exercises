<?php
include_once('partial/header.php');
include_once('partial/navbar.php');
if(isset($_GET['page'])) {
    if($_GET['page'] == "home") {
        include_once('pages/home.php');
    } elseif ($_GET['page'] == "book") {
        include_once('pages/book.php');
    } elseif ($_GET['page'] == "programming") {
        include_once('pages/programming.php');
    }
} else {
    include_once('pages/home.php');
}
include_once('partial/footer.php');
?>