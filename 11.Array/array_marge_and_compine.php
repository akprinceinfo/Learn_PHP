

<!-- PHP-তে array_merge() এবং array_combine() ফাংশন  -->

<!-- array_merge() -->

<!-- এই ফাংশনটি দ্বৈতীয় অ্যারে প্রথম অ্যারের সাথে মার্জ করে। এটি যদি কোন কী উপর কনফ্লিক্ট করে, তাদিকে প্রথম অ্যারের কী তার মান দ্বিতীয় অ্যারের মান দ্বারা প্রতিস্থাপিত হবে।

উদাহরণ: -->

<?php
    $array1 = array("a" => "apple", "banana");
    $array2 = array("a" => "grape", "orange", "banana");
    $result = array_merge($array1, $array2);
    print_r($result);


    //----------OutPut-------------
//     Array
// (
//     [a] => grape
//     [0] => banana
//     [1] => orange
//     [2] => banana
// )

?>




