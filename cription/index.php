<?php
    $db = new mysqli('localhost', 'root', '', 'pos');
    $password = "1234";
    $username = "Lyden";
    $passEmcript = password_hash($password, PASSWORD_DEFAULT);
    // $db->query("INSERT INTO user (username, password)VALUES('$username','$passEmcript')");

    $pass = $db->query("SELECT password FROM user WHERE username = '$username'");
    print_r($pass);

    foreach($pass as $row){
        if (password_verify($password, $row['password'])){
            echo "Password verified correct";
        }else{
            echo "Password not verified";
        }
    }
?>