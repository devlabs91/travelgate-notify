<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType;

use Devlabs91\TravelgateNotify\Models\Ota\FareType;

/**
 * Class representing PassengerFareAType
 */
class PassengerFareAType extends FareType
{

    /**
     * Specifies the usage of the passenger fare structure.
     *
     * @property string $usage
     */
    private $usage = null;

    /**
     * The ticket fee information for this passsenger type code.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType $ticketFeeDetail
     */
    private $ticketFeeDetail = null;

    /**
     * Gets as usage
     *
     * Specifies the usage of the passenger fare structure.
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * Specifies the usage of the passenger fare structure.
     *
     * @param string $usage
     * @return self
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Gets as ticketFeeDetail
     *
     * The ticket fee information for this passsenger type code.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType
     */
    public function getTicketFeeDetail()
    {
        return $this->ticketFeeDetail;
    }

    /**
     * Sets a new ticketFeeDetail
     *
     * The ticket fee information for this passsenger type code.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType $ticketFeeDetail
     * @return self
     */
    public function setTicketFeeDetail(\Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType $ticketFeeDetail)
    {
        $this->ticketFeeDetail = $ticketFeeDetail;
        return $this;
    }


}

