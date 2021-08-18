<?php 
    require_once('database/database.php');
    $id = $_GET['id'];

    $isDeleted = deleteAbout($id);
    
    if($isDeleted) {
        header('location: index.php?page=coffee_html');
    }