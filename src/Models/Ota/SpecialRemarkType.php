<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing SpecialRemarkType
 *
 * Itinerary Remarks, Invoice Remarks, etc.
 * XSD Type: SpecialRemarkType
 */
class SpecialRemarkType
{

    /**
     * Type of special remark used (e.g., itinerary remark, invoice remark). Refer to OpenTravel Code List Special Remark Option Type (SRO).
     *
     * @property string $remarkType
     */
    private $remarkType = null;

    /**
     * Used to further define the remark type.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * One or more travelers to whom this request applies.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\TravelerRefNumberAType[] $travelerRefNumber
     */
    private $travelerRefNumber = [
        
    ];

    /**
     * One or more flights to whom this request applies
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\FlightRefNumberAType[] $flightRefNumber
     */
    private $flightRefNumber = [
        
    ];

    /**
     * Text associated with remark
     *
     * @property string $text
     */
    private $text = null;

    /**
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType[] $airline
     */
    private $airline = [
        
    ];

    /**
     * A container for authorized viewers.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[] $authorizedViewers
     */
    private $authorizedViewers = null;

    /**
     * Gets as remarkType
     *
     * Type of special remark used (e.g., itinerary remark, invoice remark). Refer to OpenTravel Code List Special Remark Option Type (SRO).
     *
     * @return string
     */
    public function getRemarkType()
    {
        return $this->remarkType;
    }

    /**
     * Sets a new remarkType
     *
     * Type of special remark used (e.g., itinerary remark, invoice remark). Refer to OpenTravel Code List Special Remark Option Type (SRO).
     *
     * @param string $remarkType
     * @return self
     */
    public function setRemarkType($remarkType)
    {
        $this->remarkType = $remarkType;
        return $this;
    }

    /**
     * Gets as iD
     *
     * Used to further define the remark type.
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
     * Used to further define the remark type.
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
     * Adds as travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\TravelerRefNumberAType $travelerRefNumber
     */
    public function addToTravelerRefNumber(\Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\TravelerRefNumberAType $travelerRefNumber)
    {
        $this->travelerRefNumber[] = $travelerRefNumber;
        return $this;
    }

    /**
     * isset travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTravelerRefNumber($index)
    {
        return isset($this->travelerRefNumber[$index]);
    }

    /**
     * unset travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTravelerRefNumber($index)
    {
        unset($this->travelerRefNumber[$index]);
    }

    /**
     * Gets as travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\TravelerRefNumberAType[]
     */
    public function getTravelerRefNumber()
    {
        return $this->travelerRefNumber;
    }

    /**
     * Sets a new travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\TravelerRefNumberAType[] $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(array $travelerRefNumber)
    {
        $this->travelerRefNumber = $travelerRefNumber;
        return $this;
    }

    /**
     * Adds as flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\FlightRefNumberAType $flightRefNumber
     */
    public function addToFlightRefNumber(\Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\FlightRefNumberAType $flightRefNumber)
    {
        $this->flightRefNumber[] = $flightRefNumber;
        return $this;
    }

    /**
     * isset flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFlightRefNumber($index)
    {
        return isset($this->flightRefNumber[$index]);
    }

    /**
     * unset flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFlightRefNumber($index)
    {
        unset($this->flightRefNumber[$index]);
    }

    /**
     * Gets as flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\FlightRefNumberAType[]
     */
    public function getFlightRefNumber()
    {
        return $this->flightRefNumber;
    }

    /**
     * Sets a new flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\FlightRefNumberAType[] $flightRefNumber
     * @return self
     */
    public function setFlightRefNumber(array $flightRefNumber)
    {
        $this->flightRefNumber = $flightRefNumber;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text associated with remark
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text associated with remark
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $airline
     */
    public function addToAirline(\Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $airline)
    {
        $this->airline[] = $airline;
        return $this;
    }

    /**
     * isset airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirline($index)
    {
        return isset($this->airline[$index]);
    }

    /**
     * unset airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirline($index)
    {
        unset($this->airline[$index]);
    }

    /**
     * Gets as airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType[]
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType[] $airline
     * @return self
     */
    public function setAirline(array $airline)
    {
        $this->airline = $airline;
        return $this;
    }

    /**
     * Adds as authorizedViewer
     *
     * A container for authorized viewers.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType $authorizedViewer
     */
    public function addToAuthorizedViewers(\Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType $authorizedViewer)
    {
        $this->authorizedViewers[] = $authorizedViewer;
        return $this;
    }

    /**
     * isset authorizedViewers
     *
     * A container for authorized viewers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthorizedViewers($index)
    {
        return isset($this->authorizedViewers[$index]);
    }

    /**
     * unset authorizedViewers
     *
     * A container for authorized viewers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthorizedViewers($index)
    {
        unset($this->authorizedViewers[$index]);
    }

    /**
     * Gets as authorizedViewers
     *
     * A container for authorized viewers.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[]
     */
    public function getAuthorizedViewers()
    {
        return $this->authorizedViewers;
    }

    /**
     * Sets a new authorizedViewers
     *
     * A container for authorized viewers.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[] $authorizedViewers
     * @return self
     */
    public function setAuthorizedViewers(array $authorizedViewers)
    {
        $this->authorizedViewers = $authorizedViewers;
        return $this;
    }


}

