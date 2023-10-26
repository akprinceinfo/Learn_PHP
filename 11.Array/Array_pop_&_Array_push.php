

<!-- 1. array_pop()
array_pop() ফাংশনটি একটি অ্যারের শেষের উপাদানটি অপসারণ করে এবং অপসারণ করা উপাদানটি ফেরত দেয়। অতএব, এটি অ্যারে থেকে শেষের উপাদানটি সরানোর জন্য ব্যবহার করা হয়। -->


<?php

    $fruits = array("apple", "banana", "cherry");
    $last_fruit = array_pop($fruits);
    echo $last_fruit;  // আউটপুট: cherry

    echo "<br/>";

    $array = [1, 2, 3, 4, 5];
    $lastElement = array_pop($array); // $lastElement will be 5
    print_r($array);     // [1, 2, 3, 4]

    echo "<br/>";echo "<br/>";echo "<br/>";
?>

<!-- 2. array_push()
array_push() ফাংশনটি এক বা একাধিক উপাদান একটি অ্যারের শেষে যোগ করে। এটি অ্যারেতে নতুন উপাদান যোগ করার জন্য ব্যবহার করা হয়। -->

<?php

    $fruits = array("apple", "banana");
    array_push($fruits, "cherry", "date");
    print_r($fruits);

    // Array
    // (
    //     [0] => apple
    //     [1] => banana
    //     [2] => cherry
    //     [3] => date
    // )

?>

<!-- আসলে, array_push() ব্যবহার না করে আপনি সরাসরি PHP অ্যারে সিনট্যাক্স ব্যবহার করেও একই কাজ করতে পারেন, যেমন: -->

<?php
    $fruits[] = "grape";
?>