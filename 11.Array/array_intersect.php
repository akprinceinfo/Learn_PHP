
<!-- array_intersect() হলো PHP একটি ফাংশন, যা দুটি অথবা ততোধিক অ্যারের মধ্যে কোন উপাদানগুলি মিলিত আছে তা বের করে এবং তাদেরকে রিটার্ন করে। 

array array_intersect ( array $array1 , array $array2 [, array $... ] )

$array1: এটি হলো প্রথম অ্যারে, যার উপাদানগুলি তুলনা হবে।
$array2: এটি হলো দ্বিতীয় অ্যারে, যার উপাদানগুলি তুলনা হবে।
$...: এটি হলো অতিরিক্ত অ্যারেগুলি, যাদের উপাদানগুলি তুলনা হবে।

-->

<?php
$array1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$array2 = array("e" => "red", "f" => "green", "g" => "purple", "h" => "yellow");

$result = array_intersect($array1, $array2);

print_r($result);
?>

<!-- এই উদাহরণে, array_intersect ফাংশনটি দুটি অ্যারের ("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow") মধ্যে কোন উপাদানগুলি মিলিত আছে তা বের করবে এবং তা রিটার্ন করবে। 

Array
(
    [a] => red
    [b] => green
)


এই ভাবে array_intersect ফাংশনটি দুটি অ্যারের মধ্যে মিলিত উপাদানগুলি বের করতে ব্যবহার হয়।
-->