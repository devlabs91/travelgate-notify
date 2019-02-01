<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\HotelAdditionalChargesType;

/**
 * Class representing AdditionalChargeAType
 */
class AdditionalChargeAType
{

    /**
     * Identifes the types of room amenities to which a charge applies. Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @property string $roomAmenityCode
     */
    private $roomAmenityCode = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property int $quantity
     */
    private $quantity = null;

    /**
     * The amount charged for an amenity or service.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TotalType $amount
     */
    private $amount = null;

    /**
     * Gets as roomAmenityCode
     *
     * Identifes the types of room amenities to which a charge applies. Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @return string
     */
    public function getRoomAmenityCode()
    {
        return $this->roomAmenityCode;
    }

    /**
     * Sets a new roomAmenityCode
     *
     * Identifes the types of room amenities to which a charge applies. Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @param string $roomAmenityCode
     * @return self
     */
    public function setRoomAmenityCode($roomAmenityCode)
    {
        $this->roomAmenityCode = $roomAmenityCode;
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
     * Gets as amount
     *
     * The amount charged for an amenity or service.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TotalType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The amount charged for an amenity or service.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TotalType $amount
     * @return self
     */
    public function setAmount(\Devlabs91\TravelgateNotify\Models\Ota\TotalType $amount)
    {
        $this->amount = $amount;
        return $this;
    }


}

