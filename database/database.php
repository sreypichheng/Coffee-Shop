<?php
    
    function db() {
        return new mysqli('localhost','root','','coffee_shop');
    }

    
    function createCoffee($value) {
        $name = $value['name'];
        $price = $value['price'];
        $description = $value['description'];
        $time = date("Y-m-d")." ".date("h:i:s");
        return db()->query("INSERT INTO coffee(name, price,description, date) VALUE('$name','$price','$descrpition','$time')");
    }
    
    function createAbout($value) {
        $name = $value['name'];
        $time = date("Y-m-d")." ".date("h:i:s");
        return db()->query("INSERT INTO about(name, date) VALUE('$name', '$time')");
    }

    
    function selectAllCoffees() {
        return db()->query("SELECT * FROM coffee ORDER BY coffee_id DESC");
    }

   
    function selectAllAbouts() {
        return db()->query("SELECT * FROM about ORDER BY about_id DESC");
    }
   
    function selectOneCoffee($id) {
        return db()->query("SELECT * FROM coffee WHERE coffee_id = $id");
    }

   
    function selectOneAbout($id) {
        return db()->query("SELECT * FROM about WHERE about_id = $id");
    }

   
    function deleteCoffee($id) {
        return db()->query("DELETE FROM coffee WHERE coffee_id = $id");
    }

    function deleteAbout($id) {
        return db()->query("DELETE FROM about WHERE about_id = $id");
    }


    function updateCoffee($value) {
        $name = $value['name'];
        $price = $value['price'];
        $id = $value['coffee_id'];
        return db()->query("UPDATE coffee SET title = '$name', price='$price' WHERE coffee_id = $id");
    }

    
    function updateAbout($value) {
        $name = $value['name'];
        $id = $value['about_id'];
        return db()->query("UPDATE about SET name = '$name' WHERE about_id = $id");
    }