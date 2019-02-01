<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType;

/**
 * Class representing ResTicketingRulesAType
 */
class ResTicketingRulesAType
{

    /**
     * Container for holding rules regarding advance reservation or ticketing restrictions.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType $advResTicketing
     */
    private $advResTicketing = null;

    /**
     * Gets as advResTicketing
     *
     * Container for holding rules regarding advance reservation or ticketing restrictions.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType
     */
    public function getAdvResTicketing()
    {
        return $this->advResTicketing;
    }

    /**
     * Sets a new advResTicketing
     *
     * Container for holding rules regarding advance reservation or ticketing restrictions.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType $advResTicketing
     * @return self
     */
    public function setAdvResTicketing(\Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType $advResTicketing)
    {
        $this->advResTicketing = $advResTicketing;
        return $this;
    }


}

