<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType;

/**
 * Class representing RateRangeAType
 */
class RateRangeAType
{

    /**
     * A decimal value that indicates the minimum monetary value to be considered in a request for an available product.
     *
     * @property float $minRate
     */
    private $minRate = null;

    /**
     * A decimal value that indicates the maximum monetary value to be considered in a request for an available product.
     *
     * @property float $maxRate
     */
    private $maxRate = null;

    /**
     * The rate amount used in place of MinRate and MaxRate when a specific rate is being requested.
     *
     * @property float $fixedRate
     */
    private $fixedRate = null;

    /**
     * Used to specify the period of time to which the rates apply.
     *
     * @property string $rateTimeUnit
     */
    private $rateTimeUnit = null;

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
     * Gets as minRate
     *
     * A decimal value that indicates the minimum monetary value to be considered in a request for an available product.
     *
     * @return float
     */
    public function getMinRate()
    {
        return $this->minRate;
    }

    /**
     * Sets a new minRate
     *
     * A decimal value that indicates the minimum monetary value to be considered in a request for an available product.
     *
     * @param float $minRate
     * @return self
     */
    public function setMinRate($minRate)
    {
        $this->minRate = $minRate;
        return $this;
    }

    /**
     * Gets as maxRate
     *
     * A decimal value that indicates the maximum monetary value to be considered in a request for an available product.
     *
     * @return float
     */
    public function getMaxRate()
    {
        return $this->maxRate;
    }

    /**
     * Sets a new maxRate
     *
     * A decimal value that indicates the maximum monetary value to be considered in a request for an available product.
     *
     * @param float $maxRate
     * @return self
     */
    public function setMaxRate($maxRate)
    {
        $this->maxRate = $maxRate;
        return $this;
    }

    /**
     * Gets as fixedRate
     *
     * The rate amount used in place of MinRate and MaxRate when a specific rate is being requested.
     *
     * @return float
     */
    public function getFixedRate()
    {
        return $this->fixedRate;
    }

    /**
     * Sets a new fixedRate
     *
     * The rate amount used in place of MinRate and MaxRate when a specific rate is being requested.
     *
     * @param float $fixedRate
     * @return self
     */
    public function setFixedRate($fixedRate)
    {
        $this->fixedRate = $fixedRate;
        return $this;
    }

    /**
     * Gets as rateTimeUnit
     *
     * Used to specify the period of time to which the rates apply.
     *
     * @return string
     */
    public function getRateTimeUnit()
    {
        return $this->rateTimeUnit;
    }

    /**
     * Sets a new rateTimeUnit
     *
     * Used to specify the period of time to which the rates apply.
     *
     * @param string $rateTimeUnit
     * @return self
     */
    public function setRateTimeUnit($rateTimeUnit)
    {
        $this->rateTimeUnit = $rateTimeUnit;
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


}

