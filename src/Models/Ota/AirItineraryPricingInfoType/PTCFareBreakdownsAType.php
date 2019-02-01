<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AirItineraryPricingInfoType;

/**
 * Class representing PTCFareBreakdownsAType
 */
class PTCFareBreakdownsAType
{

    /**
     * Per passenger type code pricing for a travel itinerary.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType[] $pTCFareBreakdown
     */
    private $pTCFareBreakdown = [
        
    ];

    /**
     * Adds as pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType $pTCFareBreakdown
     */
    public function addToPTCFareBreakdown(\Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType $pTCFareBreakdown)
    {
        $this->pTCFareBreakdown[] = $pTCFareBreakdown;
        return $this;
    }

    /**
     * isset pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPTCFareBreakdown($index)
    {
        return isset($this->pTCFareBreakdown[$index]);
    }

    /**
     * unset pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPTCFareBreakdown($index)
    {
        unset($this->pTCFareBreakdown[$index]);
    }

    /**
     * Gets as pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType[]
     */
    public function getPTCFareBreakdown()
    {
        return $this->pTCFareBreakdown;
    }

    /**
     * Sets a new pTCFareBreakdown
     *
     * Per passenger type code pricing for a travel itinerary.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType[] $pTCFareBreakdown
     * @return self
     */
    public function setPTCFareBreakdown(array $pTCFareBreakdown)
    {
        $this->pTCFareBreakdown = $pTCFareBreakdown;
        return $this;
    }


}

