<?php
    function database(){
        return new mysqli('localhost', 'root', '', 'pos');
    }
    function getItem(){
        return database()->query("SELECT * FROM item ORDER BY id DESC");
    }
    function getItemById($id){
        return database()->query("SELECT * FROM item WHERE id = $id");
    }
    function deleteItem($id){
        return database()->query("DELETE FROM item WHERE id = $id");
    }
    function updateItem($value) {
        $item = $value['item'];
        $price = $value['price'];
        $id = $value['id'];
        return database()->query("UPDATE item SET item = '$item', price = '$price' WHERE id = $id");
    }
    function createItem($value){
        $item = $value['item'];
        $price = $value['price'];
        return database()->query("INSERT INTO item(item,price) VALUES ('$item','$price')");
    }
?>