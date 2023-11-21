<?php

namespace Makeup\Traits;

trait Discount {
    public function applyDiscount($percentage) {
        return $this->price * (1 - $percentage / 100);
    }
}
