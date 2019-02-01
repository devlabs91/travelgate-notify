<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType;

/**
 * Class representing ShuttleAType
 */
class ShuttleAType
{

    /**
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[] $shuttleInfos
     */
    private $shuttleInfos = null;

    /**
     * A collection of operation schedules, used to define the hours of operation for the shuttle services.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OperationSchedulesType $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Adds as shuttleInfo
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType $shuttleInfo
     */
    public function addToShuttleInfos(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType $shuttleInfo)
    {
        $this->shuttleInfos[] = $shuttleInfo;
        return $this;
    }

    /**
     * isset shuttleInfos
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShuttleInfos($index)
    {
        return isset($this->shuttleInfos[$index]);
    }

    /**
     * unset shuttleInfos
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShuttleInfos($index)
    {
        unset($this->shuttleInfos[$index]);
    }

    /**
     * Gets as shuttleInfos
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[]
     */
    public function getShuttleInfos()
    {
        return $this->shuttleInfos;
    }

    /**
     * Sets a new shuttleInfos
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[] $shuttleInfos
     * @return self
     */
    public function setShuttleInfos(array $shuttleInfos)
    {
        $this->shuttleInfos = $shuttleInfos;
        return $this;
    }

    /**
     * Gets as operationSchedules
     *
     * A collection of operation schedules, used to define the hours of operation for the shuttle services.
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
     * A collection of operation schedules, used to define the hours of operation for the shuttle services.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OperationSchedulesType $operationSchedules
     * @return self
     */
    public function setOperationSchedules(\Devlabs91\TravelgateNotify\Models\Ota\OperationSchedulesType $operationSchedules)
    {
        $this->operationSchedules = $operationSchedules;
        return $this;
    }


}

