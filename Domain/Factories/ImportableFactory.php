<?php

namespace Siv3\Importable\Domain\Factories;

use ErrorException;
use Siv3\Importable\Domain\Enumerators\Importables;

class ImportableFactory
{
    const IMPORTABLES = Importables::IMPORTABLES;

    public function __construct(
        private string $importables
    )
    {
        self::make($this->importables);
    }

    public function make($importable): string
    {
        if (!array_key_exists($importable, self::IMPORTABLES)){
            throw new ErrorException('Importacao nao encontrada');
        }

        return $this->importables = self::IMPORTABLES[$importable];
    }

    /**
     * @return string
     */
    public function getImportableType(): string
    {
        return $this->importables;
    }
}
