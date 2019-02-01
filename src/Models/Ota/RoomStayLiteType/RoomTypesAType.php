<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RoomStayLiteType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomTypeLiteType[] $roomType
     */
    private $roomType = [
        
    ];

    /**
     * Adds as roomType
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomTypeLiteType $roomType
     */
    public function addToRoomType(\Devlabs91\TravelgateNotify\Models\Ota\RoomTypeLiteType $roomType)
    {
        $this->roomType[] = $roomType;
        return $this;
    }

    /**
     * isset roomType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomType($index)
    {
        return isset($this->roomType[$index]);
    }

    /**
     * unset roomType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomType($index)
    {
        unset($this->roomType[$index]);
    }

    /**
     * Gets as roomType
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomTypeLiteType[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomTypeLiteType[] $roomType
     * @return self
     */
    public function setRoomType(array $roomType)
    {
        $this->roomType = $roomType;
        return $this;
    }


}

