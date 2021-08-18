<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <form action="create_pro_model.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="About Name" name="name">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
    </div>
<?php require_once('partial/footer.php'); ?>