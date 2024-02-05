<?php 

    class Student{

        public $name, $subject,$age;
    
        function __construct($n,$s,$a){
            $this->name = $n;
            $this->subject = $s;
            $this->age = $a;
        }

        function __destruct(){
            echo $this->name . '<br/>';
            echo $this->subject . '<br/>';
            echo $this->age .'<br/>'.'<br/>';
        }
    }

    new Student('Prince','Math',22);
    new Student('Abir','Math1',23);
    new Student('Pranto','Math2',24);

?>