<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleTourInfoType
 *
 * The VehicleTourInfoType provides information about a tour that includes a vehicle rental.
 * XSD Type: VehicleTourInfoType
 */
class VehicleTourInfoType
{

    /**
     * This is the identifying code assigned by the tour operating company to the tour that includes the vehicle rental.
     *
     * @property string $tourNumber
     */
    private $tourNumber = null;

    /**
     * This identifies the tour operator.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $tourOperator
     */
    private $tourOperator = null;

    /**
     * Gets as tourNumber
     *
     * This is the identifying code assigned by the tour operating company to the tour that includes the vehicle rental.
     *
     * @return string
     */
    public function getTourNumber()
    {
        return $this->tourNumber;
    }

    /**
     * Sets a new tourNumber
     *
     * This is the identifying code assigned by the tour operating company to the tour that includes the vehicle rental.
     *
     * @param string $tourNumber
     * @return self
     */
    public function setTourNumber($tourNumber)
    {
        $this->tourNumber = $tourNumber;
        return $this;
    }

    /**
     * Gets as tourOperator
     *
     * This identifies the tour operator.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType
     */
    public function getTourOperator()
    {
        return $this->tourOperator;
    }

    /**
     * Sets a new tourOperator
     *
     * This identifies the tour operator.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $tourOperator
     * @return self
     */
    public function setTourOperator(\Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $tourOperator)
    {
        $this->tourOperator = $tourOperator;
        return $this;
    }


}

