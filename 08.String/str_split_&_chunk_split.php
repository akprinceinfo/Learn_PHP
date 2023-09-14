 
<!-- str_split হল একটি PHP ফাংশন যা একটি স্ট্রিংকে দৈর্ঘ্য অনুসারে একটি অ্যারেতে বিভক্ত করে। -->

<?php

    // $data = "The user is then prompted to enter the values";

    // $arr = str_split($data);

    // echo "<pre>";
    //     print_r($arr);
    // echo "</pre>";

    // ============02 Exampul==============
    $string = "abcdef";
    $array = str_split($string, 2);
    print_r($array); //Array ( [0] => ab [1] => cd [2] => ef ) 
    echo("<br/>");
    echo("<br/>");
    echo("<br/>");


?>

<!-- chunk_split হল একটি PHP ফাংশন যা একটি স্ট্রিংকে ছোট ছোট খণ্ডে বিভক্ত করে এবং অক্ষরগুলির একটি স্ট্রিংকে আরও পাঠযোগ্য করতে ব্যবহার করা যেতে পারে। -->

<?php

    $data = "abcdef";
    echo chunk_split($data, 2, "|"); //ab|cd|ef| 



?>


