<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType;

/**
 * Class representing AirSeatsAType
 */
class AirSeatsAType
{

    /**
     * A Seat within a row
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirSeatsAType\AirSeatAType[] $airSeat
     */
    private $airSeat = [
        
    ];

    /**
     * Adds as airSeat
     *
     * A Seat within a row
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirSeatsAType\AirSeatAType $airSeat
     */
    public function addToAirSeat(\Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirSeatsAType\AirSeatAType $airSeat)
    {
        $this->airSeat[] = $airSeat;
        return $this;
    }

    /**
     * isset airSeat
     *
     * A Seat within a row
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirSeat($index)
    {
        return isset($this->airSeat[$index]);
    }

    /**
     * unset airSeat
     *
     * A Seat within a row
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirSeat($index)
    {
        unset($this->airSeat[$index]);
    }

    /**
     * Gets as airSeat
     *
     * A Seat within a row
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirSeatsAType\AirSeatAType[]
     */
    public function getAirSeat()
    {
        return $this->airSeat;
    }

    /**
     * Sets a new airSeat
     *
     * A Seat within a row
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirSeatsAType\AirSeatAType[] $airSeat
     * @return self
     */
    public function setAirSeat(array $airSeat)
    {
        $this->airSeat = $airSeat;
        return $this;
    }


}

