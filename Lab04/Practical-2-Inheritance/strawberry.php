<?php

include 'fruit.php';

//class Strawberry kế thừa từ class Fruit
class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
    }
}