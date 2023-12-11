<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">

        <input type="file" name="image" id="">
        <input type="submit" value="submit">

    </form>

    <?php

        if(isset($_FILES['image'])){
            echo "<pre>";
                print_r($_FILES);
            echo "</pre>";
        }
    
    ?>


</body>
</html>