<?php 

    // function name($firstName , $LastName){
    //     echo "Hello $firstName $LastName<br/>";
    // }
    // name("Ahsanul_Kabir" ,"Prince");
    // name("Md" , "Satu");

?>

<?php 

    function name($firstName = "First Name" , $LastName = "Last Name"){
        echo "Hello! $firstName $LastName<br/>";
    }
    name("Ahsanul_Kabir" );
    name(  "Satu");

?>