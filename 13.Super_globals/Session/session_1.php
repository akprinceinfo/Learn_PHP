
<?php 

    session_start();

    $_SESSION['game'] = 'cricket';
    $_SESSION['game1'] = 'FootBoll';
    

    if(isset($_SESSION['game'])){
        echo "Name is Cricket";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session 1</title>
</head>
<body>
    
</body>
</html>