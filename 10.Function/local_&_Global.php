<?php

    //Local Variable
    function local(){
        $first = 10;
        echo "This Variable Is : $first";
    }
    local();


    // global variable 
        $secend = 20 ;
    function globals (){
        global $secend;
        echo $secend;
    }

    globals();


?>