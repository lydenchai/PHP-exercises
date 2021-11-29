<?php
    $username = "";
    $email = "";
    $user_error = "";
    $email_error = "";
    $regex = "/^[a-zA-Z\d]+$/";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['user'])){
            $user_error = "Please enter a username";
            $username="";
        } else{

            if(preg_match($regex, $_POST['user'])){
                $username = $_POST['user'];
            }else{
                $user_error = "Username allow only characters and numbers";
            }
        }
        if(empty($_POST['email'])){
            $email_error = "Please enter a password";
            $email = "";
        }else{
            $email = $_POST['email'];
        }
    }      
?>