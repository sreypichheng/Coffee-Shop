<?php 
    include_once("partial/header.php");
    include_once("partial/navbar.php");
    if(isset($_GET['page'])){
        if($_GET['page'] == "home"){
            include_once('pages/home_html.php');
        }elseif($_GET['page'] == 'coffee_html'){
            include_once('pages/coffee_html.php');
        }elseif ($_GET['page'] == "about_html"){
            include_once('pages/about_html.php');
        }elseif($_GET['page'] == "conects_html"){
            include_once('pages/conects_html.php');
        }elseif($_GET['page']== "user_html"){
            include_once('pages/user_html.php');
        }   
    }else {
        include_once('pages/home_html.php');
    }

    include_once("partial/footer.php");