
<!-- 
H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm) -->


<?php
    echo "The time is " . date("h:i:sa");
?>

<!-- Output:
    The time is 05:08:19pm
-->


<!-- দেশে বা একটি ভিন্ন টাইমজোনের জন্য সেট আপ 

=> date_default_timezone_set

-->


<?php
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa");
?>


// Output :  The time is 12:10:12pm