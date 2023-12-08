<!-- $_SERVER: এটি সার্ভারের প্রয়োজনীয় তথ্য প্রদান করে, যেমন হোস্ট, হেডার, সময় ইত্যাদি। -->
<?php
    echo $_SERVER['PHP_SELF']; //বর্তমানে নির্বাহিত স্ক্রিপ্টের ফাইলের নাম প্রদান করে
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supper Globals</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"></br>
        <input type="text" name="fName" id="" placeholder="First Name"></br></br>
        <input type="text" name="lName" id="" placeholder="Last Name"></br></br>
        <input type="submit" value="Data Send" name="submit"></br>
    </form>


   <?php
         if(isset($_POST['submit'])){
            echo $_POST['fName'];
         }
   ?>



</body>
</html>