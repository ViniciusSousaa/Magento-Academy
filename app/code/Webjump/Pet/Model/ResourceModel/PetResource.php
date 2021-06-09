<?php
declare(strict_types=1);

namespace Webjump\Pet\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class PetResource extends AbstractDb
{
    /** @var string main table name */
    public const MAIN_TABLE = 'pet_table';
    /** @var string entity id field */
    public const ID_FIELD_NAME = 'entity_id';
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
