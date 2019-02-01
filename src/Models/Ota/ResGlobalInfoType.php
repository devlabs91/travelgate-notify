<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing ResGlobalInfoType
 *
 * ResGlobalInfo is a container for various information that affects the Reservation as a whole. These include global comments, counts, reservation IDs, loyalty programs, and payment methods.
 * XSD Type: ResGlobalInfoType
 */
class ResGlobalInfoType extends ResCommonDetailType
{

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationIDsType\HotelReservationIDAType[] $hotelReservationIDs
     */
    private $hotelReservationIDs = null;

    /**
     * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoutingHopType\RoutingHopAType[] $routingHops
     */
    private $routingHops = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType[] $profiles
     */
    private $profiles = null;

    /**
     * Provides booking rules for the global reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType[] $bookingRules
     */
    private $bookingRules = null;

    /**
     * Adds as hotelReservationID
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID
     */
    public function addToHotelReservationIDs(\Devlabs91\TravelgateNotify\Models\Ota\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID)
    {
        $this->hotelReservationIDs[] = $hotelReservationID;
        return $this;
    }

    /**
     * isset hotelReservationIDs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelReservationIDs($index)
    {
        return isset($this->hotelReservationIDs[$index]);
    }

    /**
     * unset hotelReservationIDs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelReservationIDs($index)
    {
        unset($this->hotelReservationIDs[$index]);
    }

    /**
     * Gets as hotelReservationIDs
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationIDsType\HotelReservationIDAType[]
     */
    public function getHotelReservationIDs()
    {
        return $this->hotelReservationIDs;
    }

    /**
     * Sets a new hotelReservationIDs
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationIDsType\HotelReservationIDAType[] $hotelReservationIDs
     * @return self
     */
    public function setHotelReservationIDs(array $hotelReservationIDs)
    {
        $this->hotelReservationIDs = $hotelReservationIDs;
        return $this;
    }

    /**
     * Adds as routingHop
     *
     * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoutingHopType\RoutingHopAType $routingHop
     */
    public function addToRoutingHops(\Devlabs91\TravelgateNotify\Models\Ota\RoutingHopType\RoutingHopAType $routingHop)
    {
        $this->routingHops[] = $routingHop;
        return $this;
    }

    /**
     * isset routingHops
     *
     * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoutingHops($index)
    {
        return isset($this->routingHops[$index]);
    }

    /**
     * unset routingHops
     *
     * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoutingHops($index)
    {
        unset($this->routingHops[$index]);
    }

    /**
     * Gets as routingHops
     *
     * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoutingHopType\RoutingHopAType[]
     */
    public function getRoutingHops()
    {
        return $this->routingHops;
    }

    /**
     * Sets a new routingHops
     *
     * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoutingHopType\RoutingHopAType[] $routingHops
     * @return self
     */
    public function setRoutingHops(array $routingHops)
    {
        $this->routingHops = $routingHops;
        return $this;
    }

    /**
     * Adds as profileInfo
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType $profileInfo
     */
    public function addToProfiles(\Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;
        return $this;
    }

    /**
     * isset profiles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;
        return $this;
    }

    /**
     * Adds as bookingRule
     *
     * Provides booking rules for the global reservation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType $bookingRule
     */
    public function addToBookingRules(\Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType $bookingRule)
    {
        $this->bookingRules[] = $bookingRule;
        return $this;
    }

    /**
     * isset bookingRules
     *
     * Provides booking rules for the global reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookingRules($index)
    {
        return isset($this->bookingRules[$index]);
    }

    /**
     * unset bookingRules
     *
     * Provides booking rules for the global reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookingRules($index)
    {
        unset($this->bookingRules[$index]);
    }

    /**
     * Gets as bookingRules
     *
     * Provides booking rules for the global reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType[]
     */
    public function getBookingRules()
    {
        return $this->bookingRules;
    }

    /**
     * Sets a new bookingRules
     *
     * Provides booking rules for the global reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType[] $bookingRules
     * @return self
     */
    public function setBookingRules(array $bookingRules)
    {
        $this->bookingRules = $bookingRules;
        return $this;
    }


}

