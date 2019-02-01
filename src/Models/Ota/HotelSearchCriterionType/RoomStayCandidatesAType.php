<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType;

/**
 * Class representing RoomStayCandidatesAType
 */
class RoomStayCandidatesAType
{

    /**
     * Element used to identify available room products.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomStayCandidateType[] $roomStayCandidate
     */
    private $roomStayCandidate = [
        
    ];

    /**
     * Adds as roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomStayCandidateType $roomStayCandidate
     */
    public function addToRoomStayCandidate(\Devlabs91\TravelgateNotify\Models\Ota\RoomStayCandidateType $roomStayCandidate)
    {
        $this->roomStayCandidate[] = $roomStayCandidate;
        return $this;
    }

    /**
     * isset roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomStayCandidate($index)
    {
        return isset($this->roomStayCandidate[$index]);
    }

    /**
     * unset roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomStayCandidate($index)
    {
        unset($this->roomStayCandidate[$index]);
    }

    /**
     * Gets as roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomStayCandidateType[]
     */
    public function getRoomStayCandidate()
    {
        return $this->roomStayCandidate;
    }

    /**
     * Sets a new roomStayCandidate
     *
     * Element used to identify available room products.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomStayCandidateType[] $roomStayCandidate
     * @return self
     */
    public function setRoomStayCandidate(array $roomStayCandidate)
    {
        $this->roomStayCandidate = $roomStayCandidate;
        return $this;
    }


}

