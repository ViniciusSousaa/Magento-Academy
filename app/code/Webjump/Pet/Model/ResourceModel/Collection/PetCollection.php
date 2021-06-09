<?php


namespace Webjump\Pet\Model\ResourceModel\Collection;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Webjump\Pet\Model\Data\Pet;
use Webjump\Pet\Model\ResourceModel\PetResource;

class PetCollection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Pet::class, PetResource::class);
    }
}
