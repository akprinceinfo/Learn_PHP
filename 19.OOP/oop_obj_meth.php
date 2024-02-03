
<!-- Class, Object, This Keyword, Method, Properties | OOP -->
<?php 

    // class student{
    //     public $name = "Ahsanul Kabir";
    //     public $age = 21 ;
    // };

    // $obj = new student();
    // echo $obj -> name . '</br>';
    // echo $obj -> age . '</br>';

    // =============================================

    // class math{

    //     public $a,$b,$c;

    //     function sum(){
    //         $this->c = $this->a + $this->b;
    //         return $this->c;
    //     }

    //     function subsrtiction(){
    //         $this->c = $this->b - $this->a;
    //         return $this->c;
    //     }

    // };

    // $Math = new math();
    // $Math -> a = 20;
    // $Math -> b = 30;

    // echo $Math -> sum();
    // echo "<br/>";
    // echo $Math -> subsrtiction();
    
      class math{
        function sum($a , $b){
            $c = $a + $b ;
            return $c;
        }
        function subsrtiction(){
            $this->c = $this->b - $this->a;
            return $this->c;
        }

    };

    $Math = new math();
    echo $Math -> sum(20,40);
    echo "<br/>";
   


?>