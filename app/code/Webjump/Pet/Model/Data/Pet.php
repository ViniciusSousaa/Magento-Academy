<?php


namespace Webjump\Pet\Model\Data;


use Magento\Framework\Model\AbstractModel;
use Webjump\Pet\Api\Data\PetInterface;
use Webjump\Pet\Model\ResourceModel\PetResource;

class Pet extends AbstractModel implements PetInterface
{

    protected function _construct()
    {
        $this->_init(PetResource::class);
    }
    public function getEntityId(): int
    {
        return (int) $this->getData("entity_id");
    }

    public function setEntityId(int $entityId): void
    {
        $this->setData("entity_id", $entityId);
    }

    public function getPetName(): string
    {
        return (string) $this->getData("pet_name");
    }

    public function setPetName(string $petName): void
    {
        $this->setData("pet_name", $petName);
    }

    public function getPetOwner(): string
    {
        return (string) $this->getData("pet_owner");
    }

    public function setPetOwner(string $petOwner): void
    {
        $this->setData("pet_owner", $petOwner);
    }

    public function getCreatedAt(): string
    {
        return (string) $this->getData("created_at");
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->setData("created", $createdAt);
    }

    public function getOwnerTelephone(): string
    {
        return (string) $this->getData("owner_telephone");
    }

    public function setOwnerTelephone(string $ownerTelephone): void
    {
        $this->setData("owner_telephone", $ownerTelephone);
    }

    public function getOwnerId(): int
    {
        return (int) $this->getData("owner_id");
    }

    public function setOwnerId(int $ownerId): void
    {
        $this->setData("owner_id", $ownerId);
    }
}
