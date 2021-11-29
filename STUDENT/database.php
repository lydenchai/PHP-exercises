<?php

    /**
     * DB Connection
     */
    function db() {
        return new mysqli('localhost', 'root', '', 'final_db');
    }

    /**
     * Select All 
     */
    function selectAll() {
        return db()->query("SELECT * FROM teacher ORDER BY id DESC");
    }

    /**
     * Select One
     */
    function selectOne($id) {
        return db()->query("SELECT * FROM teacher WHERE id = $id");
    }

    /**
     * Create New Record
     */
    function create($value) {
        session_start();
        $name = safeData($value['name']);
        $age = safeData($value['age']);
        $info = safeData($value['info']);
        if(empty($name) or empty($age) or empty($info)){
            $_SESSION['message'] = "Cannot create, all input cannot blank";
            $_SESSION['alert']= "danger";
            header ('Location: https://localhost/student/?page=teacher');
        }else{
            $_SESSION['message'] = "Created";
            $_SESSION['alert'] = "success";
            return db()->query("INSERT INTO teacher (name, age, info) VALUES ('$name', '$age', '$info')");
            header ('Location: https://localhost/student/?page=teacher');
        }
    }

    /**
     * Update record
     */
    function update($value) {
        session_start();
        $name = safeData($value['name']);
        $age = safedata($value['age']);
        $info = safeData($value['info']);
        $id = $value['id'];
        if(empty($name) or empty($age) or empty($info)){
            $_SESSION['message'] = "Cannot update, all input cannot blank";
            $_SESSION['alert']= "danger";
            header ('Location: https://localhost/student/?page=teacher');
        }else{
            $_SESSION['message'] = "Updated Post!";
            $_SESSION['alert'] = "success";
            return db()->query("UPDATE teacher SET name = '$name', age = '$age', info = '$info' WHERE id = $id");        
            header ('Location: https://localhost/student/?page=teacher');
        }

    }

    /**
     * Delete Record
     */

    function delete($id) {
        session_start();
        $_SESSION['message'] = "Deleted Post!";
        $_SESSION['alert'] = "primary";
        return db()->query("DELETE FROM teacher WHERE id = $id");
    }

    /**
     * Safe data
     */
    function safeData($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>  