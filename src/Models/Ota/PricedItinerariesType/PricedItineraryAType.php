<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PricedItinerariesType;

use Devlabs91\TravelgateNotify\Models\Ota\PricedItineraryType;

/**
 * Class representing PricedItineraryAType
 */
class PricedItineraryAType extends PricedItineraryType
{

    /**
     * This attribute refers back to origin destination information in the OTA_AirLowFareSearchRQ message.
     *
     * @property int $originDestinationRefNumber
     */
    private $originDestinationRefNumber = null;

    /**
     * Gets as originDestinationRefNumber
     *
     * This attribute refers back to origin destination information in the OTA_AirLowFareSearchRQ message.
     *
     * @return int
     */
    public function getOriginDestinationRefNumber()
    {
        return $this->originDestinationRefNumber;
    }

    /**
     * Sets a new originDestinationRefNumber
     *
     * This attribute refers back to origin destination information in the OTA_AirLowFareSearchRQ message.
     *
     * @param int $originDestinationRefNumber
     * @return self
     */
    public function setOriginDestinationRefNumber($originDestinationRefNumber)
    {
        $this->originDestinationRefNumber = $originDestinationRefNumber;
        return $this;
    }


}

