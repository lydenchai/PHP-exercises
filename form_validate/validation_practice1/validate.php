<?php
$username = "";
$password = "";
$user_error = "";
$pass_error = "";
if($_SERVER['REQUEST_METHOD']== 'POST'){
    if(empty($_POST['user'])){
        $user_error = "Please enter a username";
    }else{
        $username = $_POST['user'];
        if(!preg_match('/^[a-zA-Z0-9]{3,10}$/i',$username)){
            $user_error = "Username can be only lowercase character";
            $username="";
        }else{
            $username = $_POST['user'];
        }
    }
    if(empty($_POST['pass'])){
        $pass_error = "Please enter a password";
    }else{
        $password = ($_POST['pass']);
    }
}
