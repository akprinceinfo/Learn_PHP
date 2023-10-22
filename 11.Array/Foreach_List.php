
<!-- foreach পিএইচপি-তে অ্যারে উপর পুনরাবৃত্তি করতে ব্যবহৃত লুপ হয়। -->

<?php
    foreach ($array as $value) {
    // কোড;
    }

// ===================
foreach ($array as $key => $value) {
    // কোড;
}

?>

<?php

    $fruits = array("আপেল", "কলা", "আঙ্গুর");

    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }


?>

<!-- সাধারণ অ্যারে উদাহরণ: -->

<?php

    $fruits = array("আপেল", "কলা", "আঙ্গুর");

    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }

    //আপেল
    //কলা
    //আঙ্গুর

?>


<!-- অ্যাসোসিয়েটিভ অ্যারে উদাহরণ: -->

    <?php
        $persons = array("রহিম" => "৩০", "করিম" => "২৫", "জালাল" => "৩৫");

    foreach ($persons as $name => $age) {
        echo "$name এর বয়স $age বছর।<br>";
    }

    //রহিম এর বয়স ৩০ বছর।
    //করিম এর বয়স ২৫ বছর।
    //জালাল এর বয়স ৩৫ বছর।
?>





<!-- আপনি যদি PHP-তে foreach লুপ ব্যবহার করে একটি তালিকা তৈরি করতে চান এবং প্রতিটি উপাদানের জন্য বিস্তারিত তথ্য প্রদর্শন করতে চান, আপনি অ্যাসোসিয়েটিভ অ্যারে ব্যবহার করতে পারেন।

ধরুন, আপনি একটি প্রোডাক্ট লিস্ট তৈরি করতে চান যেখানে প্রতিটি প্রোডাক্টের নাম এবং মূল্য রয়েছে।
-->

<?php
    $products = array(
        array('name' => 'Laptop', 'price' => '1000$'),
        array('name' => 'Mobile', 'price' => '500$'),
        array('name' => 'Headphones', 'price' => '100$')
    );

?>

<!-- আপনি এখন foreach লুপ ব্যবহার করে এই তথ্য প্রদর্শন করতে পারেন: -->

    <?php
    
        echo "<ul>";
            foreach ($products as $product) {
                echo "<li>";
                echo "Product Name: " . $product['name'] . "<br>";
                echo "Price: " . $product['price'];
                echo "</li>";
            }
            echo "</ul>";

    ?>