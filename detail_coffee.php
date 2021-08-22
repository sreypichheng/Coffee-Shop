<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
    <div class="container mt-3 p-3">
    <div class="d-flex justify-content-end p-3">
    <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
    </div>
        <?php
            require_once('database/database.php');
            $id = $_GET['id'];
            $coffees= selectOnecoffee($id);
            foreach ($coffees as $coffee):
                
        ?>
        <div class="card">
            <div class="card-body">
               <div class="d-flex">
                    <div class="card" style="width: 12rem;">
                       <img class="card-img-top" src="images/<?=$coffee['image'] ?>">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><?=$coffee['name'] ?></h3>
                        <h6 class="card-text"><?=$coffee['price'] ?>$</h6>
                    
                        <p class="card-text"><?=$coffee['date'] ?></p>
                        <p class="card-text"><?=$coffee['description'] ?></p>
                    </div>  
            </div>
        </div>
        <?php endforeach; ?> 
    </div>
    
<?php require_once('partial/footer.php'); ?>