<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\GuestRoomType;

/**
 * Class representing QuantitiesAType
 */
class QuantitiesAType
{

    /**
     * @property int $maxRollaways
     */
    private $maxRollaways = null;

    /**
     * @property int $standardNumBeds
     */
    private $standardNumBeds = null;

    /**
     * @property int $maximumAdditionalGuests
     */
    private $maximumAdditionalGuests = null;

    /**
     * Indicates the minimum number of guests for which a room charge will be applied, even if there are fewer guests in the room.
     *
     * @property int $minBillableGuests
     */
    private $minBillableGuests = null;

    /**
     * Gets as maxRollaways
     *
     * @return int
     */
    public function getMaxRollaways()
    {
        return $this->maxRollaways;
    }

    /**
     * Sets a new maxRollaways
     *
     * @param int $maxRollaways
     * @return self
     */
    public function setMaxRollaways($maxRollaways)
    {
        $this->maxRollaways = $maxRollaways;
        return $this;
    }

    /**
     * Gets as standardNumBeds
     *
     * @return int
     */
    public function getStandardNumBeds()
    {
        return $this->standardNumBeds;
    }

    /**
     * Sets a new standardNumBeds
     *
     * @param int $standardNumBeds
     * @return self
     */
    public function setStandardNumBeds($standardNumBeds)
    {
        $this->standardNumBeds = $standardNumBeds;
        return $this;
    }

    /**
     * Gets as maximumAdditionalGuests
     *
     * @return int
     */
    public function getMaximumAdditionalGuests()
    {
        return $this->maximumAdditionalGuests;
    }

    /**
     * Sets a new maximumAdditionalGuests
     *
     * @param int $maximumAdditionalGuests
     * @return self
     */
    public function setMaximumAdditionalGuests($maximumAdditionalGuests)
    {
        $this->maximumAdditionalGuests = $maximumAdditionalGuests;
        return $this;
    }

    /**
     * Gets as minBillableGuests
     *
     * Indicates the minimum number of guests for which a room charge will be applied, even if there are fewer guests in the room.
     *
     * @return int
     */
    public function getMinBillableGuests()
    {
        return $this->minBillableGuests;
    }

    /**
     * Sets a new minBillableGuests
     *
     * Indicates the minimum number of guests for which a room charge will be applied, even if there are fewer guests in the room.
     *
     * @param int $minBillableGuests
     * @return self
     */
    public function setMinBillableGuests($minBillableGuests)
    {
        $this->minBillableGuests = $minBillableGuests;
        return $this;
    }


}

