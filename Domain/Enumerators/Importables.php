<?php

namespace Siv3\Importable\Domain\Enumerators;

use Siv3\Importable\Model\PointOfSale;

final class Importables
{
    public const POINTS_OF_SALE = 'POINTS_OF_SALE';

    public const IMPORTABLES = [
        self::POINTS_OF_SALE => PointOfSale::class
    ];
}
