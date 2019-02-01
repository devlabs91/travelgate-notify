<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType;

/**
 * Class representing AddtionalRulesAType
 */
class AddtionalRulesAType
{

    /**
     * Indicates an additional rule for the reservation (e.g., cancelable, modifiable or refundable).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType[] $additionalRule
     */
    private $additionalRule = [
        
    ];

    /**
     * Adds as additionalRule
     *
     * Indicates an additional rule for the reservation (e.g., cancelable, modifiable or refundable).
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType $additionalRule
     */
    public function addToAdditionalRule(\Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType $additionalRule)
    {
        $this->additionalRule[] = $additionalRule;
        return $this;
    }

    /**
     * isset additionalRule
     *
     * Indicates an additional rule for the reservation (e.g., cancelable, modifiable or refundable).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalRule($index)
    {
        return isset($this->additionalRule[$index]);
    }

    /**
     * unset additionalRule
     *
     * Indicates an additional rule for the reservation (e.g., cancelable, modifiable or refundable).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalRule($index)
    {
        unset($this->additionalRule[$index]);
    }

    /**
     * Gets as additionalRule
     *
     * Indicates an additional rule for the reservation (e.g., cancelable, modifiable or refundable).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType[]
     */
    public function getAdditionalRule()
    {
        return $this->additionalRule;
    }

    /**
     * Sets a new additionalRule
     *
     * Indicates an additional rule for the reservation (e.g., cancelable, modifiable or refundable).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType[] $additionalRule
     * @return self
     */
    public function setAdditionalRule(array $additionalRule)
    {
        $this->additionalRule = $additionalRule;
        return $this;
    }


}

