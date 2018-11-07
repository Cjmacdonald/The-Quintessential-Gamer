<?php

class storeEntity
{
    public $id;
    public $name;
    public $type;
    public $price;
    public $size;
    public $image;
    public $review;

    function __construct($id, $name, $type, $price, $size, $image, $review) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->roast = $size;
        $this->image = $image;
        $this->review = $review;
    }

}

?>
