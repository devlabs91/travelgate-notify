<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ResTicketingRulesAType;

use Devlabs91\TravelgateNotify\Models\Ota\AdvResTicketingType;

/**
 * Class representing AdvResTicketingAType
 */
class AdvResTicketingAType extends AdvResTicketingType
{

    /**
     * The first date that a ticket may be issued for this fare.
     *
     * @property \DateTime $firstTicketDate
     */
    private $firstTicketDate = null;

    /**
     * The last date that a ticket may be issued for this fare.
     *
     * @property \DateTime $lastTicketDate
     */
    private $lastTicketDate = null;

    /**
     * Gets as firstTicketDate
     *
     * The first date that a ticket may be issued for this fare.
     *
     * @return \DateTime
     */
    public function getFirstTicketDate()
    {
        return $this->firstTicketDate;
    }

    /**
     * Sets a new firstTicketDate
     *
     * The first date that a ticket may be issued for this fare.
     *
     * @param \DateTime $firstTicketDate
     * @return self
     */
    public function setFirstTicketDate(\DateTime $firstTicketDate)
    {
        $this->firstTicketDate = $firstTicketDate;
        return $this;
    }

    /**
     * Gets as lastTicketDate
     *
     * The last date that a ticket may be issued for this fare.
     *
     * @return \DateTime
     */
    public function getLastTicketDate()
    {
        return $this->lastTicketDate;
    }

    /**
     * Sets a new lastTicketDate
     *
     * The last date that a ticket may be issued for this fare.
     *
     * @param \DateTime $lastTicketDate
     * @return self
     */
    public function setLastTicketDate(\DateTime $lastTicketDate)
    {
        $this->lastTicketDate = $lastTicketDate;
        return $this;
    }


}

