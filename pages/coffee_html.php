<div class="container">
<div class="container p-4">
        <div class="d-flex justify-content-end p-2">
            <a href="create_coffee.php" class="btn btn-primary">Add +</a>
        </div>
<?php
    require_once('database/database.php');
    $coffees = selectAllcoffees();
    foreach($coffees as $coffee):
    ?>
    <div class="card m-2">
        <div class="card-body">
            <div class="d-flex">
                <div class="info">
                    <h1 class="display-4"><?= $coffee['name']?></h1>
                    <strong><?= $coffee['price']?></strong> <br>
                    <a href="edit_coffee.php?id=<?= $coffee['coffee_id'] ?>" class="btn btn-primary btn-sm mr-2">Edit</a>
                    <a href="delet_coffee.php?id=<?= $coffee['coffee_id'] ?>" class="btn btn-danger btn-sm">X</i></a>
                </div>
            </div>
            <div class="action d-flex justify-content-end">
                <p><?= $coffee['date']?></p>
                
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>



