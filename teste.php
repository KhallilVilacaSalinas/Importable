<?php

use Siv3\Importable\Controller\ImportableController;

require_once "./vendor/autoload.php";

$importable = new ImportableController();
$importable->sendImportable("USER");
//$importable->sendImportable("POINTS_OF_SALE");
