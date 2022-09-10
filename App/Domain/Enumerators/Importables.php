<?php

namespace Siv3\Importable\Domain\Enumerators;

use Siv3\Importable\Domain\Service\PointOfSaleService;
use Siv3\Importable\Domain\Service\UserService;

final class Importables
{
    public const POINTS_OF_SALE = 'POINTS_OF_SALE';
    public const USER = 'USER';

    public const IMPORTABLES = [
        self::POINTS_OF_SALE => PointOfSaleService::class,
        self::USER => UserService::class
    ];
}
