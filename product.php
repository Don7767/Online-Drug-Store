<?php

class Product
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $quantity;
    private $image;
    private $rating_image;

    function __construct($id, $name, $description, $price, $quantity, $image, $rating_image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->image = $image;
        $this->rating_image = $rating_image;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getPrice() {
        return $this->price;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getImage(){
        return $this->image;
    }

    function getRating_image(){
        return $this->rating_image;
    }
}
?>
