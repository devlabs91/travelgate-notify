<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType\VehAvailsAType;

/**
 * Class representing VehAvailAType
 */
class VehAvailAType
{

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType $vehAvailCore
     */
    private $vehAvailCore = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailAdditionalInfoType $vehAvailInfo
     */
    private $vehAvailInfo = null;

    /**
     * Specifies the advance booking requirements.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType\AdvanceBookingAType $advanceBooking
     */
    private $advanceBooking = null;

    /**
     * Gets as vehAvailCore
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType
     */
    public function getVehAvailCore()
    {
        return $this->vehAvailCore;
    }

    /**
     * Sets a new vehAvailCore
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType $vehAvailCore
     * @return self
     */
    public function setVehAvailCore(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType $vehAvailCore)
    {
        $this->vehAvailCore = $vehAvailCore;
        return $this;
    }

    /**
     * Gets as vehAvailInfo
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailAdditionalInfoType
     */
    public function getVehAvailInfo()
    {
        return $this->vehAvailInfo;
    }

    /**
     * Sets a new vehAvailInfo
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailAdditionalInfoType $vehAvailInfo
     * @return self
     */
    public function setVehAvailInfo(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailAdditionalInfoType $vehAvailInfo)
    {
        $this->vehAvailInfo = $vehAvailInfo;
        return $this;
    }

    /**
     * Gets as advanceBooking
     *
     * Specifies the advance booking requirements.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType\AdvanceBookingAType
     */
    public function getAdvanceBooking()
    {
        return $this->advanceBooking;
    }

    /**
     * Sets a new advanceBooking
     *
     * Specifies the advance booking requirements.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType\AdvanceBookingAType $advanceBooking
     * @return self
     */
    public function setAdvanceBooking(\Devlabs91\TravelgateNotify\Models\Ota\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType\AdvanceBookingAType $advanceBooking)
    {
        $this->advanceBooking = $advanceBooking;
        return $this;
    }


}

