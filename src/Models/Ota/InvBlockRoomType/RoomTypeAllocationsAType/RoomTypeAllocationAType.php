<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\InvBlockRoomType\RoomTypeAllocationsAType;

/**
 * Class representing RoomTypeAllocationAType
 */
class RoomTypeAllocationAType
{

    /**
     * The starting value of the time span.
     *
     * @property \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @property \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \DateTime $end
     */
    private $end = null;

    /**
     * The number of rooms allocated as available for the dates specified in the DateTimeSpanGroup.
     *
     * @property int $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * The number of complimentary rooms allocated as part of the inventory block. This may be a flat number of rooms or it may be used in conjunction with CompRoomFactor.
     *
     * @property int $compRoomQuantity
     */
    private $compRoomQuantity = null;

    /**
     * Used to indicate how many rooms need to be sold before a complimentary room is granted (e.g. CompRoomQuantity="1" and CompRoomFactor="100" means 1 complimentary room is granted per 100 rooms sold).
     *
     * @property int $compRoomFactor
     */
    private $compRoomFactor = null;

    /**
     * If true, this indicator designates that the room allocation is applied through to the End date in the RoomType DateTimeSpanGroup if it exists or to the End date in the InvBlock DateTimeSpanGroup. This would be used in place of RoomTypeAllocation/Duration and RoomTypeAllocation/End.
     *
     * @property bool $endDateIndicator
     */
    private $endDateIndicator = null;

    /**
     * The contracted quantity or ceiling of inventory, which may differ from the NumberOfUnits allocated.
     *
     * @property int $sellLimit
     */
    private $sellLimit = null;

    /**
     * The block from which to take inventory when NumberOfUnits is depleted. This is used in conjunction with the SellLimit attribute. If this attribute is not present, inventory is taken from general inventory.
     *
     * @property string $procureBlockCode
     */
    private $procureBlockCode = null;

    /**
     * Used to refer to a specific allocation already in the receiving system.
     *
     * @property string $allocationID
     */
    private $allocationID = null;

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as numberOfUnits
     *
     * The number of rooms allocated as available for the dates specified in the DateTimeSpanGroup.
     *
     * @return int
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * The number of rooms allocated as available for the dates specified in the DateTimeSpanGroup.
     *
     * @param int $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;
        return $this;
    }

    /**
     * Gets as compRoomQuantity
     *
     * The number of complimentary rooms allocated as part of the inventory block. This may be a flat number of rooms or it may be used in conjunction with CompRoomFactor.
     *
     * @return int
     */
    public function getCompRoomQuantity()
    {
        return $this->compRoomQuantity;
    }

    /**
     * Sets a new compRoomQuantity
     *
     * The number of complimentary rooms allocated as part of the inventory block. This may be a flat number of rooms or it may be used in conjunction with CompRoomFactor.
     *
     * @param int $compRoomQuantity
     * @return self
     */
    public function setCompRoomQuantity($compRoomQuantity)
    {
        $this->compRoomQuantity = $compRoomQuantity;
        return $this;
    }

    /**
     * Gets as compRoomFactor
     *
     * Used to indicate how many rooms need to be sold before a complimentary room is granted (e.g. CompRoomQuantity="1" and CompRoomFactor="100" means 1 complimentary room is granted per 100 rooms sold).
     *
     * @return int
     */
    public function getCompRoomFactor()
    {
        return $this->compRoomFactor;
    }

    /**
     * Sets a new compRoomFactor
     *
     * Used to indicate how many rooms need to be sold before a complimentary room is granted (e.g. CompRoomQuantity="1" and CompRoomFactor="100" means 1 complimentary room is granted per 100 rooms sold).
     *
     * @param int $compRoomFactor
     * @return self
     */
    public function setCompRoomFactor($compRoomFactor)
    {
        $this->compRoomFactor = $compRoomFactor;
        return $this;
    }

    /**
     * Gets as endDateIndicator
     *
     * If true, this indicator designates that the room allocation is applied through to the End date in the RoomType DateTimeSpanGroup if it exists or to the End date in the InvBlock DateTimeSpanGroup. This would be used in place of RoomTypeAllocation/Duration and RoomTypeAllocation/End.
     *
     * @return bool
     */
    public function getEndDateIndicator()
    {
        return $this->endDateIndicator;
    }

    /**
     * Sets a new endDateIndicator
     *
     * If true, this indicator designates that the room allocation is applied through to the End date in the RoomType DateTimeSpanGroup if it exists or to the End date in the InvBlock DateTimeSpanGroup. This would be used in place of RoomTypeAllocation/Duration and RoomTypeAllocation/End.
     *
     * @param bool $endDateIndicator
     * @return self
     */
    public function setEndDateIndicator($endDateIndicator)
    {
        $this->endDateIndicator = $endDateIndicator;
        return $this;
    }

    /**
     * Gets as sellLimit
     *
     * The contracted quantity or ceiling of inventory, which may differ from the NumberOfUnits allocated.
     *
     * @return int
     */
    public function getSellLimit()
    {
        return $this->sellLimit;
    }

    /**
     * Sets a new sellLimit
     *
     * The contracted quantity or ceiling of inventory, which may differ from the NumberOfUnits allocated.
     *
     * @param int $sellLimit
     * @return self
     */
    public function setSellLimit($sellLimit)
    {
        $this->sellLimit = $sellLimit;
        return $this;
    }

    /**
     * Gets as procureBlockCode
     *
     * The block from which to take inventory when NumberOfUnits is depleted. This is used in conjunction with the SellLimit attribute. If this attribute is not present, inventory is taken from general inventory.
     *
     * @return string
     */
    public function getProcureBlockCode()
    {
        return $this->procureBlockCode;
    }

    /**
     * Sets a new procureBlockCode
     *
     * The block from which to take inventory when NumberOfUnits is depleted. This is used in conjunction with the SellLimit attribute. If this attribute is not present, inventory is taken from general inventory.
     *
     * @param string $procureBlockCode
     * @return self
     */
    public function setProcureBlockCode($procureBlockCode)
    {
        $this->procureBlockCode = $procureBlockCode;
        return $this;
    }

    /**
     * Gets as allocationID
     *
     * Used to refer to a specific allocation already in the receiving system.
     *
     * @return string
     */
    public function getAllocationID()
    {
        return $this->allocationID;
    }

    /**
     * Sets a new allocationID
     *
     * Used to refer to a specific allocation already in the receiving system.
     *
     * @param string $allocationID
     * @return self
     */
    public function setAllocationID($allocationID)
    {
        $this->allocationID = $allocationID;
        return $this;
    }


}

