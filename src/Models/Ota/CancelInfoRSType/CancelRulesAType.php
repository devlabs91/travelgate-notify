<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\CancelInfoRSType;

/**
 * Class representing CancelRulesAType
 */
class CancelRulesAType
{

    /**
     * Details of a cancellation rule.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CancelRuleType[] $cancelRule
     */
    private $cancelRule = [
        
    ];

    /**
     * Adds as cancelRule
     *
     * Details of a cancellation rule.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CancelRuleType $cancelRule
     */
    public function addToCancelRule(\Devlabs91\TravelgateNotify\Models\Ota\CancelRuleType $cancelRule)
    {
        $this->cancelRule[] = $cancelRule;
        return $this;
    }

    /**
     * isset cancelRule
     *
     * Details of a cancellation rule.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancelRule($index)
    {
        return isset($this->cancelRule[$index]);
    }

    /**
     * unset cancelRule
     *
     * Details of a cancellation rule.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancelRule($index)
    {
        unset($this->cancelRule[$index]);
    }

    /**
     * Gets as cancelRule
     *
     * Details of a cancellation rule.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CancelRuleType[]
     */
    public function getCancelRule()
    {
        return $this->cancelRule;
    }

    /**
     * Sets a new cancelRule
     *
     * Details of a cancellation rule.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CancelRuleType[] $cancelRule
     * @return self
     */
    public function setCancelRule(array $cancelRule)
    {
        $this->cancelRule = $cancelRule;
        return $this;
    }


}

