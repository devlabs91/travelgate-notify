<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType;

/**
 * Class representing RoomStaysAType
 */
class RoomStaysAType
{

    /**
     * Details the success, failure and warnings for the RoomStay.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\RoomStaysAType\RoomStayAType[] $roomStay
     */
    private $roomStay = [
        
    ];

    /**
     * Adds as roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\RoomStaysAType\RoomStayAType $roomStay
     */
    public function addToRoomStay(\Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\RoomStaysAType\RoomStayAType $roomStay)
    {
        $this->roomStay[] = $roomStay;
        return $this;
    }

    /**
     * isset roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomStay($index)
    {
        return isset($this->roomStay[$index]);
    }

    /**
     * unset roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomStay($index)
    {
        unset($this->roomStay[$index]);
    }

    /**
     * Gets as roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\RoomStaysAType\RoomStayAType[]
     */
    public function getRoomStay()
    {
        return $this->roomStay;
    }

    /**
     * Sets a new roomStay
     *
     * Details the success, failure and warnings for the RoomStay.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\RoomStaysAType\RoomStayAType[] $roomStay
     * @return self
     */
    public function setRoomStay(array $roomStay)
    {
        $this->roomStay = $roomStay;
        return $this;
    }


}

