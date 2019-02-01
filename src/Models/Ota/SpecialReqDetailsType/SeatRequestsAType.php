<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType;

/**
 * Class representing SeatRequestsAType
 */
class SeatRequestsAType
{

    /**
     * Seating requests for each passenger for each air leg of this trip.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType[] $seatRequest
     */
    private $seatRequest = [
        
    ];

    /**
     * Adds as seatRequest
     *
     * Seating requests for each passenger for each air leg of this trip.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType $seatRequest
     */
    public function addToSeatRequest(\Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType $seatRequest)
    {
        $this->seatRequest[] = $seatRequest;
        return $this;
    }

    /**
     * isset seatRequest
     *
     * Seating requests for each passenger for each air leg of this trip.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeatRequest($index)
    {
        return isset($this->seatRequest[$index]);
    }

    /**
     * unset seatRequest
     *
     * Seating requests for each passenger for each air leg of this trip.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeatRequest($index)
    {
        unset($this->seatRequest[$index]);
    }

    /**
     * Gets as seatRequest
     *
     * Seating requests for each passenger for each air leg of this trip.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType[]
     */
    public function getSeatRequest()
    {
        return $this->seatRequest;
    }

    /**
     * Sets a new seatRequest
     *
     * Seating requests for each passenger for each air leg of this trip.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType[] $seatRequest
     * @return self
     */
    public function setSeatRequest(array $seatRequest)
    {
        $this->seatRequest = $seatRequest;
        return $this;
    }


}

