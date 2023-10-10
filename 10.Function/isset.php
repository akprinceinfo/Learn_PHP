<!-- PHP তে isset() ফাংশন একটি অথবা একাধিক ভেরিয়েবলের অস্তিত্ব পরীক্ষা করে। এটি নির্ধারণ করে দেয় যে একটি ভেরিয়েবল সেট করা হয়েছে এবং তার মান শূন্য নয়।

অর্থাৎ, যদি ভেরিয়েবল সেট করা হয় এবং তার মান null না হয়, তাহলে isset() ফাংশন true রিটার্ন করবে, অন্যথায় এটি false রিটার্ন করবে। -->

<?php

    $a = 10;
    $b ;

    if(isset($a) && isset($b)){
        $result = $a + $b;
        echo $result;               //output =>  Value Not Set
    }else{
        echo " Value Not Set";
    }
?>

<!-- ========================================================= -->

<?php
    $variable = "Hello, World!";

    if(isset($variable)) {
        echo "$variable is set.";
    } else {
        echo "$variable is not set.";
    }
    // এই উদাহরণে আউটপুট হবে: "Hello, World! is set."
?>

<!-- ======================================================= -->

<?php
    $variable = null;

    if(isset($variable)) {
        echo "$variable is set.";
    } else {
        echo "$variable is not set.";
    }
    // এই উদাহরণে আউটপুট হবে: " is not set."
?>



<!-- একাধিক ভেরিয়েবল পরীক্ষা করতে isset() ফাংশন ব্যবহার করতে পারেন: -->

<?php
    $var1 = "Test";
    $var2 = "";

    if(isset($var1, $var2)) {
        echo "Both variables are set.";
    } else {
        echo "One or both variables are not set.";
    }
    // আউটপুট হবে: "Both variables are set."
?>
