<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType;

use Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType;

/**
 * Class representing MasterContactAType
 */
class MasterContactAType extends ContactPersonType
{

    /**
     * This identifies the master account number and related information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $uniqueIDs
     */
    private $uniqueIDs = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\MasterContactAType\LoyaltyAType[] $loyalty
     */
    private $loyalty = [
        
    ];

    /**
     * Adds as uniqueID
     *
     * This identifies the master account number and related information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     */
    public function addToUniqueIDs(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID)
    {
        $this->uniqueIDs[] = $uniqueID;
        return $this;
    }

    /**
     * isset uniqueIDs
     *
     * This identifies the master account number and related information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUniqueIDs($index)
    {
        return isset($this->uniqueIDs[$index]);
    }

    /**
     * unset uniqueIDs
     *
     * This identifies the master account number and related information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUniqueIDs($index)
    {
        unset($this->uniqueIDs[$index]);
    }

    /**
     * Gets as uniqueIDs
     *
     * This identifies the master account number and related information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[]
     */
    public function getUniqueIDs()
    {
        return $this->uniqueIDs;
    }

    /**
     * Sets a new uniqueIDs
     *
     * This identifies the master account number and related information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $uniqueIDs
     * @return self
     */
    public function setUniqueIDs(array $uniqueIDs)
    {
        $this->uniqueIDs = $uniqueIDs;
        return $this;
    }

    /**
     * Adds as loyalty
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\MasterContactAType\LoyaltyAType $loyalty
     */
    public function addToLoyalty(\Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\MasterContactAType\LoyaltyAType $loyalty)
    {
        $this->loyalty[] = $loyalty;
        return $this;
    }

    /**
     * isset loyalty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyalty($index)
    {
        return isset($this->loyalty[$index]);
    }

    /**
     * unset loyalty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyalty($index)
    {
        unset($this->loyalty[$index]);
    }

    /**
     * Gets as loyalty
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\MasterContactAType\LoyaltyAType[]
     */
    public function getLoyalty()
    {
        return $this->loyalty;
    }

    /**
     * Sets a new loyalty
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\MasterContactAType\LoyaltyAType[] $loyalty
     * @return self
     */
    public function setLoyalty(array $loyalty)
    {
        $this->loyalty = $loyalty;
        return $this;
    }


}

