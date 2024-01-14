
<?php 

    // ============  Heaking Error solving =======================
    // function clean($data){    
    //     $data_a = trim($data);
    //     $data_b = htmlspecialchars($data_a);
    //     $data_c = stripcslashes($data_b);
    //     return $data_c;
    // }


    // if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //     echo $_POST['name'];
    // }

    // if(isset($_POST['dataSend'])){ && $_SERVER['REQUEST_METHOD'] == "POST"

    if(isset($_POST['dataSend'])){

        // $fName = clean($_POST['fName']);

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
               <form action="<?= $_SERVER['PHP_SELF'] ;?>" method="POST">
                    <div class="mb-3 form-floating ">

                        <!-- Fist Name Input -->
                        <div>
                            <label for="fName" class="form-label"> Your Name</label>
                            <input type="text" name="fName" id="" placeholder="Your Name"    
                            class="form-control  <?= isset($errName) ? 'is-invalid' : 
                            'null' ;?> <?= isset($crrName) ? 'is-valid ' : 'null' ;?>" 
                           value = "<?= $fName ?? null ?>">
                            
                            <div class="invalid-feedback"> <?= $errName ?? null ?> </div>
                            <div class="valid-feedback"> <?= $crrName ?? null ?> </div>
                           
                        </div>
                        <!-- Email Input -->
                        <div>
                            <label for="email" class="form-label"> Your Email</label>
                            <input type="text" name="email" id="" placeholder="Your Email"    
                            class="form-control  <?= isset($errEmail) ? 'is-invalid' : 
                            'null' ;?> <?= isset($crrEmail) ? 'is-valid ' : 'null' ;?>" 
                           value = "<?= $email ?? null ?>">
                            
                            <div class="invalid-feedback"> <?= $errEmail ?? null ?> </div>
                            <div class="valid-feedback"> <?= $crrEmail ?? null ?> </div>
                           
                        </div>

                        <input type="submit" name="dataSend" value="Submit" class="btn     
                        btn-success btn-lg mt-3">
                    </div>
                    
                </form>

               
            </div>
        </div>
    </div>




    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>