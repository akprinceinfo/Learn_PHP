<!-- html_entity_decode() হল একটি PHP ফাংশন যা এইচটিএমএল এন্টিটি গুলিকে তাদের আসল অক্ষরে রূপান্তর করে। অর্থাৎ, এটি এইচটিএমএল এন্টিটি গুলি যেমন &lt;, &gt;, &amp; ইত্যাদি কে যথাযথ অক্ষরে রূপান্তর করে, যেমন <, >, & ইত্যাদি। -->

<?php

  $str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
$strs = "Hello &lt;world&gt;!";

echo html_entity_decode($strs);

echo "<br/>";

echo html_entity_decode($str);

echo "<br/>";echo "<br/>";echo "<br/>";

?>

<!-- htmlspecialchars_decode(); -->

<!-- htmlspecialchars_decode() হল একটি PHP ফাংশন যা htmlspecialchars() ফাংশন দ্বারা কোড করা স্ট্রিংগুলিকে ডিকোড করে। এর অর্থ, এটি এইচটিএমএল স্পেশাল ক্যারেক্টার গুলি যেমন &lt;, &gt;, &amp;, &quot;, এবং &#039; কে যথাযথ অক্ষরে রূপান্তর করে, যেমন <, >, &, ", এবং '। -->



<?php

    // string htmlspecialchars_decode ( string $string [, int $flags = ENT_COMPAT ] )




    $doc = "Thank &lt; You  &gt;!";
    echo htmlspecialchars_decode($doc);



?>