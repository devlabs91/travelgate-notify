<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RoomTypeType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{

    /**
     * Used to provide room amenity information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType[] $amenity
     */
    private $amenity = [
        
    ];

    /**
     * Adds as amenity
     *
     * Used to provide room amenity information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType $amenity
     */
    public function addToAmenity(\Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType $amenity)
    {
        $this->amenity[] = $amenity;
        return $this;
    }

    /**
     * isset amenity
     *
     * Used to provide room amenity information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAmenity($index)
    {
        return isset($this->amenity[$index]);
    }

    /**
     * unset amenity
     *
     * Used to provide room amenity information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAmenity($index)
    {
        unset($this->amenity[$index]);
    }

    /**
     * Gets as amenity
     *
     * Used to provide room amenity information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * Used to provide room amenity information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;
        return $this;
    }


}

