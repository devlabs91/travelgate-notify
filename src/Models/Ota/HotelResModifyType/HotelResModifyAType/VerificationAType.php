<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\HotelResModifyType\HotelResModifyAType;

use Devlabs91\TravelgateNotify\Models\Ota\VerificationType;

/**
 * Class representing VerificationAType
 */
class VerificationAType extends VerificationType
{

    /**
     * Premodification copy of the hotel reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType $currentStateReservation
     */
    private $currentStateReservation = null;

    /**
     * Gets as currentStateReservation
     *
     * Premodification copy of the hotel reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType
     */
    public function getCurrentStateReservation()
    {
        return $this->currentStateReservation;
    }

    /**
     * Sets a new currentStateReservation
     *
     * Premodification copy of the hotel reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType $currentStateReservation
     * @return self
     */
    public function setCurrentStateReservation(\Devlabs91\TravelgateNotify\Models\Ota\HotelReservationType $currentStateReservation)
    {
        $this->currentStateReservation = $currentStateReservation;
        return $this;
    }


}

