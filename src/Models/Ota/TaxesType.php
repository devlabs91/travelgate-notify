<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing TaxesType
 *
 * A collection of taxes.
 * XSD Type: TaxesType
 */
class TaxesType
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
     * An individual tax.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TaxType[] $tax
     */
    private $tax = [
        
    ];

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
     * Adds as tax
     *
     * An individual tax.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TaxType $tax
     */
    public function addToTax(\Devlabs91\TravelgateNotify\Models\Ota\TaxType $tax)
    {
        $this->tax[] = $tax;
        return $this;
    }

    /**
     * isset tax
     *
     * An individual tax.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTax($index)
    {
        return isset($this->tax[$index]);
    }

    /**
     * unset tax
     *
     * An individual tax.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTax($index)
    {
        unset($this->tax[$index]);
    }

    /**
     * Gets as tax
     *
     * An individual tax.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TaxType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * An individual tax.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TaxType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;
        return $this;
    }


}

