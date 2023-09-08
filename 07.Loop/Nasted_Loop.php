

<!-- =================Nasted_Loop.php================== -->

<?php

    // echo "<ul>";   
    // for($headerLIst = 1; $headerLIst <= 3 ; $headerLIst++){
    //     echo "List => $headerLIst hrader" . "<br/>";
        
    //     for($innter_list = 1; $innter_list<=2; $innter_list++){
    //         echo "-------List => $innter_list Child ". "<br/>";

    //     }
    // }
    // echo "</ul>";

    for($a = 1; $a <= 150; $a = $a + 10){
        for($b = $a; $b < $a + 10; $b++){
            echo $b . " ";
        }
        echo "<br/>";
    }



?>