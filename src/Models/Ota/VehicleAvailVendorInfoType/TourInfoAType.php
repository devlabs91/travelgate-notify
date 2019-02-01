<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailVendorInfoType;

use Devlabs91\TravelgateNotify\Models\Ota\VehicleTourInfoType;

/**
 * Class representing TourInfoAType
 */
class TourInfoAType extends VehicleTourInfoType
{

    /**
     * A reference placeholder for this tour info.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * A reference placeholder for this tour info.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A reference placeholder for this tour info.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }


}

