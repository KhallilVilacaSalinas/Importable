<?php

namespace Siv3\Importable\Domain\Service;

use Siv3\Importable\Domain\Entity\ImportableInterface;

class PointOfSaleService implements ImportableInterface
{
    public function importableService(string $menssage)
    {
        echo "Point: " . $menssage;
    }
}
