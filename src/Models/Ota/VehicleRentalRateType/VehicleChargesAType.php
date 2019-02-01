<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType;

/**
 * Class representing VehicleChargesAType
 */
class VehicleChargesAType
{

    /**
     * Detailed information on one specific charge including an indication of the type of charge.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $vehicleCharge
     */
    private $vehicleCharge = [
        
    ];

    /**
     * Adds as vehicleCharge
     *
     * Detailed information on one specific charge including an indication of the type of charge.
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
     * Detailed information on one specific charge including an indication of the type of charge.
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
     * Detailed information on one specific charge including an indication of the type of charge.
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
     * Detailed information on one specific charge including an indication of the type of charge.
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
     * Detailed information on one specific charge including an indication of the type of charge.
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

