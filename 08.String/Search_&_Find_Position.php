<!-- PHP-তে strpos() ফাংশন ব্যবহার করে আপনি একটি স্ট্রিং ভিতরে অপর একটি স্ট্রিং অবস্থিত কোথায় তা খুঁজে বের করতে পারেন। এটি প্রথম সংঘটিত অবস্থানের সূচী ফেরত পাঠায় (সূচী 0 থেকে শুরু হয়)। যদি স্ট্রিংটি পাওয়া না যায়, তবে এটি false ফেরত পাঠায়। -->

<?php

      $str = "We Love Php. we Learning. Best Country in the World";

      echo strpos($str , 'PhP'). "<br/>"; // not Output
      echo strrpos($str , 'Php'). "<br/>"; //8

      echo stripos($str , 'Best'). "<br/>"; //8
      echo strripos($str , 'Best'). "<br/>"; //8
    
      
?>


<?php
      $haystack = "আমি বাংলা বলি";
      $needle = "বাংলা";

      $position = strpos($haystack, $needle);

      if ($position !== false) {
      echo "স্ট্রিং '{$needle}' পাওয়া গিয়েছে এবং এটির অবস্থান: {$position}";
      } else {
      echo "স্ট্রিং '{$needle}' পাওয়া যায়নি";
      }
?>