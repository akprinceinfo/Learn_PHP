
<?php 
    // if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //     echo $_POST['name'];
    // }

    // if(isset($_POST['dataSend'])){ && $_SERVER['REQUEST_METHOD'] == "POST"

    if(isset($_POST['dataSend'])){
        $fName = $_POST['fName'];
        $email = $_POST['email'];

        if(empty($fName)){
            $errName = "Name is Requierd";
        }elseif(!preg_match("/^[A-Za-z. ]*$/", $fName)){  
            $errName = "Onley Letter and white Space Allowed";
        }else{
            $crrName = "Success";
        }

        if(empty($email)){
            $errEmail = "Email is Requierd";
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
             $errEmail = "Invalid Email Formet";
        }else{
             $crrEmail = "Success";
        }

    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Testing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
     rel="stylesheet" crossorigin="anonymous">
</head>
<body>    
    <div class="container">
        <div class="row  min-vh-100 d-flex">
            <div class="col-md-6 m-auto border rounded shadow border-1">
               

               
            </div>
        </div>
    </div>




    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>