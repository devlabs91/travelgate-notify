<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType;

/**
 * Class representing DeltaAType
 */
class DeltaAType
{

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
     * Upper limit on the number of Deltas that should be added to the Rate Hurdle for each transient reservation.
     *
     * @property int $ceiling
     */
    private $ceiling = null;

    /**
     * Upper limit on the number of transient reservations that should be accepted.
     *
     * @property int $maxSold
     */
    private $maxSold = null;

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
     * Gets as ceiling
     *
     * Upper limit on the number of Deltas that should be added to the Rate Hurdle for each transient reservation.
     *
     * @return int
     */
    public function getCeiling()
    {
        return $this->ceiling;
    }

    /**
     * Sets a new ceiling
     *
     * Upper limit on the number of Deltas that should be added to the Rate Hurdle for each transient reservation.
     *
     * @param int $ceiling
     * @return self
     */
    public function setCeiling($ceiling)
    {
        $this->ceiling = $ceiling;
        return $this;
    }

    /**
     * Gets as maxSold
     *
     * Upper limit on the number of transient reservations that should be accepted.
     *
     * @return int
     */
    public function getMaxSold()
    {
        return $this->maxSold;
    }

    /**
     * Sets a new maxSold
     *
     * Upper limit on the number of transient reservations that should be accepted.
     *
     * @param int $maxSold
     * @return self
     */
    public function setMaxSold($maxSold)
    {
        $this->maxSold = $maxSold;
        return $this;
    }


}

