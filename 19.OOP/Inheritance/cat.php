<?php 

    require'animal.php';
    class Cat extends Animal{
    }

    $cat = new Cat();
    echo $cat->name . "<br/>";
    echo $cat->weight() . "<br/>";
    echo $cat->color(). "<br/>";
    echo $cat->food(). "<br/>";

?>