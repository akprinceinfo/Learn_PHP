<?php 

    require'animal.php';

    class Dog extends Animal{
        
    }

    $dog = new Dog();
    echo $dog->name . "<br/>";
    echo $dog->weight() . "<br/>";
    echo $dog->color(). "<br/>";
    echo $dog->food(). "<br/>";

?>