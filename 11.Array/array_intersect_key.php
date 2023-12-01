
<!-- array_intersect_key() হলো PHP একটি ফাংশন, যা দুটি অথবা ততোধিক অ্যারের মধ্যে কোন ইনডেক্স মিলিত আছে তা বের করে এবং তাদেরকে রিটার্ন করে। এই ফাংশনটি ইনডেক্সের তুলনায় মিলিত উপাদানগুলি বের করতে ব্যবহার হয়। 

array array_intersect_key ( array $array1 , array $array2 [, array $... ] )

-->


<?php
    $a1=array("a"=>"red","b"=>"green","c"=>"blue");
    $a2=array("a"=>"red","c"=>"blue","d"=>"pink");

    $result=array_intersect_key($a1,$a2);
    print_r($result);
?>


<!-- 
Output: 

Array ( [a] => red [c] => blue )

এই ভাবে array_intersect_key ফাংশনটি ইনডেক্সের তুলনায় মিলিত উপাদানগুলি বের করতে ব্যবহার হয়।

-->