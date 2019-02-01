<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleAvailRSCoreType
 *
 * The VehicleAvailRSType complex type identifies the data that is considered common when describing the availability and rates of rental vehicles.
 * XSD Type: VehicleAvailRSCoreType
 */
class VehicleAvailRSCoreType
{

    /**
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalCoreType $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * A collection of vendors for which vehicle availability is available.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType[] $vehVendorAvails
     */
    private $vehVendorAvails = null;

    /**
     * Gets as vehRentalCore
     *
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalCoreType
     */
    public function getVehRentalCore()
    {
        return $this->vehRentalCore;
    }

    /**
     * Sets a new vehRentalCore
     *
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalCoreType $vehRentalCore
     * @return self
     */
    public function setVehRentalCore(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalCoreType $vehRentalCore)
    {
        $this->vehRentalCore = $vehRentalCore;
        return $this;
    }

    /**
     * Adds as vehVendorAvail
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType $vehVendorAvail
     */
    public function addToVehVendorAvails(\Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType $vehVendorAvail)
    {
        $this->vehVendorAvails[] = $vehVendorAvail;
        return $this;
    }

    /**
     * isset vehVendorAvails
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehVendorAvails($index)
    {
        return isset($this->vehVendorAvails[$index]);
    }

    /**
     * unset vehVendorAvails
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehVendorAvails($index)
    {
        unset($this->vehVendorAvails[$index]);
    }

    /**
     * Gets as vehVendorAvails
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType[]
     */
    public function getVehVendorAvails()
    {
        return $this->vehVendorAvails;
    }

    /**
     * Sets a new vehVendorAvails
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType[] $vehVendorAvails
     * @return self
     */
    public function setVehVendorAvails(array $vehVendorAvails)
    {
        $this->vehVendorAvails = $vehVendorAvails;
        return $this;
    }


}

