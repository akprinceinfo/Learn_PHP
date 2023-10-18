<!-- PHP-তে অ্যারে সর্ট করতে অনেকগুলি বিল্ট-ইন ফাংশন রয়েছে। একেকটি ফাংশনের উদ্দেশ্য এবং কার্যকারিতা নিচে উল্লেখ করা হল: -->

<!-- sort(): অ্যারেটি আরোহী (ascending) ক্রমে সর্ট করে। -->

<?php

    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);
    print_r($numbers);  // Outputs: 2, 4, 6, 11, 22

?>


<!-- rsort(): অ্যারেটি অবরোহী (descending) ক্রমে সর্ট করে। -->

<?php

    $numbers = array(4, 6, 2, 22, 11);
    rsort($numbers);
    print_r($numbers);  // Outputs: 22, 11, 6, 4, 2

?>