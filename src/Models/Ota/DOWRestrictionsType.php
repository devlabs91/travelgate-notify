<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing DOWRestrictionsType
 *
 *
 * XSD Type: DOW_RestrictionsType
 */
class DOWRestrictionsType
{

    /**
     * Days of week on which this room/rate combination is available.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\AvailableDaysOfWeekAType $availableDaysOfWeek
     */
    private $availableDaysOfWeek = null;

    /**
     * Days of Week on which the guest can arrive.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\ArrivalDaysOfWeekAType $arrivalDaysOfWeek
     */
    private $arrivalDaysOfWeek = null;

    /**
     * Days of Week on which the guest can leave.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\DepartureDaysOfWeekAType $departureDaysOfWeek
     */
    private $departureDaysOfWeek = null;

    /**
     * Days of Week on which the guest has to stay at the hotel.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\RequiredDaysOfWeekAType $requiredDaysOfWeek
     */
    private $requiredDaysOfWeek = null;

    /**
     * Gets as availableDaysOfWeek
     *
     * Days of week on which this room/rate combination is available.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\AvailableDaysOfWeekAType
     */
    public function getAvailableDaysOfWeek()
    {
        return $this->availableDaysOfWeek;
    }

    /**
     * Sets a new availableDaysOfWeek
     *
     * Days of week on which this room/rate combination is available.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\AvailableDaysOfWeekAType $availableDaysOfWeek
     * @return self
     */
    public function setAvailableDaysOfWeek(\Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\AvailableDaysOfWeekAType $availableDaysOfWeek)
    {
        $this->availableDaysOfWeek = $availableDaysOfWeek;
        return $this;
    }

    /**
     * Gets as arrivalDaysOfWeek
     *
     * Days of Week on which the guest can arrive.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\ArrivalDaysOfWeekAType
     */
    public function getArrivalDaysOfWeek()
    {
        return $this->arrivalDaysOfWeek;
    }

    /**
     * Sets a new arrivalDaysOfWeek
     *
     * Days of Week on which the guest can arrive.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\ArrivalDaysOfWeekAType $arrivalDaysOfWeek
     * @return self
     */
    public function setArrivalDaysOfWeek(\Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\ArrivalDaysOfWeekAType $arrivalDaysOfWeek)
    {
        $this->arrivalDaysOfWeek = $arrivalDaysOfWeek;
        return $this;
    }

    /**
     * Gets as departureDaysOfWeek
     *
     * Days of Week on which the guest can leave.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\DepartureDaysOfWeekAType
     */
    public function getDepartureDaysOfWeek()
    {
        return $this->departureDaysOfWeek;
    }

    /**
     * Sets a new departureDaysOfWeek
     *
     * Days of Week on which the guest can leave.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\DepartureDaysOfWeekAType $departureDaysOfWeek
     * @return self
     */
    public function setDepartureDaysOfWeek(\Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\DepartureDaysOfWeekAType $departureDaysOfWeek)
    {
        $this->departureDaysOfWeek = $departureDaysOfWeek;
        return $this;
    }

    /**
     * Gets as requiredDaysOfWeek
     *
     * Days of Week on which the guest has to stay at the hotel.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\RequiredDaysOfWeekAType
     */
    public function getRequiredDaysOfWeek()
    {
        return $this->requiredDaysOfWeek;
    }

    /**
     * Sets a new requiredDaysOfWeek
     *
     * Days of Week on which the guest has to stay at the hotel.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\RequiredDaysOfWeekAType $requiredDaysOfWeek
     * @return self
     */
    public function setRequiredDaysOfWeek(\Devlabs91\TravelgateNotify\Models\Ota\DOWRestrictionsType\RequiredDaysOfWeekAType $requiredDaysOfWeek)
    {
        $this->requiredDaysOfWeek = $requiredDaysOfWeek;
        return $this;
    }


}

