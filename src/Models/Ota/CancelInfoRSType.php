<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing CancelInfoRSType
 *
 * May contain rules associated with canceling a reservation as well as the supplier's cancellation number.
 * XSD Type: CancelInfoRSType
 */
class CancelInfoRSType
{

    /**
     * A collection of cancellation rules.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CancelRuleType[] $cancelRules
     */
    private $cancelRules = null;

    /**
     * Contains the supplier's cancellation number.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Adds as cancelRule
     *
     * A collection of cancellation rules.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CancelRuleType $cancelRule
     */
    public function addToCancelRules(\Devlabs91\TravelgateNotify\Models\Ota\CancelRuleType $cancelRule)
    {
        $this->cancelRules[] = $cancelRule;
        return $this;
    }

    /**
     * isset cancelRules
     *
     * A collection of cancellation rules.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancelRules($index)
    {
        return isset($this->cancelRules[$index]);
    }

    /**
     * unset cancelRules
     *
     * A collection of cancellation rules.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancelRules($index)
    {
        unset($this->cancelRules[$index]);
    }

    /**
     * Gets as cancelRules
     *
     * A collection of cancellation rules.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CancelRuleType[]
     */
    public function getCancelRules()
    {
        return $this->cancelRules;
    }

    /**
     * Sets a new cancelRules
     *
     * A collection of cancellation rules.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CancelRuleType[] $cancelRules
     * @return self
     */
    public function setCancelRules(array $cancelRules)
    {
        $this->cancelRules = $cancelRules;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * Contains the supplier's cancellation number.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Contains the supplier's cancellation number.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }


}

