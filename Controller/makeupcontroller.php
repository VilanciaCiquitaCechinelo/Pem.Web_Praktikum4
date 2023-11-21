<?php

namespace Makeup\Controllers;

use Makeup\Lipstik;
use Makeup\Fondasi;

class MakeupController {
    public function displayLipstikInfo() {
        $lipstik = new Lipstik("Lipstik Matte", 150000, "Merah");
        echo $lipstik->getInfo() . "\n";
        echo "Harga Setelah Diskon: Rp" . number_format($lipstik->applyDiscount(10), 0, ',', '.') . "\n";
    }

    public function displayFondasiInfo() {
        $fondasi = new Fondasi("Fondasi Cair", 250000, "Medium");
        echo $fondasi->getInfo() . "\n";
        echo "Harga Setelah Diskon: Rp" . number_format($fondasi->applyDiscount(15), 0, ',', '.') . "\n";
    }
}
