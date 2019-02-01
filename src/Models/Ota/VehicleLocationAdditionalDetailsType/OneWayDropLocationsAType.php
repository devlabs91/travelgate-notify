<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType;

/**
 * Class representing OneWayDropLocationsAType
 */
class OneWayDropLocationsAType
{

    /**
     * Location where a one way drop is allowed.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[] $oneWayDropLocation
     */
    private $oneWayDropLocation = [
        
    ];

    /**
     * Adds as oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType $oneWayDropLocation
     */
    public function addToOneWayDropLocation(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType $oneWayDropLocation)
    {
        $this->oneWayDropLocation[] = $oneWayDropLocation;
        return $this;
    }

    /**
     * isset oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOneWayDropLocation($index)
    {
        return isset($this->oneWayDropLocation[$index]);
    }

    /**
     * unset oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOneWayDropLocation($index)
    {
        unset($this->oneWayDropLocation[$index]);
    }

    /**
     * Gets as oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[]
     */
    public function getOneWayDropLocation()
    {
        return $this->oneWayDropLocation;
    }

    /**
     * Sets a new oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[] $oneWayDropLocation
     * @return self
     */
    public function setOneWayDropLocation(array $oneWayDropLocation)
    {
        $this->oneWayDropLocation = $oneWayDropLocation;
        return $this;
    }


}

