<?php
/**
 * Connect to database
 */
function db() {
    return new mysqli('localhost', 'root', '', 'crud_homework');
}

/**
 * Create new student record
 */
function createStudent($value) {
    $name = $value['name'];
    $age = $value['age'];
    $email = $value['email'];
    $image_url = $value['image_url'];
    return db()->query("INSERT INTO student (name, age, email, profile) VALUES ('$name', '$age', '$email', '$image_url')");
}

/**
 * Get all data from table student
 */
function selectAllStudents() {
    return db()->query("SELECT * FROM student GROUP BY name DESC");
}

/**
 * Get only one on record by id 
 */
function selectOnestudent($id) {
    return db()->query("SELECT * FROM student WHERE id=$id");

}

/**
 * Delete student by id
 */
function deleteStudent($id) {
    return db()->query("DELETE FROM student WHERE id = $id");

}

/**
 * Update students
 */
function updateStudent($value) {
    $name = $value['name'];
    $age = $value['age'];
    $email = $value['email'];
    $image_url = $value['image_url'];
    $id = $value['id'];
    return db()->query("UPDATE student SET name = '$name', age = '$age', email = '$email', profile = '$image_url' WHERE id = $id");        
}
