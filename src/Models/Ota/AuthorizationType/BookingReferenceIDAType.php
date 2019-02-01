<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AuthorizationType;

use Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType;

/**
 * Class representing BookingReferenceIDAType
 */
class BookingReferenceIDAType extends UniqueIDType
{

    /**
     * When true, the PNR should not be updated with the authorization information returned.
     *
     * @property bool $ignoreReservationInd
     */
    private $ignoreReservationInd = null;

    /**
     * Gets as ignoreReservationInd
     *
     * When true, the PNR should not be updated with the authorization information returned.
     *
     * @return bool
     */
    public function getIgnoreReservationInd()
    {
        return $this->ignoreReservationInd;
    }

    /**
     * Sets a new ignoreReservationInd
     *
     * When true, the PNR should not be updated with the authorization information returned.
     *
     * @param bool $ignoreReservationInd
     * @return self
     */
    public function setIgnoreReservationInd($ignoreReservationInd)
    {
        $this->ignoreReservationInd = $ignoreReservationInd;
        return $this;
    }


}

