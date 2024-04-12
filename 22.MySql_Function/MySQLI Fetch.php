<?php

$con = mysqli_connect('localhost','root','','crud' ) or die(mysqli_eror());

$sql = 'SELECT * FROM products';

$query = mysqli_query($con,$sql);

// $result = mysqli_fetch_assoc($query);

// echo '<pre>';
//     print_r($result);
// echo '</pre>';

// echo "Helle <b> " . $result['pname'] . "</b>  Your id is <b>" . $result['id'] . "</b> And Your Product Price <b>" . $result['price'] . "</b>";


echo '<table border="1">';

    while($result = mysqli_fetch_assoc($query)){
        ?>  
            
            <tr>
                <td><?php echo $result['id'] ?> </td>
                <td><?php echo $result['pname'] ?> </td>
                <td><?php echo $result['price'] ?> </td>
            </tr>

        <?php
    };

echo '</table>';



?>