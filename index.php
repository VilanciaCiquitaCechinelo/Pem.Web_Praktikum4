<?php

require_once 'traits/Discount.php';
require_once 'controllers/MakeupController.php';
require_once 'models/Lipstik.php';
require_once 'models/Fondasi.php';

use Makeup\Controllers\MakeupController;

$makeupController = new MakeupController();
$makeupController->displayLipstikInfo();
$makeupController->displayFondasiInfo();
