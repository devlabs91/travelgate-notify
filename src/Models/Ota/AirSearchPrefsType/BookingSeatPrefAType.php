<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AirSearchPrefsType;

/**
 * Class representing BookingSeatPrefAType
 */
class BookingSeatPrefAType
{

    /**
     * The number of seats needed for the designated booking class.
     *
     * @property int $seatsNeeded
     */
    private $seatsNeeded = null;

    /**
     * Gets as seatsNeeded
     *
     * The number of seats needed for the designated booking class.
     *
     * @return int
     */
    public function getSeatsNeeded()
    {
        return $this->seatsNeeded;
    }

    /**
     * Sets a new seatsNeeded
     *
     * The number of seats needed for the designated booking class.
     *
     * @param int $seatsNeeded
     * @return self
     */
    public function setSeatsNeeded($seatsNeeded)
    {
        $this->seatsNeeded = $seatsNeeded;
        return $this;
    }


}

