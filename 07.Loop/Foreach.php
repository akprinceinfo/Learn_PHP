
<!-- foreach হলো PHP এর একটি লুপ স্টেটমেন্ট, যা একটি অ্যারে অথবা অবজেক্টের সমস্ত মৌলিক উপাদানের জন্য একটি কোড ব্লক অনুমোদন করে। এটি প্রতি উপাদানে একবার চলতে থাকে এবং লুপের প্রতিটি ইটারেশনে বর্তমান উপাদানের জন্য বর্ণিত কোড ব্লকটি একে অপরের পরে চলে যায়। -->

<?php 
     
    $numbers = array(1, 2, 3, 4, 5);

    foreach ($numbers as $value) {
        echo $value . "\n";
    }

?>

<!-- উপরের উদাহরণে, foreach লুপটি অ্যারে $numbers এর প্রতিটি উপাদানের জন্য একটি ইটারেশন করছে এবং প্রতিটি উপাদানকে একটি ভ্যারিয়েবল $value এ অ্যাসাইন করে। প্রতিটি ইটারেশনে, একটি নতুন লাইনে বর্তমান উপাদানটি প্রিন্ট করা হচ্ছে। -->

<?php 

    $person = array("name" => "John", "age" => 30, "city" => "New York");

    foreach ($person as $key => $value) {
        echo $key . ": " . $value . "\n";
    }


?>

<!-- উপরের উদাহরণে, আমরা foreach ব্যবহার করে অ্যারে $person এর জন্য একটি ইটারেশন করছি এবং প্রতিটি উপাদান ও তার মানের জন্য একটি ভ্যারিয়েবল $key এবং $value এ অ্যাসাইন করছি। একটি নতুন লাইনে প্রতিটি উপাদান এবং তার মান প্রিন্ট করা হচ্ছে। -->

<!-- বিশেষ গুলি:
1. continue এবং break:
foreach লুপের মধ্যে continue এবং break ব্যবহার করা যায় তাদের মধ্যে যেটির কারণে আপনি লুপ থেকে বাইরে যেতে চাচ্ছেন। -->

<?php 
    $numbers = array(1, 2, 3, 4, 5);

    foreach ($numbers as $value) {
        if ($value == 3) {
            continue; // Skip the current iteration
        }

        echo $value . "\n";

        if ($value == 4) {
            break; // Exit the loop
        }
    }

?>

<!-- উপরের উদাহরণে, যখন $value এর মান 3 হয়, তখন continue স্টেটমেন্ট দ্বারা এই ইটারেশনটি স্কিপ হবে এবং যখন মান 4 হয়, তখন break স্টেটমেন্ট দ্বারা লুপটি থেকে বাইরে চলে যাবে।

2. foreach এবং মাল্টিডাইমেনশনাল অ্যারে:
একটি মাল্টিডাইমেনশনাল অ্যারেও foreach ব্যবহার করে ইটারেট করা যায়। এটি প্রতি উপযুক্ত উপাদানের জন্য একটি জোড়া ভ্যারিয়েবল ব্যবহার করে। -->

<?php 

    $matrix = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    foreach ($matrix as $row) {
        foreach ($row as $value) {
            echo $value . " ";
        }
        echo "\n";
    }

?>

<!-- উপরের উদাহরণে, $matrix একটি মাল্টিডাইমেনশনাল অ্যারে, এবং foreach ব্যবহার করে আমরা প্রতি সারি এবং প্রতি উপাদানের জন্য একটি ইটারেশন চালাচ্ছি।

এইভাবে, foreach লুপটি অ্যারে এবং অবজেক্ট মডিউলগুলির সঙ্গে একটি সহজ এবং ব্যবহারকারী-মিত্রপক্ষ ইটারেশন সরবরাহ করে, এটি প্রোগ্রামিং ভাষা বা ডেটা স্ট্রাকচারের সাথে সম্পর্কিত একটি গুরুত্বপূর্ণ ফিচার। -->