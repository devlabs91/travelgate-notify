<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing HotelReservationsType
 *
 * A collection of hotel reservations.
 * XSD Type: HotelReservationsType
 */
class HotelReservationsType
{

    /**
     * Contains a hotel reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType[] $hotelReservation
     */
    private $hotelReservation = [
        
    ];

    /**
     * A collection of routing hops.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoutingHopType\RoutingHopAType[] $routingHops
     */
    private $routingHops = null;

    /**
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\WrittenConfInstType $writtenConfInst
     */
    private $writtenConfInst = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType $hotelReservation
     */
    public function addToHotelReservation(\Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType $hotelReservation)
    {
        $this->hotelReservation[] = $hotelReservation;
        return $this;
    }

    /**
     * isset hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelReservation($index)
    {
        return isset($this->hotelReservation[$index]);
    }

    /**
     * unset hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelReservation($index)
    {
        unset($this->hotelReservation[$index]);
    }

    /**
     * Gets as hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType[]
     */
    public function getHotelReservation()
    {
        return $this->hotelReservation;
    }

    /**
     * Sets a new hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType[] $hotelReservation
     * @return self
     */
    public function setHotelReservation(array $hotelReservation)
    {
        $this->hotelReservation = $hotelReservation;
        return $this;
    }

    /**
     * Adds as routingHop
     *
     * A collection of routing hops.
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
     * A collection of routing hops.
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
     * A collection of routing hops.
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
     * A collection of routing hops.
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
     * A collection of routing hops.
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
     * Gets as writtenConfInst
     *
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\WrittenConfInstType
     */
    public function getWrittenConfInst()
    {
        return $this->writtenConfInst;
    }

    /**
     * Sets a new writtenConfInst
     *
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\WrittenConfInstType $writtenConfInst
     * @return self
     */
    public function setWrittenConfInst(\Devlabs91\TravelgateNotify\Models\Ota\WrittenConfInstType $writtenConfInst)
    {
        $this->writtenConfInst = $writtenConfInst;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }


}

