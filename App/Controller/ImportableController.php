<?php

namespace Siv3\Importable\Controller;

use Siv3\Importable\Application\Input\Importable;
use Siv3\Importable\Domain\Factories\ImportableFactory;


class ImportableController
{
    public function sendImportable($request)
    {
        $typeImportation = ImportableFactory::make($request);
        $importable = new Importable($typeImportation);
        $importable->postImportable('aqui');
    }
}