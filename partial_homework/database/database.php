<?php

function datababse() {
    return new mysqli('localhost', 'root', '', 'homework_db');
}

function getBookData() {
    return datababse()->query("SELECT * FROM book");
}

function getProgramingData() {
    return datababse()->query("SELECT * FROM programming");
}

function createBook($value) {
    $title = $value['title'];
    $price = $value['price'];
    return datababse()->query("INSERT INTO book (title, price) VALUES ('$title', '$price')");
}
function createSubject($value){
    $name = $value['name'];
    return datababse()->query("INSERT INTO programming (name) VALUES ('$name')");

}

function selectOneBook($id) {
    return datababse()->query("SELECT * FROM book WHERE book_id = $id");
}

function deleteBook($id) {
    return datababse()->query("DELETE FROM book WHERE book_id = $id");
}

function selectOneSubject($id) {
    return datababse()->query("SELECT * FROM programming WHERE pro_id = $id");
}

function deleteSubject($id) {
    return datababse()->query("DELETE FROM programming WHERE pro_id = $id");
}

function updateBook($value) {
    $title = $value['title'];
    $price = $value['price'];
    $id = $value['id'];
    return datababse()->query("UPDATE book SET title = '$title', price = '$price' WHERE book_id = $id");        
}

function updateSubject($value){
    $name = $value['name'];
    $id = $value['id'];
    return datababse()->query("UPDATE programming SET name = '$name' WHERE pro_id = $id");        
}