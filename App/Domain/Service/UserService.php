<?php

namespace Siv3\Importable\Domain\Service;

use Siv3\Importable\Domain\Entity\ImportableInterface;

class UserService implements ImportableInterface
{

    public function importableService(string $menssage)
    {
        echo 'User: ' . $menssage;
    }
}