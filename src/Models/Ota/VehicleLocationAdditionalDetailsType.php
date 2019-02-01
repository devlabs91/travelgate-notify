<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleLocationAdditionalDetailsType
 *
 * The VehicleLocationAdditionalDetailsType complex type defines the supplemental information that describes a vehicle rental facility. Such information may include the operation schedules and services offered.
 * XSD Type: VehicleLocationAdditionalDetailsType
 */
class VehicleLocationAdditionalDetailsType
{

    /**
     * Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar messages.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationInformationType[] $vehRentLocInfos
     */
    private $vehRentLocInfos = null;

    /**
     * Descriptive information about where the vehicles are parked.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleWhereAtFacilityType $parkLocation
     */
    private $parkLocation = null;

    /**
     * Descriptive information about where the rental counter is located.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleWhereAtFacilityType $counterLocation
     */
    private $counterLocation = null;

    /**
     * A collection of operation schedules, used to define the hours of operation for this rental facility.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OperationSchedulesType $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Information on the shuttle services associated with this location. Some locations use a shuttle bus to transfer the customers from an airport terminal to the rental facility.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType $shuttle
     */
    private $shuttle = null;

    /**
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[] $oneWayDropLocations
     */
    private $oneWayDropLocations = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as vehRentLocInfo
     *
     * Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar messages.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationInformationType $vehRentLocInfo
     */
    public function addToVehRentLocInfos(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationInformationType $vehRentLocInfo)
    {
        $this->vehRentLocInfos[] = $vehRentLocInfo;
        return $this;
    }

    /**
     * isset vehRentLocInfos
     *
     * Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar messages.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehRentLocInfos($index)
    {
        return isset($this->vehRentLocInfos[$index]);
    }

    /**
     * unset vehRentLocInfos
     *
     * Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar messages.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehRentLocInfos($index)
    {
        unset($this->vehRentLocInfos[$index]);
    }

    /**
     * Gets as vehRentLocInfos
     *
     * Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar messages.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationInformationType[]
     */
    public function getVehRentLocInfos()
    {
        return $this->vehRentLocInfos;
    }

    /**
     * Sets a new vehRentLocInfos
     *
     * Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar messages.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationInformationType[] $vehRentLocInfos
     * @return self
     */
    public function setVehRentLocInfos(array $vehRentLocInfos)
    {
        $this->vehRentLocInfos = $vehRentLocInfos;
        return $this;
    }

    /**
     * Gets as parkLocation
     *
     * Descriptive information about where the vehicles are parked.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleWhereAtFacilityType
     */
    public function getParkLocation()
    {
        return $this->parkLocation;
    }

    /**
     * Sets a new parkLocation
     *
     * Descriptive information about where the vehicles are parked.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleWhereAtFacilityType $parkLocation
     * @return self
     */
    public function setParkLocation(\Devlabs91\TravelgateNotify\Models\Ota\VehicleWhereAtFacilityType $parkLocation)
    {
        $this->parkLocation = $parkLocation;
        return $this;
    }

    /**
     * Gets as counterLocation
     *
     * Descriptive information about where the rental counter is located.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleWhereAtFacilityType
     */
    public function getCounterLocation()
    {
        return $this->counterLocation;
    }

    /**
     * Sets a new counterLocation
     *
     * Descriptive information about where the rental counter is located.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleWhereAtFacilityType $counterLocation
     * @return self
     */
    public function setCounterLocation(\Devlabs91\TravelgateNotify\Models\Ota\VehicleWhereAtFacilityType $counterLocation)
    {
        $this->counterLocation = $counterLocation;
        return $this;
    }

    /**
     * Gets as operationSchedules
     *
     * A collection of operation schedules, used to define the hours of operation for this rental facility.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OperationSchedulesType
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * A collection of operation schedules, used to define the hours of operation for this rental facility.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OperationSchedulesType $operationSchedules
     * @return self
     */
    public function setOperationSchedules(\Devlabs91\TravelgateNotify\Models\Ota\OperationSchedulesType $operationSchedules)
    {
        $this->operationSchedules = $operationSchedules;
        return $this;
    }

    /**
     * Gets as shuttle
     *
     * Information on the shuttle services associated with this location. Some locations use a shuttle bus to transfer the customers from an airport terminal to the rental facility.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType
     */
    public function getShuttle()
    {
        return $this->shuttle;
    }

    /**
     * Sets a new shuttle
     *
     * Information on the shuttle services associated with this location. Some locations use a shuttle bus to transfer the customers from an airport terminal to the rental facility.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType $shuttle
     * @return self
     */
    public function setShuttle(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType $shuttle)
    {
        $this->shuttle = $shuttle;
        return $this;
    }

    /**
     * Adds as oneWayDropLocation
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType $oneWayDropLocation
     */
    public function addToOneWayDropLocations(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType $oneWayDropLocation)
    {
        $this->oneWayDropLocations[] = $oneWayDropLocation;
        return $this;
    }

    /**
     * isset oneWayDropLocations
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOneWayDropLocations($index)
    {
        return isset($this->oneWayDropLocations[$index]);
    }

    /**
     * unset oneWayDropLocations
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOneWayDropLocations($index)
    {
        unset($this->oneWayDropLocations[$index]);
    }

    /**
     * Gets as oneWayDropLocations
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[]
     */
    public function getOneWayDropLocations()
    {
        return $this->oneWayDropLocations;
    }

    /**
     * Sets a new oneWayDropLocations
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[] $oneWayDropLocations
     * @return self
     */
    public function setOneWayDropLocations(array $oneWayDropLocations)
    {
        $this->oneWayDropLocations = $oneWayDropLocations;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }


}

