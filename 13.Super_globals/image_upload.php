<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>

<?php 

        if (isset($_FILES['image'])) {

        #Image Location Check

        echo "<pre>";    
            print_r($_FILES); 
        echo "</pre>";

        echo $fileName = $_FILES['image']['name'] . "/<br>";
        echo $fileType = $_FILES['image']['type'] . "/<br>";
        echo $filetName = $_FILES['image']['tmp_name'] . "/<br>". "/<br>";
        
            move_uploaded_file($filetName,'img/'.$fileName);

        }
    
    ?>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" id=""></br>
        <input type="submit" value="Image Upload">
    </form>

</body>
</html>