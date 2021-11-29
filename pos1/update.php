<?php
require_once ('model.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    updateItem($_POST);

}