<?php

namespace Siv3\Importable\Domain\Factories;

use ErrorException;
use Siv3\Importable\Domain\Entity\ImportableInterface;
use Siv3\Importable\Domain\Enumerators\Importables;

class ImportableFactory
{
    const IMPORTABLES = Importables::IMPORTABLES;

    public static function make($importable) : ImportableInterface
    {
        if (!array_key_exists($importable, self::IMPORTABLES)){
            throw new ErrorException('Importacao nao encontrada');
        }
        $classname = self::IMPORTABLES[$importable];

        return new $classname();
    }

}
