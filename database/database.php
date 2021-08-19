<?php
    
    function db() {
        return new mysqli('localhost','root','','coffee_shop');
    }

    
    function createCoffee($value) {
        $name = $value['name'];
        $price = $value['price'];
        $description = $value['description'];
        $image= $_FILES['file']['name'];
       
        $time = date("Y-m-d")." ".date("h:i:s");
        return db()->query("INSERT INTO `coffee`( `name`, `price`, `description`, `user_id`, `brand_id`, `image`) 
        VALUES ('$name','$price','$description',1,1,'$image')");
    }
    
    // function createAbout($value) {
    //     $name = $value['name'];
    //     $time = date("Y-m-d")." ".date("h:i:s");
    //     return db()->query("INSERT INTO about(name, date) VALUE('$name', '$time')");
    // }

    
    function selectAllCoffees() {
        return db()->query("SELECT * FROM coffee ORDER BY coffee_id DESC");
    }

   
    // function selectAllAbouts() {
    //     return db()->query("SELECT * FROM about ORDER BY about_id DESC");
    // }
   
    function selectOneCoffee($id) {
        return db()->query("SELECT * FROM coffee WHERE coffee_id = $id");
    }

   
    // function selectOneAbout($id) {
    //     return db()->query("SELECT * FROM about WHERE about_id = $id");
    // }

   // delete
    function deleteCoffee($id) {
        return db()->query("DELETE FROM coffee WHERE coffee_id = $id");
    }

    // function deleteAbout($id) {
    //     return db()->query("DELETE FROM about WHERE about_id = $id");
    // }

// Update
    function updateCoffee($value) {
        $name = $value['name'];
        $price = $value['price']; 
        $description= $value['description'];
        $image= $value['image'];
        $id = $value['coffee_id'];
        return db()->query("UPDATE coffee SET name = '$name', price='$price',image='$image', description='$description' WHERE coffee_id = $id");
    }

    //research
    function getAll(){
        return db()->query("SELECT * FROM coffee ORDER BY id DESC");
    }

    function getOne($id){
        return db()->query("SELECT * FROM coffee WHERE id = $id");
    }

    function searchByname($value){
        $name= $value['search'];
        return db()->query("SELECT * FROM coffee WHERE name LIKE '%$name%'");
    }