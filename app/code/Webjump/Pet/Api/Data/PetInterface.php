<?php

namespace Webjump\Pet\Api\Data;


interface PetInterface
{
    /**
     * Return Pet Entity Id
     *
     * @return int
     */
    public function getEntityId():int;

    /**
     * Set Pet Entity Id
     *
     * @param int $entityId
     *
     * @return void
     */
    public function setEntityId(int $entityId):void;

    /**
     * Return Pet Name
     *
     * @return string
     */
    public function getPetName():string;

    /**
     * Set Pet Name
     *
     * @param string $petName
     *
     * @return void
     */
    public function setPetName(string $petName):void;

    /**
     * Return Pet Owner
     *
     * @return string
     */
    public function getPetOwner():string;

    /**
     * Set Pet Owner
     *
     * @param string $petOwner
     *
     * @return void
     */
    public function setPetOwner(string $petOwner):void;

    /**
     * Return Created At
     *
     * @return string
     */
    public function getCreatedAt():string;

    /**
     * Set Created At
     * @param string $createdAt
     *
     * @return void
     */
    public function setCreatedAt(string $createdAt):void;

    /**
     * Return Owner Telephone
     *
     * @return string
     */
    public function getOwnerTelephone():string;

    /**
     * Set Owner Telephone
     * @param string $ownerTelephone
     *
     * @return void
     */
    public function setOwnerTelephone(string $ownerTelephone):void;

    /**
     * Return Owner Id
     * @return int
     */
    public function getOwnerId():int;

    /**
     * Set Owner Id
     *
     * @param int $ownerId
     *
     * @return void
     */
    public function setOwnerId(int $ownerId):void;
}
