<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing AirTaxType
 *
 * Defines the data fields available for air tax. The element text of this type may contain a description of the tax.
 * XSD Type: AirTaxType
 */
class AirTaxType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Identifies the code for the tax.
     *
     * @property string $taxCode
     */
    private $taxCode = null;

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
     * Used to identify the country imposing the tax.
     *
     * @property string $taxCountry
     */
    private $taxCountry = null;

    /**
     * Identifies the tax code by name.
     *
     * @property string $taxName
     */
    private $taxName = null;

    /**
     * This attribute is a candidate for deprecation. Its use is not recommended. Please instead use the new TaxTransactionType attribute which has taken its place. Deprecation warning added in 2009A.
     *  When true, the fare is exempt from the tax specified by the tax code.
     *
     * @property bool $taxExemptInd
     */
    private $taxExemptInd = null;

    /**
     * Indicates the required modification to the element.
     *
     * @property string $operation
     */
    private $operation = null;

    /**
     * Used to indicate the type of tax (e.g. charge, refund or exempt).
     *
     * @property string $taxTransactionType
     */
    private $taxTransactionType = null;

    /**
     * A unique reference for the tax type (commonly used for modification.)
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as taxCode
     *
     * Identifies the code for the tax.
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->taxCode;
    }

    /**
     * Sets a new taxCode
     *
     * Identifies the code for the tax.
     *
     * @param string $taxCode
     * @return self
     */
    public function setTaxCode($taxCode)
    {
        $this->taxCode = $taxCode;
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
     * Gets as taxCountry
     *
     * Used to identify the country imposing the tax.
     *
     * @return string
     */
    public function getTaxCountry()
    {
        return $this->taxCountry;
    }

    /**
     * Sets a new taxCountry
     *
     * Used to identify the country imposing the tax.
     *
     * @param string $taxCountry
     * @return self
     */
    public function setTaxCountry($taxCountry)
    {
        $this->taxCountry = $taxCountry;
        return $this;
    }

    /**
     * Gets as taxName
     *
     * Identifies the tax code by name.
     *
     * @return string
     */
    public function getTaxName()
    {
        return $this->taxName;
    }

    /**
     * Sets a new taxName
     *
     * Identifies the tax code by name.
     *
     * @param string $taxName
     * @return self
     */
    public function setTaxName($taxName)
    {
        $this->taxName = $taxName;
        return $this;
    }

    /**
     * Gets as taxExemptInd
     *
     * This attribute is a candidate for deprecation. Its use is not recommended. Please instead use the new TaxTransactionType attribute which has taken its place. Deprecation warning added in 2009A.
     *  When true, the fare is exempt from the tax specified by the tax code.
     *
     * @return bool
     */
    public function getTaxExemptInd()
    {
        return $this->taxExemptInd;
    }

    /**
     * Sets a new taxExemptInd
     *
     * This attribute is a candidate for deprecation. Its use is not recommended. Please instead use the new TaxTransactionType attribute which has taken its place. Deprecation warning added in 2009A.
     *  When true, the fare is exempt from the tax specified by the tax code.
     *
     * @param bool $taxExemptInd
     * @return self
     */
    public function setTaxExemptInd($taxExemptInd)
    {
        $this->taxExemptInd = $taxExemptInd;
        return $this;
    }

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Gets as taxTransactionType
     *
     * Used to indicate the type of tax (e.g. charge, refund or exempt).
     *
     * @return string
     */
    public function getTaxTransactionType()
    {
        return $this->taxTransactionType;
    }

    /**
     * Sets a new taxTransactionType
     *
     * Used to indicate the type of tax (e.g. charge, refund or exempt).
     *
     * @param string $taxTransactionType
     * @return self
     */
    public function setTaxTransactionType($taxTransactionType)
    {
        $this->taxTransactionType = $taxTransactionType;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique reference for the tax type (commonly used for modification.)
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique reference for the tax type (commonly used for modification.)
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }


}

