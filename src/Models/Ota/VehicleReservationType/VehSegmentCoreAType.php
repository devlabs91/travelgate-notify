<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationType;

use Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentCoreType;

/**
 * Class representing VehSegmentCoreAType
 */
class VehSegmentCoreAType extends VehicleSegmentCoreType
{

    /**
     * When true, indicates that the options that may have changed since the availability response do not affect the rate.
     *
     * @property bool $optionChangeAllowedIndicator
     */
    private $optionChangeAllowedIndicator = null;

    /**
     * Gets as optionChangeAllowedIndicator
     *
     * When true, indicates that the options that may have changed since the availability response do not affect the rate.
     *
     * @return bool
     */
    public function getOptionChangeAllowedIndicator()
    {
        return $this->optionChangeAllowedIndicator;
    }

    /**
     * Sets a new optionChangeAllowedIndicator
     *
     * When true, indicates that the options that may have changed since the availability response do not affect the rate.
     *
     * @param bool $optionChangeAllowedIndicator
     * @return self
     */
    public function setOptionChangeAllowedIndicator($optionChangeAllowedIndicator)
    {
        $this->optionChangeAllowedIndicator = $optionChangeAllowedIndicator;
        return $this;
    }


}

