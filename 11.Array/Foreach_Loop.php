
<!-- PHP-তে foreach লুপ বিশেষভাবে অ্যারেগুলির সাথে কাজ করার জন্য তৈরি করা হয়েছে। এটি অ্যারের প্রত্যেকটি উপাদানের জন্য কোড ব্যবহার করার জন্য একটি সহজ উপায় প্রদান করে।

সাধারণ অ্যারে জন্য: -->

 <?php
    
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $color) {
        echo "$color <br>";
    }

    //OutPut
    //red
    //green
    //blue
    //yellow

 
 ?>



<!-- অ্যাসোসিয়েটিভ অ্যারে জন্য:
অ্যাসোসিয়েটিভ অ্যারের জন্য, আপনি কি (key) এবং মান (value) দুটির উপর ইটারেট করতে পারেন: -->

<?php

    $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

    foreach($age as $name => $ageValue) {
        echo "$name is $ageValue years old. <br>";
    }

    //Output
    // Peter is 35 years old.
    // Ben is 37 years old.
    // Joe is 43 years old.


?>