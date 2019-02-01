<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType;

/**
 * Class representing VehiclesAType
 */
class VehiclesAType
{

    /**
     * Identifies a specific vehicle type.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType[] $vehicle
     */
    private $vehicle = [
        
    ];

    /**
     * Adds as vehicle
     *
     * Identifies a specific vehicle type.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType $vehicle
     */
    public function addToVehicle(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType $vehicle)
    {
        $this->vehicle[] = $vehicle;
        return $this;
    }

    /**
     * isset vehicle
     *
     * Identifies a specific vehicle type.
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
     * Identifies a specific vehicle type.
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
     * Identifies a specific vehicle type.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Identifies a specific vehicle type.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType[] $vehicle
     * @return self
     */
    public function setVehicle(array $vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }


}

