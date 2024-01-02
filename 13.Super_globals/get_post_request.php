
<!-- PHP-এ Superglobals হলো এমন ভ্যারিয়েবলগুলি যা একটি স্ক্রিপ্ট ফাইল সম্পর্কিত সকল স্কোপে অ্যাক্সেস করতে পারে। এগুলি প্রোগ্রাম বা একটি ফাইলের বাইরে থাকা তথ্যগুলি অ্যাক্সেস করতে ব্যবহৃত হয় এবং প্রোগ্রামের সকল জায়গায় সহজে প্রাপ্ত থাকে।

প্রধান Superglobals এসব:

$GLOBALS: এটি সকল গ্লোবাল ভ্যারিয়েবলগুলির রেফারেন্স প্রদান করে এবং সকল গ্লোবাল ভ্যারিয়েবলের বাইরে একটি ভ্যারিয়েবলে সকল গ্লোবাল ভ্যারিয়েবল একত্রে করতে ব্যবহৃত হয়।

$_SERVER: এটি সার্ভারের প্রয়োজনীয় তথ্য প্রদান করে, যেমন হোস্ট, হেডার, সময় ইত্যাদি।

$_REQUEST: ব্যবহারকারীর HTTP পোস্ট এবং গেট রিকোয়েস্ট ডাটা অ্যাক্সেস করতে ব্যবহৃত হয়।

$_POST: HTTP POST রিকোয়েস্ট ডাটা অ্যাক্সেস করতে ব্যবহৃত হয়।

$_GET: HTTP GET রিকোয়েস্ট ডাটা অ্যাক্সেস করতে ব্যবহৃত হয়।

$_FILES: ফাইল আপলোড করার জন্য ব্যবহৃত হয় এবং ফাইলের প্রপার্টিস প্রদান করে।

$_ENV: সার্ভারের সকল ইভায়রনমেন্ট ভ্যারিয়েবল প্রদান করে।

$_COOKIE: ব্যবহারকারীর কুকি তথ্য প্রদান করে।

$_SESSION: ব্যবহারকারীর সেশন ডাটা প্রদান করে।

এই সুপারগ্লোবালগুলি একটি ফাইলে ডিফাইন করা হয় এবং তাদের যেকোন ফাইলে একসেস করা যায়, যাতে সার্ভার বা একটি অনুরোধের সম্মুখীন থাকতে হয় না। এটি বিশেষভাবে ফর্ম, অনুরোধ প্যারামিটার, কুকি, এবং সেশনের মধ্যে তথ্য পাঠাতে ব্যবহৃত হয়। -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supper Globals</title>
</head>
<body>
    //$_POST || $_GET || $_SERVER
    <form action="receive.php" method="POST"></br>
        <input type="text" name="fName" id="" placeholder="First Name"></br></br>
        <input type="text" name="lName" id="" placeholder="Last Name"></br></br>
        <input type="submit" value="Data Send"></br>
    </form>
</body>
</html>


