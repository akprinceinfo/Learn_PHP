<?php 

    class welcome{
        const wellComeMessage = 'Wellcome to Cource'. "<br/><br>";
    }

    echo welcome::wellComeMessage;

    // ======================================



    class wellcomeFun{
       const wellcomeFunMessage = 'Wellcome to Cource';
    
        function welcome_meg(){
            return self:: wellcomeFunMessage;
        }
    }

     $msg = new wellcomeFun;
     echo $msg->welcome_meg();

?>