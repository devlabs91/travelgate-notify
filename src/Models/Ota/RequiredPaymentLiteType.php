<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing RequiredPaymentLiteType
 *
 * Summary version of the RequiredPaymentType, initially created for the Travel Itinerary Message set.
 * XSD Type: RequiredPaymentLiteType
 */
class RequiredPaymentLiteType
{

    /**
     * An enumerated type defining the type of action taken when the deadline has been exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @property string $retributionType
     */
    private $retributionType = null;

    /**
     * Collection of forms of payment accepted for payment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType[] $acceptedPayments
     */
    private $acceptedPayments = null;

    /**
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AmountPercentType $amountPercent
     */
    private $amountPercent = null;

    /**
     * Gets as retributionType
     *
     * An enumerated type defining the type of action taken when the deadline has been exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @return string
     */
    public function getRetributionType()
    {
        return $this->retributionType;
    }

    /**
     * Sets a new retributionType
     *
     * An enumerated type defining the type of action taken when the deadline has been exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @param string $retributionType
     * @return self
     */
    public function setRetributionType($retributionType)
    {
        $this->retributionType = $retributionType;
        return $this;
    }

    /**
     * Adds as acceptedPayment
     *
     * Collection of forms of payment accepted for payment.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType $acceptedPayment
     */
    public function addToAcceptedPayments(\Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType $acceptedPayment)
    {
        $this->acceptedPayments[] = $acceptedPayment;
        return $this;
    }

    /**
     * isset acceptedPayments
     *
     * Collection of forms of payment accepted for payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptedPayments($index)
    {
        return isset($this->acceptedPayments[$index]);
    }

    /**
     * unset acceptedPayments
     *
     * Collection of forms of payment accepted for payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptedPayments($index)
    {
        unset($this->acceptedPayments[$index]);
    }

    /**
     * Gets as acceptedPayments
     *
     * Collection of forms of payment accepted for payment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType[]
     */
    public function getAcceptedPayments()
    {
        return $this->acceptedPayments;
    }

    /**
     * Sets a new acceptedPayments
     *
     * Collection of forms of payment accepted for payment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType[] $acceptedPayments
     * @return self
     */
    public function setAcceptedPayments(array $acceptedPayments)
    {
        $this->acceptedPayments = $acceptedPayments;
        return $this;
    }

    /**
     * Gets as amountPercent
     *
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AmountPercentType
     */
    public function getAmountPercent()
    {
        return $this->amountPercent;
    }

    /**
     * Sets a new amountPercent
     *
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AmountPercentType $amountPercent
     * @return self
     */
    public function setAmountPercent(\Devlabs91\TravelgateNotify\Models\Ota\AmountPercentType $amountPercent)
    {
        $this->amountPercent = $amountPercent;
        return $this;
    }


}

