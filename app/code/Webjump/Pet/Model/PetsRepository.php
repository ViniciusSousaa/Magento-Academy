<?php

namespace Webjump\Pet\Model;

use Webjump\Pet\Api\Data\PetInterface;
use Webjump\Pet\Api\PetRepositoryInterface;
use Webjump\Pet\Model\Data\Pet;
use Webjump\Pet\Model\Data\PetFactory;
use Webjump\Pet\Model\ResourceModel\PetResource;
use Webjump\Pet\Model\ResourceModel\PetResourceFactory;

class PetsRepository implements PetRepositoryInterface
{
    private $petResource;
    private $petFactory;

    public function __construct(PetResource $petResource, PetFactory $petFactory)
    {
        $this->petResource = $petResource;
        $this->petFactory = $petFactory;
    }

    public function getById(int $id): PetInterface
    {
        $pet = $this->petFactory->create();

        $this->petResource->load($pet, $id);

        return $pet;
    }

    public function save(PetInterface $pet): void
    {
        $this->petResource->save($pet);
    }
}
