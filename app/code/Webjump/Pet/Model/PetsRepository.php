<?php

namespace Webjump\Pet\Model;

use Webjump\Pet\Api\Data\PetInterface;
use Webjump\Pet\Api\PetRepositoryInterface;

class PetsRepository implements PetRepositoryInterface
{

    public function getById(int $id): PetInterface
    {
        // TODO: Implement getById() method.
    }

    public function save(PetInterface $pet): void
    {
        // TODO: Implement save() method.
    }
}
