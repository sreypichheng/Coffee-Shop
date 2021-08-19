<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
    <?php
    
            if(isset($_POST['submit'])){
                $filename = $_FILES['file']['name'];
                $filesize = $_FILES['file']['size'];
                $filetype = $_FILES['file']['type'];
                $tmp_name = $_FILES['file']['tmp_name'];
               
               
                $dir = "images/";

                if($filetype != "image/jpeg"){
                    echo "Only JPG images allowed";
                }else{
                    move_uploaded_file($tmp_name,$dir.$filename);
                    
                }
                require_once('database/database.php');
                $isCreated = createCoffee($_POST);
                if($isCreated){
                    header('Location: index.php?page=coffee_html');
                }

            }

?>
        <form action="#" method="post" enctype="multipart/form-data" style="background">
       
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Coffee name" name="name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Coffee Price" name="price">
            </div>
            <div class="form-group">
          <input type="file" name="file" >
            </div>
            <div class="form-group">
                <textarea name="description" id="" cols="30" rows="10" style="width:100%; height:80px"></textarea>
            </div>
            <div class="form-group">
               <input type="submit" name="submit">
            </div>
        </form>
    </div>
<?php require_once('partial/footer.php'); ?>