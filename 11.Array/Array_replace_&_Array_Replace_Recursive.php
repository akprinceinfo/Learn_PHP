


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

<!-- 2. array_replace_recursive()  -->

<!-- array_replace_recursive() ফাংশনটি বহু ডাইমেনশনাল অ্যারে সহ কাজ করে। এটি অ্যারে গুলির উপাদান প্রতিস্থাপন করে, কিন্তু যদি একটি উপাদান অভ্যন্তরীণ অ্যারে হয় তবে এটি পুনরাবৃত্তি সহকারে উপাদান প্রতিস্থাপন করে। -->


 <!-- *** array_replace_recursive এর ক্ষেত্রে Multidimansional Assoctive array রিপ্লেস করতে পারবো । -->


<?php

    $array1 = array('a' => array('apple'), 'b' => array('banana'));
    $array2 = array('a' => array('cherry'), 'b' => array('date', 'fig'), 'c' =>             
    array('mango'));
    $result = array_replace_recursive($array1, $array2);
    print_r($result);


        // OutPut======>>>>
        //  Array
        // (
        //     [a] => Array
        //         (
        //             [0] => cherry
        //         )

        //     [b] => Array
        //         (
        //             [0] => date
        //             [1] => fig
        //         )

        //     [c] => Array
        //         (
        //             [0] => mango
        //         )
        // )





?>