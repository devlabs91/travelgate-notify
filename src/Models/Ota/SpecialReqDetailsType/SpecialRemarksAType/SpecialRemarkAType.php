<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType\SpecialRemarksAType;

use Devlabs91\TravelgateNotify\Models\Ota\SpecialRemarkType;

/**
 * Class representing SpecialRemarkAType
 */
class SpecialRemarkAType extends SpecialRemarkType
{

    /**
     * Indicates the required modification to the element.
     *
     * @property string $operation
     */
    private $operation = null;

    /**
     * Unique value associated with the Special Remark.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Flight information associated to this special remark, used when FlightRefNumberRPHList is not available or is different.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FlightLegType $flightLeg
     */
    private $flightLeg = null;

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Unique value associated with the Special Remark.
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
     * Unique value associated with the Special Remark.
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
     * Gets as flightLeg
     *
     * Flight information associated to this special remark, used when FlightRefNumberRPHList is not available or is different.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FlightLegType
     */
    public function getFlightLeg()
    {
        return $this->flightLeg;
    }

    /**
     * Sets a new flightLeg
     *
     * Flight information associated to this special remark, used when FlightRefNumberRPHList is not available or is different.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FlightLegType $flightLeg
     * @return self
     */
    public function setFlightLeg(\Devlabs91\TravelgateNotify\Models\Ota\FlightLegType $flightLeg)
    {
        $this->flightLeg = $flightLeg;
        return $this;
    }


}

