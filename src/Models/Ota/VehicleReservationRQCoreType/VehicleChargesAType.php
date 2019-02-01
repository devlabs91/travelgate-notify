<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationRQCoreType;

/**
 * Class representing VehicleChargesAType
 */
class VehicleChargesAType
{

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $vehicleCharge
     */
    private $vehicleCharge = [
        
    ];

    /**
     * Adds as vehicleCharge
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType $vehicleCharge
     */
    public function addToVehicleCharge(\Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType $vehicleCharge)
    {
        $this->vehicleCharge[] = $vehicleCharge;
        return $this;
    }

    /**
     * isset vehicleCharge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleCharge($index)
    {
        return isset($this->vehicleCharge[$index]);
    }

    /**
     * unset vehicleCharge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleCharge($index)
    {
        unset($this->vehicleCharge[$index]);
    }

    /**
     * Gets as vehicleCharge
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[]
     */
    public function getVehicleCharge()
    {
        return $this->vehicleCharge;
    }

    /**
     * Sets a new vehicleCharge
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $vehicleCharge
     * @return self
     */
    public function setVehicleCharge(array $vehicleCharge)
    {
        $this->vehicleCharge = $vehicleCharge;
        return $this;
    }


}

