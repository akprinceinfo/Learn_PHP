

<!-- PHP-তে array_merge() এবং array_combine() ফাংশন  -->

 <!-- এক বা একাধিক অ্যারেকে একটি অ্যারেতে Convert করা। -->


<!-- array_merge() -->

<!-- এই ফাংশনটি দ্বৈতীয় অ্যারে প্রথম অ্যারের সাথে মার্জ করে। এটি যদি কোন কী উপর কনফ্লিক্ট করে, তাদিকে প্রথম অ্যারের কী তার মান দ্বিতীয় অ্যারের মান দ্বারা প্রতিস্থাপিত হবে।



উদাহরণ: -->

<?php

    $array1 = array( "Apple", "banana","Coconut");
    $array2 = array( "grape", "orange", "banana");
    $array3 = array("F-Number" => 50, "S-Number" =>20, "L-Number" =>30);
    $array4 = array("F-Number" => 50, "Se-Number" =>20, "L-Number" =>30);
    $result = array_merge( $array1, $array2, $array3 );
    $result = array_merge_recursive( $array1, $array2, $array3,$array4 );

    echo "<pre>";
        print_r($result);
    echo "</pre>";

    // আবার জখন Array ইনডেক্স এর মান যদি একই হয় তখন array_marge_recursive ব্যবহার করলে সকল মান পাওয়া যায় ।


    //----------OutPut-------------
    //  Array
    // (
    //     [0] => Apple
    //     [1] => banana
    //     [2] => Coconut
    //     [3] => grape
    //     [4] => orange
    //     [5] => banana
    //     [F-Number] => 50
    //     [S-Number] => 20
    //     [L-Number] => 30
    // )

?>



<!-- 2. array_combine() -->

<!-- array_combine() ফাংশনটি প্রথম অ্যারেকে কী হিসেবে এবং দ্বিতীয় অ্যারেকে মান হিসেবে ব্যবহার করে একটি নতুন অ্যারে তৈরি করে। দুটি অ্যারের আকারও সমান হতে হবে। -->

<?php

    // $keys = array("a", "b", "c");
    // $values = array("apple", "banana", "cherry");
    // $result = array_combine($keys, $values);
    // print_r($result);




    // Array
    // (
    //     [a] => apple
    //     [b] => banana
    //     [c] => cherry
    // )






?>