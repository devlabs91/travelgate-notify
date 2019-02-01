<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType;

/**
 * Class representing TransportInfoAType
 */
class TransportInfoAType
{

    /**
     * Method of conveyance of this guest. Values: Air, Rail, Bus, Boat, Private Auto, Other.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Identifier of this transportation method (e.g., flight number).
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Identifier of the arrival or delivery point (e.g., airport code)
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * Time of transportation. Local time of the location indicated by the LocationCode.
     *
     * @property \DateTime $time
     */
    private $time = null;

    /**
     * Gets as type
     *
     * Method of conveyance of this guest. Values: Air, Rail, Bus, Boat, Private Auto, Other.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Method of conveyance of this guest. Values: Air, Rail, Bus, Boat, Private Auto, Other.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as iD
     *
     * Identifier of this transportation method (e.g., flight number).
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * Identifier of this transportation method (e.g., flight number).
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as locationCode
     *
     * Identifier of the arrival or delivery point (e.g., airport code)
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * Identifier of the arrival or delivery point (e.g., airport code)
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;
        return $this;
    }

    /**
     * Gets as time
     *
     * Time of transportation. Local time of the location indicated by the LocationCode.
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * Time of transportation. Local time of the location indicated by the LocationCode.
     *
     * @param \DateTime $time
     * @return self
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;
        return $this;
    }


}

