<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType;

/**
 * Class representing ShuttleInfosAType
 */
class ShuttleInfosAType
{

    /**
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[] $shuttleInfo
     */
    private $shuttleInfo = [
        
    ];

    /**
     * Adds as shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType $shuttleInfo
     */
    public function addToShuttleInfo(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType $shuttleInfo)
    {
        $this->shuttleInfo[] = $shuttleInfo;
        return $this;
    }

    /**
     * isset shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShuttleInfo($index)
    {
        return isset($this->shuttleInfo[$index]);
    }

    /**
     * unset shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShuttleInfo($index)
    {
        unset($this->shuttleInfo[$index]);
    }

    /**
     * Gets as shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[]
     */
    public function getShuttleInfo()
    {
        return $this->shuttleInfo;
    }

    /**
     * Sets a new shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[] $shuttleInfo
     * @return self
     */
    public function setShuttleInfo(array $shuttleInfo)
    {
        $this->shuttleInfo = $shuttleInfo;
        return $this;
    }


}

