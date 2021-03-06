<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing CancelRuleType
 *
 * Provides the cancellation amount due according to the time before the booking date that the cancellation occurs. The amount may be either an amount or a percentage (e.g. 50% within 30 days or $100 outside 30 days).
 * XSD Type: CancelRuleType
 */
class CancelRuleType
{

    /**
     * The date by which a cancellation must be made in order to avoid this cancellation penalty.
     *
     * @property \DateTime $cancelByDate
     */
    private $cancelByDate = null;

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * The percentage to be applied for a cancellation.
     *
     * @property float $percent
     */
    private $percent = null;

    /**
     * Defines how the cancellation penalty will be applied.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The card to be charged with the cancellation fee.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType $paymentCard
     */
    private $paymentCard = null;

    /**
     * Gets as cancelByDate
     *
     * The date by which a cancellation must be made in order to avoid this cancellation penalty.
     *
     * @return \DateTime
     */
    public function getCancelByDate()
    {
        return $this->cancelByDate;
    }

    /**
     * Sets a new cancelByDate
     *
     * The date by which a cancellation must be made in order to avoid this cancellation penalty.
     *
     * @param \DateTime $cancelByDate
     * @return self
     */
    public function setCancelByDate(\DateTime $cancelByDate)
    {
        $this->cancelByDate = $cancelByDate;
        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param int $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }

    /**
     * Gets as percent
     *
     * The percentage to be applied for a cancellation.
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * The percentage to be applied for a cancellation.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as type
     *
     * Defines how the cancellation penalty will be applied.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Defines how the cancellation penalty will be applied.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as paymentCard
     *
     * The card to be charged with the cancellation fee.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType
     */
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Sets a new paymentCard
     *
     * The card to be charged with the cancellation fee.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType $paymentCard
     * @return self
     */
    public function setPaymentCard(\Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType $paymentCard)
    {
        $this->paymentCard = $paymentCard;
        return $this;
    }


}

