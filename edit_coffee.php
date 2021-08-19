<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <?php 
            require_once('database/database.php');
            $id = $_GET['id'];

            $coffees = selectOnecoffee($id);
            foreach($coffees as $coffee):
        ?>
        <form action="edit_coffee_model.php" method="post">
            <input type="hidden" class="form-control" value="<?= $coffee['coffee_id'] ?>" name="coffee_id">
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $coffee['name'] ?>" name="name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" value="<?= $coffee['price'] ?>" name="price">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $coffee['description'] ?>" name="description">
            </div>
            <div class="form-group">
                <input type="hidden" value="<?= $coffee['image'] ?> "  name="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>