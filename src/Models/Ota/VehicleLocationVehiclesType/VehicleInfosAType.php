<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType;

/**
 * Class representing VehicleInfosAType
 */
class VehicleInfosAType
{

    /**
     * Textual description about one specific aspect of the vehicles, for example, advanced booking needs, etc
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType[] $vehicleInfo
     */
    private $vehicleInfo = [
        
    ];

    /**
     * Adds as vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example, advanced booking needs, etc
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType $vehicleInfo
     */
    public function addToVehicleInfo(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType $vehicleInfo)
    {
        $this->vehicleInfo[] = $vehicleInfo;
        return $this;
    }

    /**
     * isset vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example, advanced booking needs, etc
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleInfo($index)
    {
        return isset($this->vehicleInfo[$index]);
    }

    /**
     * unset vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example, advanced booking needs, etc
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleInfo($index)
    {
        unset($this->vehicleInfo[$index]);
    }

    /**
     * Gets as vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example, advanced booking needs, etc
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType[]
     */
    public function getVehicleInfo()
    {
        return $this->vehicleInfo;
    }

    /**
     * Sets a new vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example, advanced booking needs, etc
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType[] $vehicleInfo
     * @return self
     */
    public function setVehicleInfo(array $vehicleInfo)
    {
        $this->vehicleInfo = $vehicleInfo;
        return $this;
    }


}

