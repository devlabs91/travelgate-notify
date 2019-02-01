<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RoomStayLiteType;

/**
 * Class representing RoomRatesAType
 */
class RoomRatesAType
{

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomRateLiteType[] $roomRate
     */
    private $roomRate = [
        
    ];

    /**
     * Adds as roomRate
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomRateLiteType $roomRate
     */
    public function addToRoomRate(\Devlabs91\TravelgateNotify\Models\Ota\RoomRateLiteType $roomRate)
    {
        $this->roomRate[] = $roomRate;
        return $this;
    }

    /**
     * isset roomRate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomRate($index)
    {
        return isset($this->roomRate[$index]);
    }

    /**
     * unset roomRate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomRate($index)
    {
        unset($this->roomRate[$index]);
    }

    /**
     * Gets as roomRate
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomRateLiteType[]
     */
    public function getRoomRate()
    {
        return $this->roomRate;
    }

    /**
     * Sets a new roomRate
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomRateLiteType[] $roomRate
     * @return self
     */
    public function setRoomRate(array $roomRate)
    {
        $this->roomRate = $roomRate;
        return $this;
    }


}

