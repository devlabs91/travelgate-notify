<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VehPrefsAType;

use Devlabs91\TravelgateNotify\Models\Ota\VehiclePrefType;

/**
 * Class representing VehPrefAType
 */
class VehPrefAType extends VehiclePrefType
{

    /**
     * When true, a higher class of vehicle than those specified, may be returned.
     *
     * @property bool $upSellInd
     */
    private $upSellInd = null;

    /**
     * Gets as upSellInd
     *
     * When true, a higher class of vehicle than those specified, may be returned.
     *
     * @return bool
     */
    public function getUpSellInd()
    {
        return $this->upSellInd;
    }

    /**
     * Sets a new upSellInd
     *
     * When true, a higher class of vehicle than those specified, may be returned.
     *
     * @param bool $upSellInd
     * @return self
     */
    public function setUpSellInd($upSellInd)
    {
        $this->upSellInd = $upSellInd;
        return $this;
    }


}

