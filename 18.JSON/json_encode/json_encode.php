<?php 
    $conn = mysqli_connect('localhost','root','','crud') or die(mysqli_error());

    $sql = "SELECT * FROM products";
    $query = mysqli_query($conn,$sql);

    $jsonArrayConvaet = [];

    while($row = mysqli_fetch_assoc($query)){
         $jsonArrayConvaet[] = $row;
    };

    // echo '<pre>';
    //     print_r($jsonArrayConvaet);
    // echo '</pre>';

    $json_encode = json_encode($jsonArrayConvaet);

    print_r($json_encode);


?>