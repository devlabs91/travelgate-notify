<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleCoreType
 *
 * The VehicleCoreType complex type identifies the core data that is used to describe a vehicle.
 * XSD Type: VehicleCoreType
 */
class VehicleCoreType
{

    /**
     * @property bool $airConditionInd
     */
    private $airConditionInd = null;

    /**
     * @property string $transmissionType
     */
    private $transmissionType = null;

    /**
     * The kind of fuel the vehicle uses.
     *
     * @property string $fuelType
     */
    private $fuelType = null;

    /**
     * Used to define the drive type of a vehicle.
     *
     * @property string $driveType
     */
    private $driveType = null;

    /**
     * Type of vehicle, for example, truck, car
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleCoreType\VehTypeAType $vehType
     */
    private $vehType = null;

    /**
     * Class of vehicle, for example, intermediate, compact
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleCoreType\VehClassAType $vehClass
     */
    private $vehClass = null;

    /**
     * Gets as airConditionInd
     *
     * @return bool
     */
    public function getAirConditionInd()
    {
        return $this->airConditionInd;
    }

    /**
     * Sets a new airConditionInd
     *
     * @param bool $airConditionInd
     * @return self
     */
    public function setAirConditionInd($airConditionInd)
    {
        $this->airConditionInd = $airConditionInd;
        return $this;
    }

    /**
     * Gets as transmissionType
     *
     * @return string
     */
    public function getTransmissionType()
    {
        return $this->transmissionType;
    }

    /**
     * Sets a new transmissionType
     *
     * @param string $transmissionType
     * @return self
     */
    public function setTransmissionType($transmissionType)
    {
        $this->transmissionType = $transmissionType;
        return $this;
    }

    /**
     * Gets as fuelType
     *
     * The kind of fuel the vehicle uses.
     *
     * @return string
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Sets a new fuelType
     *
     * The kind of fuel the vehicle uses.
     *
     * @param string $fuelType
     * @return self
     */
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
        return $this;
    }

    /**
     * Gets as driveType
     *
     * Used to define the drive type of a vehicle.
     *
     * @return string
     */
    public function getDriveType()
    {
        return $this->driveType;
    }

    /**
     * Sets a new driveType
     *
     * Used to define the drive type of a vehicle.
     *
     * @param string $driveType
     * @return self
     */
    public function setDriveType($driveType)
    {
        $this->driveType = $driveType;
        return $this;
    }

    /**
     * Gets as vehType
     *
     * Type of vehicle, for example, truck, car
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleCoreType\VehTypeAType
     */
    public function getVehType()
    {
        return $this->vehType;
    }

    /**
     * Sets a new vehType
     *
     * Type of vehicle, for example, truck, car
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleCoreType\VehTypeAType $vehType
     * @return self
     */
    public function setVehType(\Devlabs91\TravelgateNotify\Models\Ota\VehicleCoreType\VehTypeAType $vehType)
    {
        $this->vehType = $vehType;
        return $this;
    }

    /**
     * Gets as vehClass
     *
     * Class of vehicle, for example, intermediate, compact
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleCoreType\VehClassAType
     */
    public function getVehClass()
    {
        return $this->vehClass;
    }

    /**
     * Sets a new vehClass
     *
     * Class of vehicle, for example, intermediate, compact
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleCoreType\VehClassAType $vehClass
     * @return self
     */
    public function setVehClass(\Devlabs91\TravelgateNotify\Models\Ota\VehicleCoreType\VehClassAType $vehClass)
    {
        $this->vehClass = $vehClass;
        return $this;
    }


}

