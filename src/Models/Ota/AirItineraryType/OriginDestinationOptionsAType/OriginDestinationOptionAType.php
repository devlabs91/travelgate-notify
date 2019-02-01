<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType\OriginDestinationOptionsAType;

use Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationOptionType;

/**
 * Class representing OriginDestinationOptionAType
 */
class OriginDestinationOptionAType extends OriginDestinationOptionType
{

    /**
     * When a PricedItinerary element contains multiple solutions and a single price, this attribute identifies the OriginDestinationPair from the request.
     *
     * @property int $refNumber
     */
    private $refNumber = null;

    /**
     * Gets as refNumber
     *
     * When a PricedItinerary element contains multiple solutions and a single price, this attribute identifies the OriginDestinationPair from the request.
     *
     * @return int
     */
    public function getRefNumber()
    {
        return $this->refNumber;
    }

    /**
     * Sets a new refNumber
     *
     * When a PricedItinerary element contains multiple solutions and a single price, this attribute identifies the OriginDestinationPair from the request.
     *
     * @param int $refNumber
     * @return self
     */
    public function setRefNumber($refNumber)
    {
        $this->refNumber = $refNumber;
        return $this;
    }


}

