<?php

namespace Makeup\Models;

use Makeup\AbstractMakeupProduct;
use Makeup\Traits\Discount;

class Lipstik extends AbstractMakeupProduct {
    use Discount;

    protected $warna;

    public function __construct($name, $price, $warna) {
        parent::__construct($name, $price);
        $this->warna = $warna;
    }

    public function getInfo() {
        return "Lipstik: {$this->name}, Warna: {$this->warna}, Harga: {$this->price}";
    }
}
