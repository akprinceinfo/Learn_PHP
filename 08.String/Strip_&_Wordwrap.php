

<!-- PHP-তে strip_tags() ফাংশন স্ট্রিং থেকে HTML এবং PHP ট্যাগ গুলি অপসারণ করতে ব্যবহার করা হয়। এটি অনেক সময় ব্যবহার করা হয় যখন আপনি ওয়েব ফর্ম থেকে ইউজার ইনপুট নেওয়ার সময় অনিচ্ছিক HTML বা PHP কোড প্রবেশ করার ঝুঁকি থেকে নিরাপদ থাকতে চান। -->

<!-- PHP-তে wordwrap() ফাংশন ব্যবহার করে একটি স্ট্রিং নির্দিষ্ট প্রস্থে ভাঙ্গানো যায়। আপনি নির্দিষ্ট প্রস্থের পর কোথায় স্ট্রিংটি ভাঙ্গানো হবে তা নির্ধারণ করতে পারেন। -->

<?php

    $str = "<p>We Love Php <b>Very</b> <u>Check</u> <i>Much</i></p>"; 
    
    //echo strip_tags($str); // html Tag Remover
    //echo strip_tags($str,'u' ); // html Tag Remover
    //echo $str;

    //Wrap a string into new lines when it reaches a specific length:

    $str = "Wrap a string into new lines when it reaches a specific length";
    echo wordwrap($str, 15, "<br/>\n");

?>