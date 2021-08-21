<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <?php 
            require_once('database/database.php');
            $id = $_GET['id'];

            $users = selectOneUser($id);
            foreach($users as $user):
        ?>
        <form action="edit_pro_model.php" method="post">
            <input type="hidden" class="form-control" value="<?= $about['about_id'] ?>" name="about_id">
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $about['name'] ?>" name="name">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>