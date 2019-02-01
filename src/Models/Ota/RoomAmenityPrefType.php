<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing RoomAmenityPrefType
 *
 * Indicates preferences for hotel room amenities.
 * XSD Type: RoomAmenityPrefType
 */
class RoomAmenityPrefType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Identifes the types of room amenities offered by the property. Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @property string $roomAmenity
     */
    private $roomAmenity = null;

    /**
     * This attribute is used to explicitly define whether an amenity or service is offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with RoomAmenity.
     *
     * @property string $existsCode
     */
    private $existsCode = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property int $quantity
     */
    private $quantity = null;

    /**
     * Used to designate the quality level of the RoomAmenity e.g., premium, deluxe, standard, economy.
     *
     * @property string $qualityLevel
     */
    private $qualityLevel = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;
        return $this;
    }

    /**
     * Gets as roomAmenity
     *
     * Identifes the types of room amenities offered by the property. Refer to OpenTravel Code List Room Amenity Type (RMA).
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
     * Identifes the types of room amenities offered by the property. Refer to OpenTravel Code List Room Amenity Type (RMA).
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
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with RoomAmenity.
     *
     * @return string
     */
    public function getExistsCode()
    {
        return $this->existsCode;
    }

    /**
     * Sets a new existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with RoomAmenity.
     *
     * @param string $existsCode
     * @return self
     */
    public function setExistsCode($existsCode)
    {
        $this->existsCode = $existsCode;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
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
     * Used to define the quantity for an associated element or attribute.
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
     * Gets as qualityLevel
     *
     * Used to designate the quality level of the RoomAmenity e.g., premium, deluxe, standard, economy.
     *
     * @return string
     */
    public function getQualityLevel()
    {
        return $this->qualityLevel;
    }

    /**
     * Sets a new qualityLevel
     *
     * Used to designate the quality level of the RoomAmenity e.g., premium, deluxe, standard, economy.
     *
     * @param string $qualityLevel
     * @return self
     */
    public function setQualityLevel($qualityLevel)
    {
        $this->qualityLevel = $qualityLevel;
        return $this;
    }


}

