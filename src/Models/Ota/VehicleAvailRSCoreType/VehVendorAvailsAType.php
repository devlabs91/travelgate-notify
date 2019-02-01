<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRSCoreType;

/**
 * Class representing VehVendorAvailsAType
 */
class VehVendorAvailsAType
{

    /**
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType[] $vehVendorAvail
     */
    private $vehVendorAvail = [
        
    ];

    /**
     * Adds as vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType $vehVendorAvail
     */
    public function addToVehVendorAvail(\Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType $vehVendorAvail)
    {
        $this->vehVendorAvail[] = $vehVendorAvail;
        return $this;
    }

    /**
     * isset vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehVendorAvail($index)
    {
        return isset($this->vehVendorAvail[$index]);
    }

    /**
     * unset vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehVendorAvail($index)
    {
        unset($this->vehVendorAvail[$index]);
    }

    /**
     * Gets as vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType[]
     */
    public function getVehVendorAvail()
    {
        return $this->vehVendorAvail;
    }

    /**
     * Sets a new vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType[] $vehVendorAvail
     * @return self
     */
    public function setVehVendorAvail(array $vehVendorAvail)
    {
        $this->vehVendorAvail = $vehVendorAvail;
        return $this;
    }


}

