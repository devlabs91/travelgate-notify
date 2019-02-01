<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PropertyValueMatchType;

/**
 * Class representing AmenitiesAType
 */
class AmenitiesAType
{

    /**
     * This provides an area to pass amenity information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PropertyValueMatchType\AmenitiesAType\AmenityAType[] $amenity
     */
    private $amenity = [
        
    ];

    /**
     * Adds as amenity
     *
     * This provides an area to pass amenity information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PropertyValueMatchType\AmenitiesAType\AmenityAType $amenity
     */
    public function addToAmenity(\Devlabs91\TravelgateNotify\Models\Ota\PropertyValueMatchType\AmenitiesAType\AmenityAType $amenity)
    {
        $this->amenity[] = $amenity;
        return $this;
    }

    /**
     * isset amenity
     *
     * This provides an area to pass amenity information.
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
     * This provides an area to pass amenity information.
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
     * This provides an area to pass amenity information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PropertyValueMatchType\AmenitiesAType\AmenityAType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * This provides an area to pass amenity information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PropertyValueMatchType\AmenitiesAType\AmenityAType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;
        return $this;
    }


}

