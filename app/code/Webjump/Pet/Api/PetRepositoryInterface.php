<?php

namespace Webjump\Pet\Api;

use Webjump\Pet\Api\Data\PetInterface;

interface PetRepositoryInterface
{
    /**
     * @param int $id
     *
     * Return Pet Interface
     *
     * @return PetInterface
     */
    public function getById(int $id):PetInterface;

    /**
     * Set Pet Interface
     *
     * @param PetInterface $pet
     *
     * @return void
     */
    public function save(PetInterface $pet):void;
}
