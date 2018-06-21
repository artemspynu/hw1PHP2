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
        echo $this->count * $this->price = $this->totalPrice;
    }
}

$goods = new Basket();
$a->count = 1;
$a->price = 3200;
/*$a->totalPrice = count * price;*/
$a->calcPrice();