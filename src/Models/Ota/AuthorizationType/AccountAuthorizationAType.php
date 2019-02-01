<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AuthorizationType;

/**
 * Class representing AccountAuthorizationAType
 */
class AccountAuthorizationAType
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
     * Specifying the currency used in the authorization, when it isn't a ISO 4217, three alpha code (e.g., points, miles).
     *
     * @property string $nonISOCurrencyCode
     */
    private $nonISOCurrencyCode = null;

    /**
     * Information about the account.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AuthorizationType\AccountAuthorizationAType\AccountInfoAType $accountInfo
     */
    private $accountInfo = null;

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
     * Gets as nonISOCurrencyCode
     *
     * Specifying the currency used in the authorization, when it isn't a ISO 4217, three alpha code (e.g., points, miles).
     *
     * @return string
     */
    public function getNonISOCurrencyCode()
    {
        return $this->nonISOCurrencyCode;
    }

    /**
     * Sets a new nonISOCurrencyCode
     *
     * Specifying the currency used in the authorization, when it isn't a ISO 4217, three alpha code (e.g., points, miles).
     *
     * @param string $nonISOCurrencyCode
     * @return self
     */
    public function setNonISOCurrencyCode($nonISOCurrencyCode)
    {
        $this->nonISOCurrencyCode = $nonISOCurrencyCode;
        return $this;
    }

    /**
     * Gets as accountInfo
     *
     * Information about the account.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AuthorizationType\AccountAuthorizationAType\AccountInfoAType
     */
    public function getAccountInfo()
    {
        return $this->accountInfo;
    }

    /**
     * Sets a new accountInfo
     *
     * Information about the account.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AuthorizationType\AccountAuthorizationAType\AccountInfoAType $accountInfo
     * @return self
     */
    public function setAccountInfo(\Devlabs91\TravelgateNotify\Models\Ota\AuthorizationType\AccountAuthorizationAType\AccountInfoAType $accountInfo)
    {
        $this->accountInfo = $accountInfo;
        return $this;
    }


}

