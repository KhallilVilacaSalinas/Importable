<?php

namespace Siv3\Importable\Model;

class PointOfSale implements ImportableInterface
{
    public function importableService($menssage)
    {
        echo "Point: " . $menssage;
    }
}
