<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleVendorAvailabilityType
 *
 * The VehicleVendorAvailabilityType complex type identifies the data that describes the availability of one or more vehicles for a specific vendor, along with supplemental information about the vendor and the facilities of that vendor.
 * XSD Type: VehicleVendorAvailabilityType
 */
class VehicleVendorAvailabilityType
{

    /**
     * Information on the vendor associated with this availability of vehicles
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $vendor
     */
    private $vendor = null;

    /**
     * A collection of vehicles along with their availability and associated rate information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType\VehAvailsAType $vehAvails
     */
    private $vehAvails = null;

    /**
     * Supplemental information associated with the vendor and the availability of the vehicles.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailVendorInfoType $info
     */
    private $info = null;

    /**
     * Gets as vendor
     *
     * Information on the vendor associated with this availability of vehicles
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * Information on the vendor associated with this availability of vehicles
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $vendor
     * @return self
     */
    public function setVendor(\Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $vendor)
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * Gets as vehAvails
     *
     * A collection of vehicles along with their availability and associated rate information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType\VehAvailsAType
     */
    public function getVehAvails()
    {
        return $this->vehAvails;
    }

    /**
     * Sets a new vehAvails
     *
     * A collection of vehicles along with their availability and associated rate information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType\VehAvailsAType $vehAvails
     * @return self
     */
    public function setVehAvails(\Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType\VehAvailsAType $vehAvails)
    {
        $this->vehAvails = $vehAvails;
        return $this;
    }

    /**
     * Gets as info
     *
     * Supplemental information associated with the vendor and the availability of the vehicles.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailVendorInfoType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * Supplemental information associated with the vendor and the availability of the vehicles.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailVendorInfoType $info
     * @return self
     */
    public function setInfo(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailVendorInfoType $info)
    {
        $this->info = $info;
        return $this;
    }


}

