<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing RoomStayLiteType
 *
 * Summary version of the RoomStayType, initially created for the Travel Itinerary Message set.
 * XSD Type: RoomStayLiteType
 */
class RoomStayLiteType
{

    /**
     * Room type for reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomTypeLiteType[] $roomTypes
     */
    private $roomTypes = null;

    /**
     * Rate Plan info.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RatePlanLiteType[] $ratePlans
     */
    private $ratePlans = null;

    /**
     * Reservation rate(s).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomRateLiteType[] $roomRates
     */
    private $roomRates = null;

    /**
     * Number of guests associated with this reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GuestCountType $guestCounts
     */
    private $guestCounts = null;

    /**
     * Date and time of check-in and check-out.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\DateTimeSpanType $timeSpan
     */
    private $timeSpan = null;

    /**
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType[] $guarantee
     */
    private $guarantee = [
        
    ];

    /**
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentLiteType[] $depositPayment
     */
    private $depositPayment = [
        
    ];

    /**
     * Basic hotel property information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomStayLiteType\BasicPropertyInfoAType $basicPropertyInfo
     */
    private $basicPropertyInfo = null;

    /**
     * Adds as roomType
     *
     * Room type for reservation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomTypeLiteType $roomType
     */
    public function addToRoomTypes(\Devlabs91\TravelgateNotify\Models\Ota\RoomTypeLiteType $roomType)
    {
        $this->roomTypes[] = $roomType;
        return $this;
    }

    /**
     * isset roomTypes
     *
     * Room type for reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomTypes($index)
    {
        return isset($this->roomTypes[$index]);
    }

    /**
     * unset roomTypes
     *
     * Room type for reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomTypes($index)
    {
        unset($this->roomTypes[$index]);
    }

    /**
     * Gets as roomTypes
     *
     * Room type for reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomTypeLiteType[]
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * Room type for reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomTypeLiteType[] $roomTypes
     * @return self
     */
    public function setRoomTypes(array $roomTypes)
    {
        $this->roomTypes = $roomTypes;
        return $this;
    }

    /**
     * Adds as ratePlan
     *
     * Rate Plan info.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanLiteType $ratePlan
     */
    public function addToRatePlans(\Devlabs91\TravelgateNotify\Models\Ota\RatePlanLiteType $ratePlan)
    {
        $this->ratePlans[] = $ratePlan;
        return $this;
    }

    /**
     * isset ratePlans
     *
     * Rate Plan info.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlans($index)
    {
        return isset($this->ratePlans[$index]);
    }

    /**
     * unset ratePlans
     *
     * Rate Plan info.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlans($index)
    {
        unset($this->ratePlans[$index]);
    }

    /**
     * Gets as ratePlans
     *
     * Rate Plan info.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RatePlanLiteType[]
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * Rate Plan info.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanLiteType[] $ratePlans
     * @return self
     */
    public function setRatePlans(array $ratePlans)
    {
        $this->ratePlans = $ratePlans;
        return $this;
    }

    /**
     * Adds as roomRate
     *
     * Reservation rate(s).
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomRateLiteType $roomRate
     */
    public function addToRoomRates(\Devlabs91\TravelgateNotify\Models\Ota\RoomRateLiteType $roomRate)
    {
        $this->roomRates[] = $roomRate;
        return $this;
    }

    /**
     * isset roomRates
     *
     * Reservation rate(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomRates($index)
    {
        return isset($this->roomRates[$index]);
    }

    /**
     * unset roomRates
     *
     * Reservation rate(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomRates($index)
    {
        unset($this->roomRates[$index]);
    }

    /**
     * Gets as roomRates
     *
     * Reservation rate(s).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomRateLiteType[]
     */
    public function getRoomRates()
    {
        return $this->roomRates;
    }

    /**
     * Sets a new roomRates
     *
     * Reservation rate(s).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomRateLiteType[] $roomRates
     * @return self
     */
    public function setRoomRates(array $roomRates)
    {
        $this->roomRates = $roomRates;
        return $this;
    }

    /**
     * Gets as guestCounts
     *
     * Number of guests associated with this reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\GuestCountType
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * Number of guests associated with this reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuestCountType $guestCounts
     * @return self
     */
    public function setGuestCounts(\Devlabs91\TravelgateNotify\Models\Ota\GuestCountType $guestCounts)
    {
        $this->guestCounts = $guestCounts;
        return $this;
    }

    /**
     * Gets as timeSpan
     *
     * Date and time of check-in and check-out.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\DateTimeSpanType
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }

    /**
     * Sets a new timeSpan
     *
     * Date and time of check-in and check-out.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\DateTimeSpanType $timeSpan
     * @return self
     */
    public function setTimeSpan(\Devlabs91\TravelgateNotify\Models\Ota\DateTimeSpanType $timeSpan)
    {
        $this->timeSpan = $timeSpan;
        return $this;
    }

    /**
     * Adds as guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType $guarantee
     */
    public function addToGuarantee(\Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType $guarantee)
    {
        $this->guarantee[] = $guarantee;
        return $this;
    }

    /**
     * isset guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuarantee($index)
    {
        return isset($this->guarantee[$index]);
    }

    /**
     * unset guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuarantee($index)
    {
        unset($this->guarantee[$index]);
    }

    /**
     * Gets as guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType[]
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType[] $guarantee
     * @return self
     */
    public function setGuarantee(array $guarantee)
    {
        $this->guarantee = $guarantee;
        return $this;
    }

    /**
     * Adds as depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentLiteType $depositPayment
     */
    public function addToDepositPayment(\Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentLiteType $depositPayment)
    {
        $this->depositPayment[] = $depositPayment;
        return $this;
    }

    /**
     * isset depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDepositPayment($index)
    {
        return isset($this->depositPayment[$index]);
    }

    /**
     * unset depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDepositPayment($index)
    {
        unset($this->depositPayment[$index]);
    }

    /**
     * Gets as depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentLiteType[]
     */
    public function getDepositPayment()
    {
        return $this->depositPayment;
    }

    /**
     * Sets a new depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentLiteType[] $depositPayment
     * @return self
     */
    public function setDepositPayment(array $depositPayment)
    {
        $this->depositPayment = $depositPayment;
        return $this;
    }

    /**
     * Gets as basicPropertyInfo
     *
     * Basic hotel property information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomStayLiteType\BasicPropertyInfoAType
     */
    public function getBasicPropertyInfo()
    {
        return $this->basicPropertyInfo;
    }

    /**
     * Sets a new basicPropertyInfo
     *
     * Basic hotel property information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomStayLiteType\BasicPropertyInfoAType $basicPropertyInfo
     * @return self
     */
    public function setBasicPropertyInfo(\Devlabs91\TravelgateNotify\Models\Ota\RoomStayLiteType\BasicPropertyInfoAType $basicPropertyInfo)
    {
        $this->basicPropertyInfo = $basicPropertyInfo;
        return $this;
    }


}

