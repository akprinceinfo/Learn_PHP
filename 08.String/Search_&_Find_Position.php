

<?php

      $str = "We Love Php. we Learning. Best Country in the World";

      echo strpos($str , 'PhP'). "<br/>"; // not Output
      echo strrpos($str , 'Php'). "<br/>"; //8

      echo stripos($str , 'Best'). "<br/>"; //8
      echo strripos($str , 'Best'). "<br/>"; //8
    
      
?>