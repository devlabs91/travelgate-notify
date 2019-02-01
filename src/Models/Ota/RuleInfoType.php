<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing RuleInfoType
 *
 * Contains summary fare rule information as well as detailed Rule Information for Fare Basis Codes. Information may be actual rules data or the results returned from a rules-based inquiry.
 * XSD Type: RuleInfoType
 */
class RuleInfoType
{

    /**
     * General container for rules regarding fare reservation, ticketing and sale restrictions
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ResTicketingRulesAType $resTicketingRules
     */
    private $resTicketingRules = null;

    /**
     * Rules providing minimum or maximum stay restrictions.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType $lengthOfStayRules
     */
    private $lengthOfStayRules = null;

    /**
     * General container for rules specifying amounts for such things as: surcharges, deposits, change penalties, cancellation penalties, etc.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ChargesRulesAType $chargesRules
     */
    private $chargesRules = null;

    /**
     * Gets as resTicketingRules
     *
     * General container for rules regarding fare reservation, ticketing and sale restrictions
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ResTicketingRulesAType
     */
    public function getResTicketingRules()
    {
        return $this->resTicketingRules;
    }

    /**
     * Sets a new resTicketingRules
     *
     * General container for rules regarding fare reservation, ticketing and sale restrictions
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ResTicketingRulesAType $resTicketingRules
     * @return self
     */
    public function setResTicketingRules(\Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ResTicketingRulesAType $resTicketingRules)
    {
        $this->resTicketingRules = $resTicketingRules;
        return $this;
    }

    /**
     * Gets as lengthOfStayRules
     *
     * Rules providing minimum or maximum stay restrictions.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType
     */
    public function getLengthOfStayRules()
    {
        return $this->lengthOfStayRules;
    }

    /**
     * Sets a new lengthOfStayRules
     *
     * Rules providing minimum or maximum stay restrictions.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType $lengthOfStayRules
     * @return self
     */
    public function setLengthOfStayRules(\Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType $lengthOfStayRules)
    {
        $this->lengthOfStayRules = $lengthOfStayRules;
        return $this;
    }

    /**
     * Gets as chargesRules
     *
     * General container for rules specifying amounts for such things as: surcharges, deposits, change penalties, cancellation penalties, etc.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ChargesRulesAType
     */
    public function getChargesRules()
    {
        return $this->chargesRules;
    }

    /**
     * Sets a new chargesRules
     *
     * General container for rules specifying amounts for such things as: surcharges, deposits, change penalties, cancellation penalties, etc.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ChargesRulesAType $chargesRules
     * @return self
     */
    public function setChargesRules(\Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ChargesRulesAType $chargesRules)
    {
        $this->chargesRules = $chargesRules;
        return $this;
    }


}

