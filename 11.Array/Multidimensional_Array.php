
<!-- PHP-তে মাল্টিডাইমেনশনাল অ্যারে (Multidimensional Array) মূলত একটি অ্যারে যার মধ্যে অন্য অ্যারেগুলি থাকে। এটি অ্যারে ভিতর অ্যারে বা অ্যারের অ্যারে অ্যারে সহ অনেকগুলি স্তরের ডেটা সংরক্ষণ করতে পারে। -->

<?php
    $students = array(
    array("name" => "Rahim", "grade" => 85, "subject" => "Math"),
    array("name" => "Karim", "grade" => 90, "subject" => "Physics"),
    array("name" => "Salam", "grade" => 78, "subject" => "Chemistry")
);

// এখানে $students হল একটি মাল্টিডাইমেনশনাল অ্যারে যার মধ্যে প্রতিটি উপ-অ্যারে একটি ছাত্রের তথ্য ধারণ করে।

?>

 <!-- এই অ্যারে থেকে ডেটা অ্যাক্সেস করার জন্য: -->

 <?php
    echo $students[0]["name"] . "<br/>"; // Outputs: Rahim
    echo $students[1]["subject"]; // Outputs: Physics
 ?>

 <!-- মাল্টিডাইমেনশনাল অ্যারে নিয়ে কাজ করার সময় foreach লুপ অনেক সময় কার্যকরী হয়: -->

 <?php
    foreach ($students as $student) {
        echo "Name: " . $student["name"] . ", Grade: " . $student["grade"] . ", Subject: " . 
        $student["subject"] .  "<br>";
    }

 ?>


<!-- ======================Use to For Loop =============================== -->

<?php

    $infos = array(
        array(1, 'John 1', 'Bangla',67),
        array(2, 'John 2', 'Englsh',87),
        array(3, 'John 3', 'Math',57),
        array(4, 'John 4', 'Bangla 2',77),
    );

    echo "<table style='border: 1px solid black'> <tr><th>Id</th><th>Name</th><th>Subject</th></tr>";

        for ($row=0; $row<4; $row++){
            echo "<tr>";
                for($col = 0; $col < 3; $col++){
                    echo '<td>' . $infos[$row][$col] .'</td>';
                }
            echo "</tr>";
        }
    echo "</table>";

?>