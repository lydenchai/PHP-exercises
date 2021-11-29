<?php

    function database() {
        return new mysqli('localhost', 'root', '', 'practice_review_db');
    }

    function getFruitData() {
        return database()->query("SELECT * FROM fruit");
    }

    function createFruit($value) {
        $fruitName = $value['fruitName'];
        $price = $value['price'];
        return database()->query("INSERT INTO fruit (fruitName, price) VALUES ('$fruitName', '$price')");
    }

    function searchPost($value){
        $fruitName = $value['search'];
        return database()->query("SELECT * FROM fruit  WHERE fruitName LIKE '%$fruitName%'");
    }

    function selectOneFruit($id) {
        return database()->query("SELECT * FROM fruit WHERE fruitID = $id");
    }

    function deleteFruit($id) {
        return database()->query("DELETE FROM fruit WHERE fruitID = $id");
    }

    function updateFruit($value) {
        $fruitName = $value['fruitName'];
        $price = $value['price'];
        $id = $value['id'];
        return database()->query("UPDATE fruit SET fruitName = '$fruitName', price = '$price' WHERE fruitID = $id");        
    }
?>