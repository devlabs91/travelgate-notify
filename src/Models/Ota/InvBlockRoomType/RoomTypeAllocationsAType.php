<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\InvBlockRoomType;

/**
 * Class representing RoomTypeAllocationsAType
 */
class RoomTypeAllocationsAType
{

    /**
     * Refer to OpenTravel Code list (INV) Inventory Count Type.
     *
     * @property string $roomTypePickUpStatus
     */
    private $roomTypePickUpStatus = null;

    /**
     * This is the number of rooms blocked for a specific room type for specific dates.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\InvBlockRoomType\RoomTypeAllocationsAType\RoomTypeAllocationAType[] $roomTypeAllocation
     */
    private $roomTypeAllocation = [
        
    ];

    /**
     * Gets as roomTypePickUpStatus
     *
     * Refer to OpenTravel Code list (INV) Inventory Count Type.
     *
     * @return string
     */
    public function getRoomTypePickUpStatus()
    {
        return $this->roomTypePickUpStatus;
    }

    /**
     * Sets a new roomTypePickUpStatus
     *
     * Refer to OpenTravel Code list (INV) Inventory Count Type.
     *
     * @param string $roomTypePickUpStatus
     * @return self
     */
    public function setRoomTypePickUpStatus($roomTypePickUpStatus)
    {
        $this->roomTypePickUpStatus = $roomTypePickUpStatus;
        return $this;
    }

    /**
     * Adds as roomTypeAllocation
     *
     * This is the number of rooms blocked for a specific room type for specific dates.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\InvBlockRoomType\RoomTypeAllocationsAType\RoomTypeAllocationAType $roomTypeAllocation
     */
    public function addToRoomTypeAllocation(\Devlabs91\TravelgateNotify\Models\Ota\InvBlockRoomType\RoomTypeAllocationsAType\RoomTypeAllocationAType $roomTypeAllocation)
    {
        $this->roomTypeAllocation[] = $roomTypeAllocation;
        return $this;
    }

    /**
     * isset roomTypeAllocation
     *
     * This is the number of rooms blocked for a specific room type for specific dates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomTypeAllocation($index)
    {
        return isset($this->roomTypeAllocation[$index]);
    }

    /**
     * unset roomTypeAllocation
     *
     * This is the number of rooms blocked for a specific room type for specific dates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomTypeAllocation($index)
    {
        unset($this->roomTypeAllocation[$index]);
    }

    /**
     * Gets as roomTypeAllocation
     *
     * This is the number of rooms blocked for a specific room type for specific dates.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\InvBlockRoomType\RoomTypeAllocationsAType\RoomTypeAllocationAType[]
     */
    public function getRoomTypeAllocation()
    {
        return $this->roomTypeAllocation;
    }

    /**
     * Sets a new roomTypeAllocation
     *
     * This is the number of rooms blocked for a specific room type for specific dates.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\InvBlockRoomType\RoomTypeAllocationsAType\RoomTypeAllocationAType[] $roomTypeAllocation
     * @return self
     */
    public function setRoomTypeAllocation(array $roomTypeAllocation)
    {
        $this->roomTypeAllocation = $roomTypeAllocation;
        return $this;
    }


}

