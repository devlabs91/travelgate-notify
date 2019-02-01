<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RateRulesType\PaymentRulesAType;

/**
 * Class representing AcceptablePaymentsAType
 */
class AcceptablePaymentsAType
{

    /**
     * Specifies the type of payemt (i.e., guarantee, deposit). Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @property string $paymentTypeCode
     */
    private $paymentTypeCode = null;

    /**
     * Specifies an acceptable method of payment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType\AcceptablePaymentAType[] $acceptablePayment
     */
    private $acceptablePayment = [
        
    ];

    /**
     * Gets as paymentTypeCode
     *
     * Specifies the type of payemt (i.e., guarantee, deposit). Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @return string
     */
    public function getPaymentTypeCode()
    {
        return $this->paymentTypeCode;
    }

    /**
     * Sets a new paymentTypeCode
     *
     * Specifies the type of payemt (i.e., guarantee, deposit). Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @param string $paymentTypeCode
     * @return self
     */
    public function setPaymentTypeCode($paymentTypeCode)
    {
        $this->paymentTypeCode = $paymentTypeCode;
        return $this;
    }

    /**
     * Adds as acceptablePayment
     *
     * Specifies an acceptable method of payment.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType\AcceptablePaymentAType $acceptablePayment
     */
    public function addToAcceptablePayment(\Devlabs91\TravelgateNotify\Models\Ota\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType\AcceptablePaymentAType $acceptablePayment)
    {
        $this->acceptablePayment[] = $acceptablePayment;
        return $this;
    }

    /**
     * isset acceptablePayment
     *
     * Specifies an acceptable method of payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptablePayment($index)
    {
        return isset($this->acceptablePayment[$index]);
    }

    /**
     * unset acceptablePayment
     *
     * Specifies an acceptable method of payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptablePayment($index)
    {
        unset($this->acceptablePayment[$index]);
    }

    /**
     * Gets as acceptablePayment
     *
     * Specifies an acceptable method of payment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType\AcceptablePaymentAType[]
     */
    public function getAcceptablePayment()
    {
        return $this->acceptablePayment;
    }

    /**
     * Sets a new acceptablePayment
     *
     * Specifies an acceptable method of payment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RateRulesType\PaymentRulesAType\AcceptablePaymentsAType\AcceptablePaymentAType[] $acceptablePayment
     * @return self
     */
    public function setAcceptablePayment(array $acceptablePayment)
    {
        $this->acceptablePayment = $acceptablePayment;
        return $this;
    }


}

