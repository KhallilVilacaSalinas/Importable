<?php

use Siv3\Importable\Controller\ImportableController;
use Siv3\Importable\Model\PointOfSale;

require "../vendor/autoload.php";

//print_r(explode("\\",'Siv3\Importable\Model\PointOfSale' ));
echo gettype(new \Siv3\Importable\Model\PointOfSale());
$type = 'ImportableController';
$importable = new $type;
$importable->sendImportable("POINTS_OF_SALE");
