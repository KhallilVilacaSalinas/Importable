<?php

use Siv3\Importable\Controller\ImportableController;
<<<<<<< HEAD

require_once "./vendor/autoload.php";

$importable = new ImportableController();
$importable->sendImportable("USER");
//$importable->sendImportable("POINTS_OF_SALE");
=======
use Siv3\Importable\Model\PointOfSale;

require "../vendor/autoload.php";

//print_r(explode("\\",'Siv3\Importable\Model\PointOfSale' ));
echo gettype(new \Siv3\Importable\Model\PointOfSale());
$type = 'ImportableController';
$importable = new $type;
$importable->sendImportable("POINTS_OF_SALE");
>>>>>>> 984aa0972358c6f8ccd31ac9e6a3008f17ebe92f
