<?php 

    $json_file = "demo.json";

    $json_string = file_get_contents($json_file); // File add 

    $json_decode = json_decode($json_string , true); //true => array 
    $json_decode_ob = json_decode($json_string , false); // false -> object


    // echo '<pre>';
    // print_r($json_decode);
    // echo '</pre>';

     // ==========================   Array Data Show ====================================

    echo '<table border="1"><tr><th>Id</th><th> Name </th><th>Class </th><th> Section</th><th> City</th></tr> ';

        foreach($json_decode as list ('id' => $Id , 'name' => $Name, 'class' => $Class,       
        'section' => $Section,'city'=> $City)){
            ?>
                <tr>
                    <td><?php echo $Id ;?></td>
                    <td><?php echo $Name ;?></td>
                    <td><?php echo $Class ;?></td>
                    <td><?php echo $Section ;?></td>
                    <td><?php echo $City ;?></td>
                </tr>
            <?php
        }
            

    echo '</table>';

     echo '</br></br></br>';
     // ==========================   Object Data Show ====================================

    echo '<table border="1"><tr><th>Id</th><th> Name </th><th>Class </th><th> Section</th><th> City</th></tr> ';

        foreach($json_decode_ob as $single){
            ?>
                <tr>
                    <td><?php echo $single -> id ;?></td>
                    <td><?php echo $single -> name ;?></td>
                    <td><?php echo $single -> class ;?></td>
                    <td><?php echo $single -> section ;?></td>
                    <td><?php echo $single -> city ;?></td>
                </tr>
            <?php
        }
            

    echo '</table>';


?>