<?php

class Basket
{
    public $count;
    public $price;
    public $totalPrice;

    // Метод для добавления товара

    function addGoods()
    {
        echo $this->count;
    }

    // Метод для подсчета итоговой стоимости

    function calcPrice()
    {
        echo $this->totalPrice = $this->count * $this->price ;
    }
}

$goods = new Basket();
$a->count = 1;
$a->price = 3200;
$a->totalPrice = $this->count * $this->price;
$a->calcPrice();


// Задание 5

class A
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}

$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();

//1234, $x увеличивается на 1.


// Задание 6

class A
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}

class B extends A
{
}

$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

//1122 сначала происходит наследование, потом увеличение на 1.


//Задание 7

class A
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}

class B extends A
{
}

$a1 = new A;
$b1 = new B;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

//1122