<!-- অ্যারে তৈরি করার জন্য array() ফাংশন ব্যবহার করা হয়েছে। অ্যারের প্রতিটি উপাদানের একটি ডিফল্ট নম্বর ইন্ডেক্স আছে, যা 0 থেকে শুরু হয়। -->

<?php

    $fruits = array("apple", "banana", "cherry", "date");

    // অ্যারের শেষে নতুন উপাদান যোগ করতে:
     $fruits[] = "elderberry";

    //  অ্যারের সমস্ত উপাদান প্রিন্ট করা:
    foreach ($fruits as $fruit) {
       echo $fruit . "<br>";
}

$arrLength = count($fruits); // Php array length Deceleration

echo "<ul>";
    for($i=0; $i < $arrLength; $i++){
        echo '<li>' . $fruits[$i] .  '</li>';
    }
echo "</ul>";

?>
