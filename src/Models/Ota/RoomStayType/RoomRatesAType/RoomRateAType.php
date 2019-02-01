<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType;

use Devlabs91\TravelgateNotify\Models\Ota\RoomRateType;

/**
 * Class representing RoomRateAType
 */
class RoomRateAType extends RoomRateType
{

    /**
     * The period during which the booking must be made.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\AdvanceBookingRestrictionAType $advanceBookingRestriction
     */
    private $advanceBookingRestriction = null;

    /**
     * A collections of restrictions.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType[] $restrictions
     */
    private $restrictions = null;

    /**
     * A container for the unique references to the services for the room stay.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ServiceRPHsType\ServiceRPHAType[] $serviceRPHs
     */
    private $serviceRPHs = null;

    /**
     * A collection of Guest Counts associated with the room rate.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType[] $guestCounts
     */
    private $guestCounts = null;

    /**
     * Gets as advanceBookingRestriction
     *
     * The period during which the booking must be made.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\AdvanceBookingRestrictionAType
     */
    public function getAdvanceBookingRestriction()
    {
        return $this->advanceBookingRestriction;
    }

    /**
     * Sets a new advanceBookingRestriction
     *
     * The period during which the booking must be made.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\AdvanceBookingRestrictionAType $advanceBookingRestriction
     * @return self
     */
    public function setAdvanceBookingRestriction(\Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\AdvanceBookingRestrictionAType $advanceBookingRestriction)
    {
        $this->advanceBookingRestriction = $advanceBookingRestriction;
        return $this;
    }

    /**
     * Adds as restriction
     *
     * A collections of restrictions.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType $restriction
     */
    public function addToRestrictions(\Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType $restriction)
    {
        $this->restrictions[] = $restriction;
        return $this;
    }

    /**
     * isset restrictions
     *
     * A collections of restrictions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestrictions($index)
    {
        return isset($this->restrictions[$index]);
    }

    /**
     * unset restrictions
     *
     * A collections of restrictions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestrictions($index)
    {
        unset($this->restrictions[$index]);
    }

    /**
     * Gets as restrictions
     *
     * A collections of restrictions.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType[]
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * Sets a new restrictions
     *
     * A collections of restrictions.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType[] $restrictions
     * @return self
     */
    public function setRestrictions(array $restrictions)
    {
        $this->restrictions = $restrictions;
        return $this;
    }

    /**
     * Adds as serviceRPH
     *
     * A container for the unique references to the services for the room stay.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ServiceRPHsType\ServiceRPHAType $serviceRPH
     */
    public function addToServiceRPHs(\Devlabs91\TravelgateNotify\Models\Ota\ServiceRPHsType\ServiceRPHAType $serviceRPH)
    {
        $this->serviceRPHs[] = $serviceRPH;
        return $this;
    }

    /**
     * isset serviceRPHs
     *
     * A container for the unique references to the services for the room stay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceRPHs($index)
    {
        return isset($this->serviceRPHs[$index]);
    }

    /**
     * unset serviceRPHs
     *
     * A container for the unique references to the services for the room stay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceRPHs($index)
    {
        unset($this->serviceRPHs[$index]);
    }

    /**
     * Gets as serviceRPHs
     *
     * A container for the unique references to the services for the room stay.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ServiceRPHsType\ServiceRPHAType[]
     */
    public function getServiceRPHs()
    {
        return $this->serviceRPHs;
    }

    /**
     * Sets a new serviceRPHs
     *
     * A container for the unique references to the services for the room stay.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ServiceRPHsType\ServiceRPHAType[] $serviceRPHs
     * @return self
     */
    public function setServiceRPHs(array $serviceRPHs)
    {
        $this->serviceRPHs = $serviceRPHs;
        return $this;
    }

    /**
     * Adds as guestCount
     *
     * A collection of Guest Counts associated with the room rate.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType $guestCount
     */
    public function addToGuestCounts(\Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType $guestCount)
    {
        $this->guestCounts[] = $guestCount;
        return $this;
    }

    /**
     * isset guestCounts
     *
     * A collection of Guest Counts associated with the room rate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestCounts($index)
    {
        return isset($this->guestCounts[$index]);
    }

    /**
     * unset guestCounts
     *
     * A collection of Guest Counts associated with the room rate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestCounts($index)
    {
        unset($this->guestCounts[$index]);
    }

    /**
     * Gets as guestCounts
     *
     * A collection of Guest Counts associated with the room rate.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType[]
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * A collection of Guest Counts associated with the room rate.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType[] $guestCounts
     * @return self
     */
    public function setGuestCounts(array $guestCounts)
    {
        $this->guestCounts = $guestCounts;
        return $this;
    }


}

