<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing TotalType
 *
 * The total amount charged for the service including additional amounts and fees.
 * XSD Type: TotalType
 */
class TotalType
{

    /**
     * The total amount not including any associated tax (e.g., sales tax, VAT, GST or any associated tax).
     *
     * @property float $amountBeforeTax
     */
    private $amountBeforeTax = null;

    /**
     * The total amount including all associated taxes (e.g., sales tax, VAT, GST or any associated tax).
     *
     * @property float $amountAfterTax
     */
    private $amountAfterTax = null;

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
     * When true, amounts do not contain additional fees or charges.
     *
     * @property bool $additionalFeesExcludedIndicator
     */
    private $additionalFeesExcludedIndicator = null;

    /**
     * Type of charge. Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * When true indicates that the service amount has been overridden.
     *
     * @property bool $serviceOverrideIndicator
     */
    private $serviceOverrideIndicator = null;

    /**
     * When true indicates that the rate amount has been overridden.
     *
     * @property bool $rateOverrideIndicator
     */
    private $rateOverrideIndicator = null;

    /**
     * This amount includes markup and taxes.
     *
     * @property float $amountIncludingMarkup
     */
    private $amountIncludingMarkup = null;

    /**
     * A collection of taxes.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TaxesType $taxes
     */
    private $taxes = null;

    /**
     * Gets as amountBeforeTax
     *
     * The total amount not including any associated tax (e.g., sales tax, VAT, GST or any associated tax).
     *
     * @return float
     */
    public function getAmountBeforeTax()
    {
        return $this->amountBeforeTax;
    }

    /**
     * Sets a new amountBeforeTax
     *
     * The total amount not including any associated tax (e.g., sales tax, VAT, GST or any associated tax).
     *
     * @param float $amountBeforeTax
     * @return self
     */
    public function setAmountBeforeTax($amountBeforeTax)
    {
        $this->amountBeforeTax = $amountBeforeTax;
        return $this;
    }

    /**
     * Gets as amountAfterTax
     *
     * The total amount including all associated taxes (e.g., sales tax, VAT, GST or any associated tax).
     *
     * @return float
     */
    public function getAmountAfterTax()
    {
        return $this->amountAfterTax;
    }

    /**
     * Sets a new amountAfterTax
     *
     * The total amount including all associated taxes (e.g., sales tax, VAT, GST or any associated tax).
     *
     * @param float $amountAfterTax
     * @return self
     */
    public function setAmountAfterTax($amountAfterTax)
    {
        $this->amountAfterTax = $amountAfterTax;
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
     * Gets as additionalFeesExcludedIndicator
     *
     * When true, amounts do not contain additional fees or charges.
     *
     * @return bool
     */
    public function getAdditionalFeesExcludedIndicator()
    {
        return $this->additionalFeesExcludedIndicator;
    }

    /**
     * Sets a new additionalFeesExcludedIndicator
     *
     * When true, amounts do not contain additional fees or charges.
     *
     * @param bool $additionalFeesExcludedIndicator
     * @return self
     */
    public function setAdditionalFeesExcludedIndicator($additionalFeesExcludedIndicator)
    {
        $this->additionalFeesExcludedIndicator = $additionalFeesExcludedIndicator;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type of charge. Refer to OpenTravel Code List Charge Type (CHG).
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
     * Type of charge. Refer to OpenTravel Code List Charge Type (CHG).
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
     * Gets as serviceOverrideIndicator
     *
     * When true indicates that the service amount has been overridden.
     *
     * @return bool
     */
    public function getServiceOverrideIndicator()
    {
        return $this->serviceOverrideIndicator;
    }

    /**
     * Sets a new serviceOverrideIndicator
     *
     * When true indicates that the service amount has been overridden.
     *
     * @param bool $serviceOverrideIndicator
     * @return self
     */
    public function setServiceOverrideIndicator($serviceOverrideIndicator)
    {
        $this->serviceOverrideIndicator = $serviceOverrideIndicator;
        return $this;
    }

    /**
     * Gets as rateOverrideIndicator
     *
     * When true indicates that the rate amount has been overridden.
     *
     * @return bool
     */
    public function getRateOverrideIndicator()
    {
        return $this->rateOverrideIndicator;
    }

    /**
     * Sets a new rateOverrideIndicator
     *
     * When true indicates that the rate amount has been overridden.
     *
     * @param bool $rateOverrideIndicator
     * @return self
     */
    public function setRateOverrideIndicator($rateOverrideIndicator)
    {
        $this->rateOverrideIndicator = $rateOverrideIndicator;
        return $this;
    }

    /**
     * Gets as amountIncludingMarkup
     *
     * This amount includes markup and taxes.
     *
     * @return float
     */
    public function getAmountIncludingMarkup()
    {
        return $this->amountIncludingMarkup;
    }

    /**
     * Sets a new amountIncludingMarkup
     *
     * This amount includes markup and taxes.
     *
     * @param float $amountIncludingMarkup
     * @return self
     */
    public function setAmountIncludingMarkup($amountIncludingMarkup)
    {
        $this->amountIncludingMarkup = $amountIncludingMarkup;
        return $this;
    }

    /**
     * Gets as taxes
     *
     * A collection of taxes.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TaxesType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * A collection of taxes.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TaxesType $taxes
     * @return self
     */
    public function setTaxes(\Devlabs91\TravelgateNotify\Models\Ota\TaxesType $taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }


}

