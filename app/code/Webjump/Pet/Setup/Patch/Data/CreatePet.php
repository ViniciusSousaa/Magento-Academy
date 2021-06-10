<?php


namespace Webjump\Pet\Setup\Patch\Data;


use Elasticsearch\Endpoints\Create;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;
use Webjump\Pet\Model\Data\Pet;
use Webjump\Pet\Model\Data\PetFactory;
use Webjump\Pet\Model\PetsRepository;

class CreatePet implements DataPatchInterface
{

    private $petsRepository;
    private $petFactory;

    public function __construct(PetsRepository $petsRepository, PetFactory $petFactory)
    {
        $this->petsRepository = $petsRepository;
        $this->petFactory = $petFactory;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply()
    {
        for ($cont = 0; $cont < 3; $cont++) {
            /** @var Pet $pet */
            $pet = $this->petFactory->create();
            $pet->setPetName("Cachorro");
            $pet->setPetOwner("Vinicius");
            $pet->setOwnerTelephone("11986437643");
            $pet->setOwnerId(1);

            $this->petsRepository->save($pet);
        }
    }
}
