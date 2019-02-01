<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing FlightSegmentBaseType
 *
 * Construct for holding a flight segment availability object.
 * XSD Type: FlightSegmentBaseType
 */
class FlightSegmentBaseType
{

    /**
     * The date and time of the flight segment departure.
     *
     * @property \DateTime $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * Specifies the arrival date and time of a flight.
     *
     * @property \DateTime $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * The number of stops the flight makes.
     *
     * @property int $stopQuantity
     */
    private $stopQuantity = null;

    /**
     * Reference place holder for this flight segment.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Used to specify the source of the data being exchanged as determined by trading partners.
     *
     * @property string $infoSource
     */
    private $infoSource = null;

    /**
     * Departure point of flight segment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FlightSegmentBaseType\DepartureAirportAType $departureAirport
     */
    private $departureAirport = null;

    /**
     * Arrival point of flight segment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FlightSegmentBaseType\ArrivalAirportAType $arrivalAirport
     */
    private $arrivalAirport = null;

    /**
     * The operating airline of the flight if it is a codeshare flight.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OperatingAirlineType $operatingAirline
     */
    private $operatingAirline = null;

    /**
     * The type of equipment used for the flight.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\EquipmentType[] $equipment
     */
    private $equipment = [
        
    ];

    /**
     * Gets as departureDateTime
     *
     * The date and time of the flight segment departure.
     *
     * @return \DateTime
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * The date and time of the flight segment departure.
     *
     * @param \DateTime $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(\DateTime $departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;
        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * Specifies the arrival date and time of a flight.
     *
     * @return \DateTime
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * Specifies the arrival date and time of a flight.
     *
     * @param \DateTime $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(\DateTime $arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;
        return $this;
    }

    /**
     * Gets as stopQuantity
     *
     * The number of stops the flight makes.
     *
     * @return int
     */
    public function getStopQuantity()
    {
        return $this->stopQuantity;
    }

    /**
     * Sets a new stopQuantity
     *
     * The number of stops the flight makes.
     *
     * @param int $stopQuantity
     * @return self
     */
    public function setStopQuantity($stopQuantity)
    {
        $this->stopQuantity = $stopQuantity;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Reference place holder for this flight segment.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Reference place holder for this flight segment.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as infoSource
     *
     * Used to specify the source of the data being exchanged as determined by trading partners.
     *
     * @return string
     */
    public function getInfoSource()
    {
        return $this->infoSource;
    }

    /**
     * Sets a new infoSource
     *
     * Used to specify the source of the data being exchanged as determined by trading partners.
     *
     * @param string $infoSource
     * @return self
     */
    public function setInfoSource($infoSource)
    {
        $this->infoSource = $infoSource;
        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * Departure point of flight segment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FlightSegmentBaseType\DepartureAirportAType
     */
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * Sets a new departureAirport
     *
     * Departure point of flight segment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FlightSegmentBaseType\DepartureAirportAType $departureAirport
     * @return self
     */
    public function setDepartureAirport(\Devlabs91\TravelgateNotify\Models\Ota\FlightSegmentBaseType\DepartureAirportAType $departureAirport)
    {
        $this->departureAirport = $departureAirport;
        return $this;
    }

    /**
     * Gets as arrivalAirport
     *
     * Arrival point of flight segment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FlightSegmentBaseType\ArrivalAirportAType
     */
    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    /**
     * Sets a new arrivalAirport
     *
     * Arrival point of flight segment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FlightSegmentBaseType\ArrivalAirportAType $arrivalAirport
     * @return self
     */
    public function setArrivalAirport(\Devlabs91\TravelgateNotify\Models\Ota\FlightSegmentBaseType\ArrivalAirportAType $arrivalAirport)
    {
        $this->arrivalAirport = $arrivalAirport;
        return $this;
    }

    /**
     * Gets as operatingAirline
     *
     * The operating airline of the flight if it is a codeshare flight.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OperatingAirlineType
     */
    public function getOperatingAirline()
    {
        return $this->operatingAirline;
    }

    /**
     * Sets a new operatingAirline
     *
     * The operating airline of the flight if it is a codeshare flight.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OperatingAirlineType $operatingAirline
     * @return self
     */
    public function setOperatingAirline(\Devlabs91\TravelgateNotify\Models\Ota\OperatingAirlineType $operatingAirline)
    {
        $this->operatingAirline = $operatingAirline;
        return $this;
    }

    /**
     * Adds as equipment
     *
     * The type of equipment used for the flight.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\EquipmentType $equipment
     */
    public function addToEquipment(\Devlabs91\TravelgateNotify\Models\Ota\EquipmentType $equipment)
    {
        $this->equipment[] = $equipment;
        return $this;
    }

    /**
     * isset equipment
     *
     * The type of equipment used for the flight.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquipment($index)
    {
        return isset($this->equipment[$index]);
    }

    /**
     * unset equipment
     *
     * The type of equipment used for the flight.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquipment($index)
    {
        unset($this->equipment[$index]);
    }

    /**
     * Gets as equipment
     *
     * The type of equipment used for the flight.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\EquipmentType[]
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * The type of equipment used for the flight.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\EquipmentType[] $equipment
     * @return self
     */
    public function setEquipment(array $equipment)
    {
        $this->equipment = $equipment;
        return $this;
    }


}

