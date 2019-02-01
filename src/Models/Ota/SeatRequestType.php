<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing SeatRequestType
 *
 * Object to hold a passengers' seat request
 * XSD Type: SeatRequestType
 */
class SeatRequestType
{

    /**
     * Used to provide the seat number.
     *
     * @property string $seatNumber
     */
    private $seatNumber = null;

    /**
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @property string[] $seatPreference
     */
    private $seatPreference = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property bool $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Deck associated to seat row number.
     *
     * @property int $deckNumber
     */
    private $deckNumber = null;

    /**
     * Sequence number of a row.
     *
     * @property int $rowNumber
     */
    private $rowNumber = null;

    /**
     * Seat number within a row.
     *
     * @property string $seatInRow
     */
    private $seatInRow = null;

    /**
     * The departure date of the flight for the seat requested.
     *
     * @property \DateTime $departureDate
     */
    private $departureDate = null;

    /**
     * The number of the flight for which this seat is requested.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * Code providing status information for this seat request. Refer to OpenTravel Code List Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Departure point of flight segment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\LocationType $departureAirport
     */
    private $departureAirport = null;

    /**
     * Arrival point of flight segment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\LocationType $arrivalAirport
     */
    private $arrivalAirport = null;

    /**
     * Specify the airline the seat was requested for.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $airline
     */
    private $airline = null;

    /**
     * Gets as seatNumber
     *
     * Used to provide the seat number.
     *
     * @return string
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * Sets a new seatNumber
     *
     * Used to provide the seat number.
     *
     * @param string $seatNumber
     * @return self
     */
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
        return $this;
    }

    /**
     * Adds as seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @return self
     * @param string $seatPreference
     */
    public function addToSeatPreference($seatPreference)
    {
        $this->seatPreference[] = $seatPreference;
        return $this;
    }

    /**
     * isset seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeatPreference($index)
    {
        return isset($this->seatPreference[$index]);
    }

    /**
     * unset seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeatPreference($index)
    {
        unset($this->seatPreference[$index]);
    }

    /**
     * Gets as seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @return string[]
     */
    public function getSeatPreference()
    {
        return $this->seatPreference;
    }

    /**
     * Sets a new seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @param string $seatPreference
     * @return self
     */
    public function setSeatPreference(array $seatPreference)
    {
        $this->seatPreference = $seatPreference;
        return $this;
    }

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @return bool
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @param bool $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;
        return $this;
    }

    /**
     * Gets as deckNumber
     *
     * Deck associated to seat row number.
     *
     * @return int
     */
    public function getDeckNumber()
    {
        return $this->deckNumber;
    }

    /**
     * Sets a new deckNumber
     *
     * Deck associated to seat row number.
     *
     * @param int $deckNumber
     * @return self
     */
    public function setDeckNumber($deckNumber)
    {
        $this->deckNumber = $deckNumber;
        return $this;
    }

    /**
     * Gets as rowNumber
     *
     * Sequence number of a row.
     *
     * @return int
     */
    public function getRowNumber()
    {
        return $this->rowNumber;
    }

    /**
     * Sets a new rowNumber
     *
     * Sequence number of a row.
     *
     * @param int $rowNumber
     * @return self
     */
    public function setRowNumber($rowNumber)
    {
        $this->rowNumber = $rowNumber;
        return $this;
    }

    /**
     * Gets as seatInRow
     *
     * Seat number within a row.
     *
     * @return string
     */
    public function getSeatInRow()
    {
        return $this->seatInRow;
    }

    /**
     * Sets a new seatInRow
     *
     * Seat number within a row.
     *
     * @param string $seatInRow
     * @return self
     */
    public function setSeatInRow($seatInRow)
    {
        $this->seatInRow = $seatInRow;
        return $this;
    }

    /**
     * Gets as departureDate
     *
     * The departure date of the flight for the seat requested.
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * The departure date of the flight for the seat requested.
     *
     * @param \DateTime $departureDate
     * @return self
     */
    public function setDepartureDate(\DateTime $departureDate)
    {
        $this->departureDate = $departureDate;
        return $this;
    }

    /**
     * Gets as flightNumber
     *
     * The number of the flight for which this seat is requested.
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Sets a new flightNumber
     *
     * The number of the flight for which this seat is requested.
     *
     * @param string $flightNumber
     * @return self
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;
        return $this;
    }

    /**
     * Gets as status
     *
     * Code providing status information for this seat request. Refer to OpenTravel Code List Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Code providing status information for this seat request. Refer to OpenTravel Code List Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * Departure point of flight segment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\LocationType
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
     * @param \Devlabs91\TravelgateNotify\Models\Ota\LocationType $departureAirport
     * @return self
     */
    public function setDepartureAirport(\Devlabs91\TravelgateNotify\Models\Ota\LocationType $departureAirport)
    {
        $this->departureAirport = $departureAirport;
        return $this;
    }

    /**
     * Gets as arrivalAirport
     *
     * Arrival point of flight segment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\LocationType
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
     * @param \Devlabs91\TravelgateNotify\Models\Ota\LocationType $arrivalAirport
     * @return self
     */
    public function setArrivalAirport(\Devlabs91\TravelgateNotify\Models\Ota\LocationType $arrivalAirport)
    {
        $this->arrivalAirport = $arrivalAirport;
        return $this;
    }

    /**
     * Gets as airline
     *
     * Specify the airline the seat was requested for.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * Specify the airline the seat was requested for.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $airline
     * @return self
     */
    public function setAirline(\Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $airline)
    {
        $this->airline = $airline;
        return $this;
    }


}

