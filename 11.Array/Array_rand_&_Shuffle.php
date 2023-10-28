<!-- 
1. array_rand()
array_rand() ফাংশনটি এক অথবা একাধিক এলিমেন্টের কী অ্যারে থেকে একধরনের এলিমেন্ট প্রাপ্ত করতে সাহায্য করে। -->

<?php

    $fruits = array("apple", "banana", "cherry", "date");
    $random_key = array_rand($fruits);
    echo $fruits[$random_key];  // আউটপুট যেকোনো একটি ফল হতে পারে

     echo "<br/>";echo "<br/>";echo "<br/>";

?>

    <!-- একাধিক এলিমেন্ট কী পেতে চান: -->

    <?php

        $keys = array_rand($fruits, 2);
        echo $fruits[$keys[0]] . " and " . $fruits[$keys[1]];  // আউটপুট যেকোনো দুটি ফল হতে পারে

        echo "<br/>";echo "<br/>";echo "<br/>";
    ?>




<!-- ================================================================== -->


<!-- 2. shuffle()
shuffle() ফাংশনটি একটি অ্যারের এলিমেন্টগুলির ক্রম অদলবদল করে। এটি অ্যারেটি সরাসরি পরিবর্তন করে, তাই এটি কোনো মান ফেরত দেয় না। -->


<?php

    $fruits = array("apple", "banana", "cherry", "date");
    shuffle($fruits);
    print_r($fruits);  // আউটপুট অ্যারের এলিমেন্টগুলির একটি এলোমেলো ক্রম হতে পারে


?>