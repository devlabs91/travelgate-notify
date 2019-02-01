<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing SpecificFlightInfoType
 *
 * Specify actual airline, flight number, or booking class
 * XSD Type: SpecificFlightInfoType
 */
class SpecificFlightInfoType
{

    /**
     * Specific flight number to request availability for. Requires that Airline is also supplied.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * Specify airline to request availability for.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $airline
     */
    private $airline = null;

    /**
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SpecificFlightInfoType\BookingClassPrefAType[] $bookingClassPref
     */
    private $bookingClassPref = [
        
    ];

    /**
     * Gets as flightNumber
     *
     * Specific flight number to request availability for. Requires that Airline is also supplied.
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
     * Specific flight number to request availability for. Requires that Airline is also supplied.
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
     * Gets as airline
     *
     * Specify airline to request availability for.
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
     * Specify airline to request availability for.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $airline
     * @return self
     */
    public function setAirline(\Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $airline)
    {
        $this->airline = $airline;
        return $this;
    }

    /**
     * Adds as bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecificFlightInfoType\BookingClassPrefAType $bookingClassPref
     */
    public function addToBookingClassPref(\Devlabs91\TravelgateNotify\Models\Ota\SpecificFlightInfoType\BookingClassPrefAType $bookingClassPref)
    {
        $this->bookingClassPref[] = $bookingClassPref;
        return $this;
    }

    /**
     * isset bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookingClassPref($index)
    {
        return isset($this->bookingClassPref[$index]);
    }

    /**
     * unset bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookingClassPref($index)
    {
        unset($this->bookingClassPref[$index]);
    }

    /**
     * Gets as bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SpecificFlightInfoType\BookingClassPrefAType[]
     */
    public function getBookingClassPref()
    {
        return $this->bookingClassPref;
    }

    /**
     * Sets a new bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecificFlightInfoType\BookingClassPrefAType[] $bookingClassPref
     * @return self
     */
    public function setBookingClassPref(array $bookingClassPref)
    {
        $this->bookingClassPref = $bookingClassPref;
        return $this;
    }


}

