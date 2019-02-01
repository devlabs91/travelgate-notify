<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RoomRateType\FeaturesAType;

/**
 * Class representing FeatureAType
 */
class FeatureAType
{

    /**
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @property string $roomAmenity
     */
    private $roomAmenity = null;

    /**
     * Provides the quantity of the amenity in the room. When zero, the amenity is either unavailable or not allowed.
     *
     * @property int $quantity
     */
    private $quantity = null;

    /**
     * Specifies the type of view a room has. Refer to OpenTravel Code List Room View Type (RVT).
     *
     * @property string $roomViewCode
     */
    private $roomViewCode = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as roomAmenity
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @return string
     */
    public function getRoomAmenity()
    {
        return $this->roomAmenity;
    }

    /**
     * Sets a new roomAmenity
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @param string $roomAmenity
     * @return self
     */
    public function setRoomAmenity($roomAmenity)
    {
        $this->roomAmenity = $roomAmenity;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Provides the quantity of the amenity in the room. When zero, the amenity is either unavailable or not allowed.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Provides the quantity of the amenity in the room. When zero, the amenity is either unavailable or not allowed.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as roomViewCode
     *
     * Specifies the type of view a room has. Refer to OpenTravel Code List Room View Type (RVT).
     *
     * @return string
     */
    public function getRoomViewCode()
    {
        return $this->roomViewCode;
    }

    /**
     * Sets a new roomViewCode
     *
     * Specifies the type of view a room has. Refer to OpenTravel Code List Room View Type (RVT).
     *
     * @param string $roomViewCode
     * @return self
     */
    public function setRoomViewCode($roomViewCode)
    {
        $this->roomViewCode = $roomViewCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $description
     */
    public function addToDescription(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }


}

