<?php 

    session_start();
   session_destroy();
    
    echo $_SESSION['fullName'];
    echo $_SESSION['game'];


?>