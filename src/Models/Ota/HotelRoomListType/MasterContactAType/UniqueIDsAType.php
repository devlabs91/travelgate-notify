<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\MasterContactAType;

/**
 * Class representing UniqueIDsAType
 */
class UniqueIDsAType
{

    /**
     * The unique identifiers for the Event Planner or Coordinator. Can include EP IATA# and other unique IDs such as an Event Planner ID assigned by the receiving system.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $uniqueID
     */
    private $uniqueID = [
        
    ];

    /**
     * Adds as uniqueID
     *
     * The unique identifiers for the Event Planner or Coordinator. Can include EP IATA# and other unique IDs such as an Event Planner ID assigned by the receiving system.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;
        return $this;
    }

    /**
     * isset uniqueID
     *
     * The unique identifiers for the Event Planner or Coordinator. Can include EP IATA# and other unique IDs such as an Event Planner ID assigned by the receiving system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * The unique identifiers for the Event Planner or Coordinator. Can include EP IATA# and other unique IDs such as an Event Planner ID assigned by the receiving system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifiers for the Event Planner or Coordinator. Can include EP IATA# and other unique IDs such as an Event Planner ID assigned by the receiving system.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique identifiers for the Event Planner or Coordinator. Can include EP IATA# and other unique IDs such as an Event Planner ID assigned by the receiving system.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }


}

