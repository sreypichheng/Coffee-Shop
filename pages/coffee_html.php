
<div class="container" >
<div class="container p-4">
        <div class="d-flex justify-content-end p-2">
            <a href="create_coffee.php" class="btn btn-primary">Add Coffee +</a>
        </div>
        <form action="" method="post">
           <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search by COFFEE" name = "search">
              <div class="input-group-append">
                <button class="btn btn-warning" type="submit">Search</button>
              </div>
           </div>
        </form>


        
<?php
    require_once('database/database.php');
    $coffees="";
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        //search
        $coffees = searchByname($_POST);
    }else{
        //select
        $coffees = selectAllCoffees();

    }

    
   
    foreach($coffees as $coffee):
    ?>
    <div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
<img src="images/<?=$coffee['image'];?>" alt=" " style="width:100%; height:300px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $coffee['name']; ?></h5>
        <p class="card-text"><?=$coffee['price'];?>$</p>
        <p class="card-text"><?=$coffee['description'];?></p>
        <p class="card-text"><small class="text-muted"><?=$coffee['date'];?></small></p>
        <a href="edit_coffee.php?id=<?= $coffee['coffee_id'] ?>" class="btn btn-primary btn-sm mr-2">Edit</a>
        <a href="delet_coffee.php?id=<?= $coffee['coffee_id'] ?>" class="btn btn-danger btn-sm">delete</i></a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
</div>





