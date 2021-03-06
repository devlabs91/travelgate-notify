<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleLocationVehiclesType
 *
 * The Vehicle Location Vehicles Type is used to define information on the vehicles that are offered for rental at this facility.
 * XSD Type: VehicleLocationVehiclesType
 */
class VehicleLocationVehiclesType
{

    /**
     * Collection of descriptions about various aspects of the vehicles.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType[] $vehicleInfos
     */
    private $vehicleInfos = null;

    /**
     * Specific information about a vehicle that is offered for rental at this facility. This element may repeat to identify all vehicles that may be rented from this facility.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleAType[] $vehicle
     */
    private $vehicle = [
        
    ];

    /**
     * Adds as vehicleInfo
     *
     * Collection of descriptions about various aspects of the vehicles.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType $vehicleInfo
     */
    public function addToVehicleInfos(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType $vehicleInfo)
    {
        $this->vehicleInfos[] = $vehicleInfo;
        return $this;
    }

    /**
     * isset vehicleInfos
     *
     * Collection of descriptions about various aspects of the vehicles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleInfos($index)
    {
        return isset($this->vehicleInfos[$index]);
    }

    /**
     * unset vehicleInfos
     *
     * Collection of descriptions about various aspects of the vehicles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleInfos($index)
    {
        unset($this->vehicleInfos[$index]);
    }

    /**
     * Gets as vehicleInfos
     *
     * Collection of descriptions about various aspects of the vehicles.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType[]
     */
    public function getVehicleInfos()
    {
        return $this->vehicleInfos;
    }

    /**
     * Sets a new vehicleInfos
     *
     * Collection of descriptions about various aspects of the vehicles.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType[] $vehicleInfos
     * @return self
     */
    public function setVehicleInfos(array $vehicleInfos)
    {
        $this->vehicleInfos = $vehicleInfos;
        return $this;
    }

    /**
     * Adds as vehicle
     *
     * Specific information about a vehicle that is offered for rental at this facility. This element may repeat to identify all vehicles that may be rented from this facility.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleAType $vehicle
     */
    public function addToVehicle(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleAType $vehicle)
    {
        $this->vehicle[] = $vehicle;
        return $this;
    }

    /**
     * isset vehicle
     *
     * Specific information about a vehicle that is offered for rental at this facility. This element may repeat to identify all vehicles that may be rented from this facility.
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
     * Specific information about a vehicle that is offered for rental at this facility. This element may repeat to identify all vehicles that may be rented from this facility.
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
     * Specific information about a vehicle that is offered for rental at this facility. This element may repeat to identify all vehicles that may be rented from this facility.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleAType[]
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Specific information about a vehicle that is offered for rental at this facility. This element may repeat to identify all vehicles that may be rented from this facility.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleAType[] $vehicle
     * @return self
     */
    public function setVehicle(array $vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }


}

