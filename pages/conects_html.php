<?php require_once('partial/header.php'); ?>
    <div class="container p-4" style="background: ">
       
            <form action="create_action.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="username" name="username">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="password" name="password">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="email" name="email">
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" placeholder="your profile" name="img">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
    </div>
<?php require_once('partial/footer.php'); ?>
