<?php 

class Product {
    public $name;
    public $price;
    public $description;
    public $image;
    public $discount;

    public function uploadedImage($image) {
        $this->image = $image;

        return $this->image;
    }

    public function calprice() 
    {
        return ($this->price * $this->discount)/100;
    }


}