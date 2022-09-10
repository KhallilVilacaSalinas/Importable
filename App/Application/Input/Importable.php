<?php

namespace Siv3\Importable\Application\Input;

use Siv3\Importable\Domain\Entity\ImportableInterface;

class Importable
{
    private ImportableInterface $importable;

    public function __construct(ImportableInterface $importable)
    {
        $this->importable = $importable;
    }

    public function postImportable(string $menssage): void
    {
        $this->importable->importableService($menssage);
    }
}
