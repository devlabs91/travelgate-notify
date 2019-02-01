<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType;

/**
 * Class representing VehiclesAType
 */
class VehiclesAType
{

    /**
     * To identify a vehicle type associated with additional driver information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType[] $vehicle
     */
    private $vehicle = [
        
    ];

    /**
     * Adds as vehicle
     *
     * To identify a vehicle type associated with additional driver information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType $vehicle
     */
    public function addToVehicle(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType $vehicle)
    {
        $this->vehicle[] = $vehicle;
        return $this;
    }

    /**
     * isset vehicle
     *
     * To identify a vehicle type associated with additional driver information.
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
     * To identify a vehicle type associated with additional driver information.
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
     * To identify a vehicle type associated with additional driver information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * To identify a vehicle type associated with additional driver information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType\VehicleAType[] $vehicle
     * @return self
     */
    public function setVehicle(array $vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }


}

