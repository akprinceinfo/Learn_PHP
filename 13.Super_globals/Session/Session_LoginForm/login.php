


<?php

    session_start();

    if($_POST['email'] == "abc@gmail.com" && $_POST['pass']=="123"){
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['pass'] = $_POST['pass'];


        echo 'welcome your is ' . $_SESSION['email'] . ' and password is ' . $_SESSION['pass'];
    }else{
        echo "not match";
    }



?>