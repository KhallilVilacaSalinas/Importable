<?php

namespace Siv3\Importable\Controller;

use Siv3\Importable\Domain\Factories\ImportableFactory;
use Siv3\Importable\Model\Importable;
use Siv3\Importable\Model\ImportableInterface;
use Siv3\Importable\Model\PointOfSale;


class ImportableController
{
    public function sendImportable($request): void
    {
        $type = new ImportableFactory($request);
        $s = "new PointOfSale";
        $importable = new Importable(new \Siv3\Importable\Model\PointOfSale());
        $importable->postImportable('ola');
    }
}
