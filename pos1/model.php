<?php
    function getItem(){
        $db = new mysqli('localhost','root','','pos_db');
        return $db->query("SELECT * FROM item ORDER BY id DESC");
    }

    function getItemById($id){
        $db = new mysqli('localhost','root','','pos_db');
        return $db->query("SELECT * FROM item WHERE id = $id");

    }

    function deleteItem($id){
        $db = new mysqli('localhost','root','','pos_db');
        $db->query("DELETE FROM item WHERE id=$id");

        header("Location: index.php");
        
    }

    function updateItem($value){
        $db = new mysqli('localhost','root','','pos_db');
        $itemName = $value['item'];
        $itemPrice = $value['price'];
        $id = $value['itemId'];
        $db->query("UPDATE item SET item = '$itemName', price='$itemPrice' WHERE id=$id");
        header("Location: index.php");
        // echo "UPDATE item SET item = '$itemName', price='$itemPrice' WHERE id=$id";
    }
    function createItem($value){
        $db = new mysqli('localhost', 'root','','pos_db');
        $itemName = $_POST['item'];
        $itemPrice = $_POST['price'];
        $db->query("INSERT INTO item(item,price) VALUES ('$itemName','$itemPrice')");
        header("Location: index.php");
    }
?>