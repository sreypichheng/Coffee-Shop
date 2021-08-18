<?php
    require_once('database/database.php');

    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $isCreated = createCoffee($_POST);

        if($isCreated){
            header('Location: index.php?page=coffee_html');
        }
    }