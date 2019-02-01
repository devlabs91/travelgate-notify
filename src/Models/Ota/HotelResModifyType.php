<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing HotelResModifyType
 *
 * Full structure of a hotel reservation modification.
 * XSD Type: HotelResModifyType
 */
class HotelResModifyType
{

    /**
     * A full overlay of reservation information containing the modified data.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType\HotelResModifyAType[] $hotelResModify
     */
    private $hotelResModify = [
        
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
     * Adds as hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType\HotelResModifyAType $hotelResModify
     */
    public function addToHotelResModify(\Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType\HotelResModifyAType $hotelResModify)
    {
        $this->hotelResModify[] = $hotelResModify;
        return $this;
    }

    /**
     * isset hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelResModify($index)
    {
        return isset($this->hotelResModify[$index]);
    }

    /**
     * unset hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelResModify($index)
    {
        unset($this->hotelResModify[$index]);
    }

    /**
     * Gets as hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType\HotelResModifyAType[]
     */
    public function getHotelResModify()
    {
        return $this->hotelResModify;
    }

    /**
     * Sets a new hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType\HotelResModifyAType[] $hotelResModify
     * @return self
     */
    public function setHotelResModify(array $hotelResModify)
    {
        $this->hotelResModify = $hotelResModify;
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


}

