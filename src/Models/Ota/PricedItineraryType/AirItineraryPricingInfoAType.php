<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PricedItineraryType;

use Devlabs91\TravelgateNotify\Models\Ota\AirItineraryPricingInfoType;

/**
 * Class representing AirItineraryPricingInfoAType
 */
class AirItineraryPricingInfoAType extends AirItineraryPricingInfoType
{

    /**
     * If true re-pricing of the itinerary is required.
     *
     * @property bool $repriceRequired
     */
    private $repriceRequired = null;

    /**
     * Gets as repriceRequired
     *
     * If true re-pricing of the itinerary is required.
     *
     * @return bool
     */
    public function getRepriceRequired()
    {
        return $this->repriceRequired;
    }

    /**
     * Sets a new repriceRequired
     *
     * If true re-pricing of the itinerary is required.
     *
     * @param bool $repriceRequired
     * @return self
     */
    public function setRepriceRequired($repriceRequired)
    {
        $this->repriceRequired = $repriceRequired;
        return $this;
    }


}

