<?php

    $str = "We Love Our Country. Best Country in this World";

    //String Data Change
    //echo str_replace("Country" , "city", $str)

    // $find = ["Our", "Country" , "Best"];
    // $replace = ["My", "City" , "Asesome"];

    // echo str_replace($find,$replace, $str)

    //echo substr_replace($str, " Love", 1,-1); //W Loved

    echo strtr($str, "We", "Uc"); //Uc Lovc Our Country. Bcst Country in this Uorld

?>

