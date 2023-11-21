<?php

namespace Makeup\Models;

use Makeup\AbstractMakeupProduct;
use Makeup\Traits\Discount;

class Fondasi extends AbstractMakeupProduct {
    use Discount;

    protected $shade;

    public function __construct($name, $price, $shade) {
        parent::__construct($name, $price);
        $this->shade = $shade;
    }

    public function getInfo() {
        return "Fondasi: {$this->name}, Shade: {$this->shade}, Harga: {$this->price}";
    }
}