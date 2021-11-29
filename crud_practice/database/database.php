<?php

    function database(){
        return new mysqli('localhost', 'root', '', 'pos');
    }

    function getAllPost(){
        return database()->query("SELECT * FROM post ORDER BY id DESC");
    }

    function getOnePost($id){
        return database()->query("SELECT * FROM post WHERE id = $id");
    }

?>