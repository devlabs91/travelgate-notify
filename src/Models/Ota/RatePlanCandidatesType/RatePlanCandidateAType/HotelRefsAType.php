<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType;

/**
 * Class representing HotelRefsAType
 */
class HotelRefsAType
{

    /**
     * Information to identify one or more hotels.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType[] $hotelRef
     */
    private $hotelRef = [
        
    ];

    /**
     * Adds as hotelRef
     *
     * Information to identify one or more hotels.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType $hotelRef
     */
    public function addToHotelRef(\Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType $hotelRef)
    {
        $this->hotelRef[] = $hotelRef;
        return $this;
    }

    /**
     * isset hotelRef
     *
     * Information to identify one or more hotels.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelRef($index)
    {
        return isset($this->hotelRef[$index]);
    }

    /**
     * unset hotelRef
     *
     * Information to identify one or more hotels.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelRef($index)
    {
        unset($this->hotelRef[$index]);
    }

    /**
     * Gets as hotelRef
     *
     * Information to identify one or more hotels.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType[]
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * Information to identify one or more hotels.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType[] $hotelRef
     * @return self
     */
    public function setHotelRef(array $hotelRef)
    {
        $this->hotelRef = $hotelRef;
        return $this;
    }


}

