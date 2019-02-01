<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType;

/**
 * Class representing TicketDesignatorsAType
 */
class TicketDesignatorsAType
{

    /**
     * Contains the discount code and a flight reference applicable to the fare.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType[] $ticketDesignator
     */
    private $ticketDesignator = [
        
    ];

    /**
     * Adds as ticketDesignator
     *
     * Contains the discount code and a flight reference applicable to the fare.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType $ticketDesignator
     */
    public function addToTicketDesignator(\Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType $ticketDesignator)
    {
        $this->ticketDesignator[] = $ticketDesignator;
        return $this;
    }

    /**
     * isset ticketDesignator
     *
     * Contains the discount code and a flight reference applicable to the fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTicketDesignator($index)
    {
        return isset($this->ticketDesignator[$index]);
    }

    /**
     * unset ticketDesignator
     *
     * Contains the discount code and a flight reference applicable to the fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTicketDesignator($index)
    {
        unset($this->ticketDesignator[$index]);
    }

    /**
     * Gets as ticketDesignator
     *
     * Contains the discount code and a flight reference applicable to the fare.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType[]
     */
    public function getTicketDesignator()
    {
        return $this->ticketDesignator;
    }

    /**
     * Sets a new ticketDesignator
     *
     * Contains the discount code and a flight reference applicable to the fare.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType[] $ticketDesignator
     * @return self
     */
    public function setTicketDesignator(array $ticketDesignator)
    {
        $this->ticketDesignator = $ticketDesignator;
        return $this;
    }


}

