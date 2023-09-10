

<?php

     $str = "We Are love Country";

    // echo strlen($str); // 19
     //echo str_word_count($str); // 4


     // word to convat String.
     $strArray = "We Are love Country. Hello How Are You ?";
    //  echo '<pre>';
    //     print_r(str_word_count($strArray , 1));
    //  echo '</pre>';

    // String data ta Same words Scerch ...
    echo substr_count($strArray, 'Are');


?>