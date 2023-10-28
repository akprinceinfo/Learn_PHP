


<!-- 1. array_replace()
array_replace() ফাংশনটি প্রথম অ্যারের উপাদানগুলি পরবর্তী অ্যারে(গুলি)র উপাদানগুলি দ্বারা প্রতিস্থাপিত করে। যদি কোন একটি কী পরবর্তী অ্যারেতে না থাকে, তাদিকে প্রথম অ্যারের উপাদানটি সংরক্ষিত থাকে। -->

 <!-- *** array_replace() এর ক্ষেত্রে index/ Associtive Array রিপ্লেস করতে পারবো । -->

<?php

    $array1 = array("a" => "apple", "banana");
    $array2 = array("a" => "cherry", "b" => "date", "c" => "mango");
    $result = array_replace($array1, $array2);
    print_r($result);


    // OutPut======>>>>
    // Array
    // (
    //     [a] => cherry
    //     [0] => date
    //     [c] => mango
    // )


?>


<!-- ============================================================ -->

