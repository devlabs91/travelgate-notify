<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing RoomTypeLiteType
 *
 * Summary version of the RoomTypeType, initially created for the Travel Itinerary Message set.
 * XSD Type: RoomTypeLiteType
 */
class RoomTypeLiteType
{

    /**
     * Specfic system room type code, ex: A1K, A1Q etc.
     *
     * @property string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * @property int $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $roomDescription
     */
    private $roomDescription = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType[] $amenity
     */
    private $amenity = [
        
    ];

    /**
     * Gets as roomTypeCode
     *
     * Specfic system room type code, ex: A1K, A1Q etc.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * Specfic system room type code, ex: A1K, A1Q etc.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;
        return $this;
    }

    /**
     * Gets as numberOfUnits
     *
     * @return int
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * @param int $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;
        return $this;
    }

    /**
     * Gets as roomDescription
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType
     */
    public function getRoomDescription()
    {
        return $this->roomDescription;
    }

    /**
     * Sets a new roomDescription
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $roomDescription
     * @return self
     */
    public function setRoomDescription(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $roomDescription)
    {
        $this->roomDescription = $roomDescription;
        return $this;
    }

    /**
     * Adds as amenity
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
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
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

