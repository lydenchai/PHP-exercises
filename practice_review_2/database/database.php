<?php

    function datababse() {
        return new mysqli('localhost', 'root', '', 'practice_review_db');
    }

    function getFruitData() {
        return datababse()->query("SELECT * FROM fruit");
    }

    function createFruit($value) {
        session_start();
        $fruitName = safeData($value['fruitName']);
        $price = safeData($value['price']);
        if(empty($fruitName) or empty($price)){
            $_SESSION['message'] = "Cannot created, all input cannot blank";
            $_SESSION['alert']= "danger";
            header ('Location: https://localhost/practice_review_2/?page=post');
        }else{
            $_SESSION['message'] = "Created Post!";
            $_SESSION['alert'] = "primary";
            return datababse()->query("INSERT INTO fruit (fruitName, price) VALUES ('$fruitName', '$price')");
            header ('Location: https://localhost/practice_review_2/?page=post');
        }
    }

    function selectOneFruit($id) {
        return datababse()->query("SELECT * FROM fruit WHERE fruitID = $id");
    }

    function deleteFruit($id) {
        session_start();
        $_SESSION['message'] = "Deleted Post!";
        $_SESSION['alert'] = "danger";
        return datababse()->query("DELETE FROM fruit WHERE fruitID = $id");
    }

    function updateFruit($value) {
        session_start();
        $fruitName = safeData($value['fruitName']);
        $price = safedata($value['price']);
        $id = $value['id'];
        if(empty($fruitName) or empty($price)){
            $_SESSION['message'] = "Cannot update, all input cannot blank";
            $_SESSION['alert']= "danger";
            header ('Location: https://localhost/practice_review_2/?page=post');
        }else{
            $_SESSION['message'] = "Updated Post!";
            $_SESSION['alert'] = "success";
            return datababse()->query("UPDATE fruit SET fruitName = '$fruitName', price = '$price' WHERE fruitID = $id");        
            header ('Location: https://localhost/practice_review_2/?page=post');
        }
    }

    function safeData($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>