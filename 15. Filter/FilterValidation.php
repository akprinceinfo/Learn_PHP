

<?php

    $inputNumber = 25.2 ;

    // $options = array(
    //     'option'=> array(
    //         'min_range' => 20,
    //         'max_range' => 50
    //     )
    // );

    $filter = filter_var($inputNumber, FILTER_VALIDATE_INT);

    if ($filter) {
        echo  $inputNumber . 'is a int ';
    }else{
        echo $inputNumber . 'id a not int';
    }


?>