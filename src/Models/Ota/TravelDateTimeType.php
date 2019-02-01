<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing TravelDateTimeType
 *
 * Date and time of trip that allows specifying a time window before and after the given date.
 * XSD Type: TravelDateTimeType
 */
class TravelDateTimeType
{

    /**
     * The departure date and optionally a time period that can be applied before and/or after the departure date.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TimeInstantType $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * The arrival date and optionally a time period that can be applied before and/or after the arrival date.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TimeInstantType $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * Gets as departureDateTime
     *
     * The departure date and optionally a time period that can be applied before and/or after the departure date.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TimeInstantType
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * The departure date and optionally a time period that can be applied before and/or after the departure date.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TimeInstantType $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(\Devlabs91\TravelgateNotify\Models\Ota\TimeInstantType $departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;
        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * The arrival date and optionally a time period that can be applied before and/or after the arrival date.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TimeInstantType
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * The arrival date and optionally a time period that can be applied before and/or after the arrival date.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TimeInstantType $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(\Devlabs91\TravelgateNotify\Models\Ota\TimeInstantType $arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;
        return $this;
    }


}

