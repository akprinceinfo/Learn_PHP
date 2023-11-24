<!-- array_diff_key হলো PHP একটি ফাংশন, যা দুটি অথবা ততোধিক অ্যারের ইনডেক্স গুলির মধ্যে কোন ইনডেক্স মিলিত নাই সেগুলি বের করে তা রিটার্ন করে। 

array array_diff_key ( array $array1 , array $array2 [, array $... ] )

$array1: এটি হলো প্রথম অ্যারে, যার ইনডেক্সগুলি তুলনা হবে।
$array2: এটি হলো দ্বিতীয় অ্যারে, যার ইনডেক্সগুলি তুলনা হবে।
$...: এটি হলো অতিরিক্ত অ্যারেগুলি, যাদের ইনডেক্সগুলি তুলনা হবে।

== array_diff_key হলো মেইন অ্যারে  রিপিট বা ব্যবহার করা হয়েছে কিনা চেক করে ====
-->

<?php
$array1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$array2 = array("a" => "red", "i" => "green", "c" => "purple");
$array3 = array("a" => "apple", "b" => "Banana","z" => "aa");

$result = array_diff_key( $array3,$array1,$array2 );

print_r($result);
?>


<!-- (
    [z] => aa
) -->

