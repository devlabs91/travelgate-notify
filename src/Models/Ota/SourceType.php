<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing SourceType
 *
 * Provides information on the source of a request.
 * XSD Type: SourceType
 */
class SourceType
{

    /**
     * Identifies the party within the requesting entity.
     *
     * @property string $agentSine
     */
    private $agentSine = null;

    /**
     * An identification code assigned to an office/agency by a reservation system.
     *
     * @property string $pseudoCityCode
     */
    private $pseudoCityCode = null;

    /**
     * The country code of the requesting party.
     *
     * @property string $iSOCountry
     */
    private $iSOCountry = null;

    /**
     * The currency code in which the reservation will be ticketed.
     *
     * @property string $iSOCurrency
     */
    private $iSOCurrency = null;

    /**
     * An authority code assigned to a requestor.
     *
     * @property string $agentDutyCode
     */
    private $agentDutyCode = null;

    /**
     * The IATA assigned airline code.
     *
     * @property string $airlineVendorID
     */
    private $airlineVendorID = null;

    /**
     * The IATA assigned airport code.
     *
     * @property string $airportCode
     */
    private $airportCode = null;

    /**
     * The point of first departure in a trip.
     *
     * @property string $firstDepartPoint
     */
    private $firstDepartPoint = null;

    /**
     * Electronic Reservation Service Provider (ERSP) assigned identifier used to identify the individual using the ERSP system.
     *
     * @property string $eRSPUserID
     */
    private $eRSPUserID = null;

    /**
     * This is the electronic address of the device from which information is entered.
     *
     * @property string $terminalID
     */
    private $terminalID = null;

    /**
     * An identifier of the entity making the request (e.g. ATA/IATA/ID number, Electronic Reservation Service Provider (ERSP), Association of British Travel Agents (ABTA)).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SourceType\RequestorIDAType $requestorID
     */
    private $requestorID = null;

    /**
     * Specifies the latitude and longitude of a source.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SourceType\PositionAType $position
     */
    private $position = null;

    /**
     * Specifies the booking channel type and whether it is the primary means of connectivity of the source.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SourceType\BookingChannelAType $bookingChannel
     */
    private $bookingChannel = null;

    /**
     * Gets as agentSine
     *
     * Identifies the party within the requesting entity.
     *
     * @return string
     */
    public function getAgentSine()
    {
        return $this->agentSine;
    }

    /**
     * Sets a new agentSine
     *
     * Identifies the party within the requesting entity.
     *
     * @param string $agentSine
     * @return self
     */
    public function setAgentSine($agentSine)
    {
        $this->agentSine = $agentSine;
        return $this;
    }

    /**
     * Gets as pseudoCityCode
     *
     * An identification code assigned to an office/agency by a reservation system.
     *
     * @return string
     */
    public function getPseudoCityCode()
    {
        return $this->pseudoCityCode;
    }

    /**
     * Sets a new pseudoCityCode
     *
     * An identification code assigned to an office/agency by a reservation system.
     *
     * @param string $pseudoCityCode
     * @return self
     */
    public function setPseudoCityCode($pseudoCityCode)
    {
        $this->pseudoCityCode = $pseudoCityCode;
        return $this;
    }

    /**
     * Gets as iSOCountry
     *
     * The country code of the requesting party.
     *
     * @return string
     */
    public function getISOCountry()
    {
        return $this->iSOCountry;
    }

    /**
     * Sets a new iSOCountry
     *
     * The country code of the requesting party.
     *
     * @param string $iSOCountry
     * @return self
     */
    public function setISOCountry($iSOCountry)
    {
        $this->iSOCountry = $iSOCountry;
        return $this;
    }

    /**
     * Gets as iSOCurrency
     *
     * The currency code in which the reservation will be ticketed.
     *
     * @return string
     */
    public function getISOCurrency()
    {
        return $this->iSOCurrency;
    }

    /**
     * Sets a new iSOCurrency
     *
     * The currency code in which the reservation will be ticketed.
     *
     * @param string $iSOCurrency
     * @return self
     */
    public function setISOCurrency($iSOCurrency)
    {
        $this->iSOCurrency = $iSOCurrency;
        return $this;
    }

    /**
     * Gets as agentDutyCode
     *
     * An authority code assigned to a requestor.
     *
     * @return string
     */
    public function getAgentDutyCode()
    {
        return $this->agentDutyCode;
    }

    /**
     * Sets a new agentDutyCode
     *
     * An authority code assigned to a requestor.
     *
     * @param string $agentDutyCode
     * @return self
     */
    public function setAgentDutyCode($agentDutyCode)
    {
        $this->agentDutyCode = $agentDutyCode;
        return $this;
    }

    /**
     * Gets as airlineVendorID
     *
     * The IATA assigned airline code.
     *
     * @return string
     */
    public function getAirlineVendorID()
    {
        return $this->airlineVendorID;
    }

    /**
     * Sets a new airlineVendorID
     *
     * The IATA assigned airline code.
     *
     * @param string $airlineVendorID
     * @return self
     */
    public function setAirlineVendorID($airlineVendorID)
    {
        $this->airlineVendorID = $airlineVendorID;
        return $this;
    }

    /**
     * Gets as airportCode
     *
     * The IATA assigned airport code.
     *
     * @return string
     */
    public function getAirportCode()
    {
        return $this->airportCode;
    }

    /**
     * Sets a new airportCode
     *
     * The IATA assigned airport code.
     *
     * @param string $airportCode
     * @return self
     */
    public function setAirportCode($airportCode)
    {
        $this->airportCode = $airportCode;
        return $this;
    }

    /**
     * Gets as firstDepartPoint
     *
     * The point of first departure in a trip.
     *
     * @return string
     */
    public function getFirstDepartPoint()
    {
        return $this->firstDepartPoint;
    }

    /**
     * Sets a new firstDepartPoint
     *
     * The point of first departure in a trip.
     *
     * @param string $firstDepartPoint
     * @return self
     */
    public function setFirstDepartPoint($firstDepartPoint)
    {
        $this->firstDepartPoint = $firstDepartPoint;
        return $this;
    }

    /**
     * Gets as eRSPUserID
     *
     * Electronic Reservation Service Provider (ERSP) assigned identifier used to identify the individual using the ERSP system.
     *
     * @return string
     */
    public function getERSPUserID()
    {
        return $this->eRSPUserID;
    }

    /**
     * Sets a new eRSPUserID
     *
     * Electronic Reservation Service Provider (ERSP) assigned identifier used to identify the individual using the ERSP system.
     *
     * @param string $eRSPUserID
     * @return self
     */
    public function setERSPUserID($eRSPUserID)
    {
        $this->eRSPUserID = $eRSPUserID;
        return $this;
    }

    /**
     * Gets as terminalID
     *
     * This is the electronic address of the device from which information is entered.
     *
     * @return string
     */
    public function getTerminalID()
    {
        return $this->terminalID;
    }

    /**
     * Sets a new terminalID
     *
     * This is the electronic address of the device from which information is entered.
     *
     * @param string $terminalID
     * @return self
     */
    public function setTerminalID($terminalID)
    {
        $this->terminalID = $terminalID;
        return $this;
    }

    /**
     * Gets as requestorID
     *
     * An identifier of the entity making the request (e.g. ATA/IATA/ID number, Electronic Reservation Service Provider (ERSP), Association of British Travel Agents (ABTA)).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SourceType\RequestorIDAType
     */
    public function getRequestorID()
    {
        return $this->requestorID;
    }

    /**
     * Sets a new requestorID
     *
     * An identifier of the entity making the request (e.g. ATA/IATA/ID number, Electronic Reservation Service Provider (ERSP), Association of British Travel Agents (ABTA)).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SourceType\RequestorIDAType $requestorID
     * @return self
     */
    public function setRequestorID(\Devlabs91\TravelgateNotify\Models\Ota\SourceType\RequestorIDAType $requestorID)
    {
        $this->requestorID = $requestorID;
        return $this;
    }

    /**
     * Gets as position
     *
     * Specifies the latitude and longitude of a source.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SourceType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * Specifies the latitude and longitude of a source.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SourceType\PositionAType $position
     * @return self
     */
    public function setPosition(\Devlabs91\TravelgateNotify\Models\Ota\SourceType\PositionAType $position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as bookingChannel
     *
     * Specifies the booking channel type and whether it is the primary means of connectivity of the source.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SourceType\BookingChannelAType
     */
    public function getBookingChannel()
    {
        return $this->bookingChannel;
    }

    /**
     * Sets a new bookingChannel
     *
     * Specifies the booking channel type and whether it is the primary means of connectivity of the source.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SourceType\BookingChannelAType $bookingChannel
     * @return self
     */
    public function setBookingChannel(\Devlabs91\TravelgateNotify\Models\Ota\SourceType\BookingChannelAType $bookingChannel)
    {
        $this->bookingChannel = $bookingChannel;
        return $this;
    }


}

