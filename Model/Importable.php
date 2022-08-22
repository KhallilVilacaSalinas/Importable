<?php

namespace Siv3\Importable\Model;

class Importable
{
    private ImportableInterface $importable;

    public function __construct(ImportableInterface $importable)
    {
        $this->importable = $importable;
    }

    public function postImportable($mensage): void
    {
        $this->importable->importableService($mensage);
    }
}
