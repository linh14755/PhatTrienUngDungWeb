<?php

//Định nghĩa interface này có phương thức là makeSound, các class kế thừa
// interface phải định nghĩa lại phương thức này
interface Animal
{
    public function makeSound();
}

class Cat implements Animal
{
    public function makeSound()
    {
        echo " Meow ";
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo " Bark ";
    }
}

class Mouse implements Animal
{
    public function makeSound()
    {
        echo " Squeak ";
    }
}

?>


