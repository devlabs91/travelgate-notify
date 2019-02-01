<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType;

use Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType;

/**
 * Class representing MiscellaneousChargeAType
 */
class MiscellaneousChargeAType extends VehicleChargeType
{

    /**
     * Information on this one specific miscellaneous charge, including a description, etc.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info
     */
    private $info = null;

    /**
     * Gets as info
     *
     * Information on this one specific miscellaneous charge, including a description, etc.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * Information on this one specific miscellaneous charge, including a description, etc.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info
     * @return self
     */
    public function setInfo(\Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info)
    {
        $this->info = $info;
        return $this;
    }


}

