<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType;

/**
 * Class representing VehiclesAType
 */
class VehiclesAType
{

    /**
     * This element may be used to clarify the vehicle associated with this charge, if the charge varies by vehicle type.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType[] $vehicle
     */
    private $vehicle = [
        
    ];

    /**
     * Adds as vehicle
     *
     * This element may be used to clarify the vehicle associated with this charge, if the charge varies by vehicle type.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType $vehicle
     */
    public function addToVehicle(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType $vehicle)
    {
        $this->vehicle[] = $vehicle;
        return $this;
    }

    /**
     * isset vehicle
     *
     * This element may be used to clarify the vehicle associated with this charge, if the charge varies by vehicle type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicle($index)
    {
        return isset($this->vehicle[$index]);
    }

    /**
     * unset vehicle
     *
     * This element may be used to clarify the vehicle associated with this charge, if the charge varies by vehicle type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicle($index)
    {
        unset($this->vehicle[$index]);
    }

    /**
     * Gets as vehicle
     *
     * This element may be used to clarify the vehicle associated with this charge, if the charge varies by vehicle type.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * This element may be used to clarify the vehicle associated with this charge, if the charge varies by vehicle type.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType[] $vehicle
     * @return self
     */
    public function setVehicle(array $vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }


}

