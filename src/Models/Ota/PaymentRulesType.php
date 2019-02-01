<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing PaymentRulesType
 *
 * Collection of payment rules.
 * XSD Type: PaymentRulesType
 */
class PaymentRulesType
{

    /**
     * One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType[] $paymentRule
     */
    private $paymentRule = [
        
    ];

    /**
     * Adds as paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRule(\Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType $paymentRule)
    {
        $this->paymentRule[] = $paymentRule;
        return $this;
    }

    /**
     * isset paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentRule($index)
    {
        return isset($this->paymentRule[$index]);
    }

    /**
     * unset paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentRule($index)
    {
        unset($this->paymentRule[$index]);
    }

    /**
     * Gets as paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType[]
     */
    public function getPaymentRule()
    {
        return $this->paymentRule;
    }

    /**
     * Sets a new paymentRule
     *
     * One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MonetaryRuleType[] $paymentRule
     * @return self
     */
    public function setPaymentRule(array $paymentRule)
    {
        $this->paymentRule = $paymentRule;
        return $this;
    }


}

