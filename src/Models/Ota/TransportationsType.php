<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing TransportationsType
 *
 * Used to define the types of transportation offered.
 * XSD Type: TransportationsType
 */
class TransportationsType
{

    /**
     * Collection of directions to/from a specific location via various modes of transportation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TransportationType\TransportationAType[] $transportations
     */
    private $transportations = null;

    /**
     * Adds as transportation
     *
     * Collection of directions to/from a specific location via various modes of transportation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TransportationType\TransportationAType $transportation
     */
    public function addToTransportations(\Devlabs91\TravelgateNotify\Models\Ota\TransportationType\TransportationAType $transportation)
    {
        $this->transportations[] = $transportation;
        return $this;
    }

    /**
     * isset transportations
     *
     * Collection of directions to/from a specific location via various modes of transportation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportations($index)
    {
        return isset($this->transportations[$index]);
    }

    /**
     * unset transportations
     *
     * Collection of directions to/from a specific location via various modes of transportation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportations($index)
    {
        unset($this->transportations[$index]);
    }

    /**
     * Gets as transportations
     *
     * Collection of directions to/from a specific location via various modes of transportation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TransportationType\TransportationAType[]
     */
    public function getTransportations()
    {
        return $this->transportations;
    }

    /**
     * Sets a new transportations
     *
     * Collection of directions to/from a specific location via various modes of transportation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TransportationType\TransportationAType[] $transportations
     * @return self
     */
    public function setTransportations(array $transportations)
    {
        $this->transportations = $transportations;
        return $this;
    }


}

