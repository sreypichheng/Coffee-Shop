<?php
    
    function db() {
        return new mysqli('localhost','root','','coffee_shop');
    }

    //create
    function createCoffee($value) {
        $name = $value['name'];
        $price = $value['price'];
        $description = $value['description'];
        $image= $_FILES['file']['name'];
       
        $time = date("Y-m-d")." ".date("h:i:s");
        return db()->query("INSERT INTO `coffee`( `name`, `price`, `description`, `user_id`, `brand_id`, `image`) 
        VALUES ('$name','$price','$description',1,1,'$image')");
    }
     
    
    function selectAllCoffees() {
        return db()->query("SELECT * FROM coffee ORDER BY coffee_id DESC");
    }

      
    function selectOneCoffee($id) {
        return db()->query("SELECT * FROM coffee WHERE coffee_id = $id");
    }
 
   // delete
    function deleteCoffee($id) {
        return db()->query("DELETE FROM coffee WHERE coffee_id = $id");
    }


// Update
    function updateCoffee($value) {
        $name = $value['name'];
        $price = $value['price']; 
        $description= $value['description'];
        $image= $value['image'];
        $id = $value['coffee_id'];
        return db()->query("UPDATE coffee SET name = '$name', price='$price',image='$image', description='$description' WHERE coffee_id = $id");
    }

 
//search
    function searchByname($name){
        $name= $name['search'];
        return db()->query("SELECT * FROM coffee WHERE name LIKE '%$name%'");
    }


    function createUser($value) {
        $fristname = $value['fristname'];
        $lastname = $value['lastname'];
        $email = $value['email'];
        $password= $value['password'];
       
        $time = date("Y-m-d")." ".date("h:i:s");
        return db()->query("INSERT INTO INSERT INTO `user`( `firstname`, `lastname`, `email`, `password`) 
        VALUES ('$fristname','$lastname','$email','$password')");
       
    }
     
    
    function selectAllUsers() {
        return db()->query("SELECT * FROM user ORDER BY user_id DESC");
    }

      
    function selectOneUser($id) {
        return db()->query("SELECT * FROM user WHERE user_id = $id");
    }
 
   // delete
    function deleteUser($id) {
        return db()->query("DELETE FROM user WHERE user_id = $id");
    }