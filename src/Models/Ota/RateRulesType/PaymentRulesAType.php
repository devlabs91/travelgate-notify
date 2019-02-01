<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RateRulesType;

use Devlabs91\TravelgateNotify\Models\Ota\PaymentRulesType;

/**
 * Class representing PaymentRulesAType
 */
class PaymentRulesAType extends PaymentRulesType
{

    /**
     * A collection of acceptable methods of payment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType[] $acceptablePayments
     */
    private $acceptablePayments = [
        
    ];

    /**
     * Adds as acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType $acceptablePayments
     */
    public function addToAcceptablePayments(\Devlabs91\TravelgateNotify\Models\Ota\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType $acceptablePayments)
    {
        $this->acceptablePayments[] = $acceptablePayments;
        return $this;
    }

    /**
     * isset acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptablePayments($index)
    {
        return isset($this->acceptablePayments[$index]);
    }

    /**
     * unset acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptablePayments($index)
    {
        unset($this->acceptablePayments[$index]);
    }

    /**
     * Gets as acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType[]
     */
    public function getAcceptablePayments()
    {
        return $this->acceptablePayments;
    }

    /**
     * Sets a new acceptablePayments
     *
     * A collection of acceptable methods of payment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType[] $acceptablePayments
     * @return self
     */
    public function setAcceptablePayments(array $acceptablePayments)
    {
        $this->acceptablePayments = $acceptablePayments;
        return $this;
    }


}

