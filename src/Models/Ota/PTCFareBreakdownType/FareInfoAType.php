<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType;

use Devlabs91\TravelgateNotify\Models\Ota\FareInfoType;

/**
 * Class representing FareInfoAType
 *
 * Information used to define a fare and its associated rules information.
 */
class FareInfoAType extends FareInfoType
{

    /**
     * The fare with cost breakdown.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType $passengerFare
     */
    private $passengerFare = null;

    /**
     * Gets as passengerFare
     *
     * The fare with cost breakdown.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType
     */
    public function getPassengerFare()
    {
        return $this->passengerFare;
    }

    /**
     * Sets a new passengerFare
     *
     * The fare with cost breakdown.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType $passengerFare
     * @return self
     */
    public function setPassengerFare(\Devlabs91\TravelgateNotify\Models\Ota\FareType $passengerFare)
    {
        $this->passengerFare = $passengerFare;
        return $this;
    }


}

