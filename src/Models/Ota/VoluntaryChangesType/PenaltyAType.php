<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType;

/**
 * Class representing PenaltyAType
 */
class PenaltyAType
{

    /**
     * Indicates the type of penalty involved in the search or response.
     *
     * @property string $penaltyType
     */
    private $penaltyType = null;

    /**
     * Identifier used to indicate whether the change occurs before or after departure from the origin city.
     *
     * @property string $departureStatus
     */
    private $departureStatus = null;

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
     * The penalty charge conveyed as a percent of the total fare.
     *
     * @property float $percent
     */
    private $percent = null;

    /**
     * Gets as penaltyType
     *
     * Indicates the type of penalty involved in the search or response.
     *
     * @return string
     */
    public function getPenaltyType()
    {
        return $this->penaltyType;
    }

    /**
     * Sets a new penaltyType
     *
     * Indicates the type of penalty involved in the search or response.
     *
     * @param string $penaltyType
     * @return self
     */
    public function setPenaltyType($penaltyType)
    {
        $this->penaltyType = $penaltyType;
        return $this;
    }

    /**
     * Gets as departureStatus
     *
     * Identifier used to indicate whether the change occurs before or after departure from the origin city.
     *
     * @return string
     */
    public function getDepartureStatus()
    {
        return $this->departureStatus;
    }

    /**
     * Sets a new departureStatus
     *
     * Identifier used to indicate whether the change occurs before or after departure from the origin city.
     *
     * @param string $departureStatus
     * @return self
     */
    public function setDepartureStatus($departureStatus)
    {
        $this->departureStatus = $departureStatus;
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
     * The penalty charge conveyed as a percent of the total fare.
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
     * The penalty charge conveyed as a percent of the total fare.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }


}

