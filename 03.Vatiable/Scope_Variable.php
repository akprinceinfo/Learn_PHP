
<!-- 
 local- ফাংশনের ভেতরের ভ্যারিয়েবল।
 global- ফাংশনের বাহিরের ভ্যারিয়েবল।
 static-ফাংশনের কাজ শেষেও ভ্যারিয়েবল মুছে যায় না।
-->


<?php




    $age = 30; // Global Variable

    function check(){
        $age = 20; // Local variable
        echo $age . "<br/>";

    }
    check();
    echo $age;
 ?> 


  <!-- Global Variable  -->

  
    


?>

