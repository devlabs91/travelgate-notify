<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing OperatingAirlineType
 *
 * Identifies the operating carrier and flight number.
 * XSD Type: OperatingAirlineType
 */
class OperatingAirlineType extends CompanyNameType
{

    /**
     * The flight number as assigned by the operating carrier.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * The reservation booking designator of the operating carrier when different from the marketing carrier.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * Gets as flightNumber
     *
     * The flight number as assigned by the operating carrier.
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
     * The flight number as assigned by the operating carrier.
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
     * Gets as resBookDesigCode
     *
     * The reservation booking designator of the operating carrier when different from the marketing carrier.
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * The reservation booking designator of the operating carrier when different from the marketing carrier.
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;
        return $this;
    }


}

