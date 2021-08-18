<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <form action="create_coffee_model.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Coffee name" name="name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Coffee Price" name="price">
            </div>
            <div class="form-group">
          <input type="file">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Coffee description" name="description">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
    </div>
<?php require_once('partial/footer.php'); ?>