<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleChargeType
 *
 * Identifies specific charges.
 * XSD Type: VehicleChargeType
 */
class VehicleChargeType
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
     * @property bool $taxInclusive
     */
    private $taxInclusive = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property bool $guaranteedInd
     */
    private $guaranteedInd = null;

    /**
     * An indication if this amount is included in the base vehicle rate, or is an additonal cost.
     *  false
     *
     * @property bool $includedInRate
     */
    private $includedInRate = null;

    /**
     * When true, indicates the item's charges are included in the estimated total amount (in TotalCharge) and when false, the item is not included in the estimated total amount.
     *
     * @property bool $includedInEstTotalInd
     */
    private $includedInEstTotalInd = null;

    /**
     * When true, the rate has been converted to a different currency.
     *
     * @property bool $rateConvertInd
     */
    private $rateConvertInd = null;

    /**
     * A collection of one or more taxes associated with a specific charge.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\TaxAmountsAType\TaxAmountAType[] $taxAmounts
     */
    private $taxAmounts = null;

    /**
     * Information on any minimum or maximum amounts, if appropriate.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\MinMaxAType $minMax
     */
    private $minMax = null;

    /**
     * Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\CalculationAType[] $calculation
     */
    private $calculation = [
        
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
     * Gets as taxInclusive
     *
     * @return bool
     */
    public function getTaxInclusive()
    {
        return $this->taxInclusive;
    }

    /**
     * Sets a new taxInclusive
     *
     * @param bool $taxInclusive
     * @return self
     */
    public function setTaxInclusive($taxInclusive)
    {
        $this->taxInclusive = $taxInclusive;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as guaranteedInd
     *
     * @return bool
     */
    public function getGuaranteedInd()
    {
        return $this->guaranteedInd;
    }

    /**
     * Sets a new guaranteedInd
     *
     * @param bool $guaranteedInd
     * @return self
     */
    public function setGuaranteedInd($guaranteedInd)
    {
        $this->guaranteedInd = $guaranteedInd;
        return $this;
    }

    /**
     * Gets as includedInRate
     *
     * An indication if this amount is included in the base vehicle rate, or is an additonal cost.
     *  false
     *
     * @return bool
     */
    public function getIncludedInRate()
    {
        return $this->includedInRate;
    }

    /**
     * Sets a new includedInRate
     *
     * An indication if this amount is included in the base vehicle rate, or is an additonal cost.
     *  false
     *
     * @param bool $includedInRate
     * @return self
     */
    public function setIncludedInRate($includedInRate)
    {
        $this->includedInRate = $includedInRate;
        return $this;
    }

    /**
     * Gets as includedInEstTotalInd
     *
     * When true, indicates the item's charges are included in the estimated total amount (in TotalCharge) and when false, the item is not included in the estimated total amount.
     *
     * @return bool
     */
    public function getIncludedInEstTotalInd()
    {
        return $this->includedInEstTotalInd;
    }

    /**
     * Sets a new includedInEstTotalInd
     *
     * When true, indicates the item's charges are included in the estimated total amount (in TotalCharge) and when false, the item is not included in the estimated total amount.
     *
     * @param bool $includedInEstTotalInd
     * @return self
     */
    public function setIncludedInEstTotalInd($includedInEstTotalInd)
    {
        $this->includedInEstTotalInd = $includedInEstTotalInd;
        return $this;
    }

    /**
     * Gets as rateConvertInd
     *
     * When true, the rate has been converted to a different currency.
     *
     * @return bool
     */
    public function getRateConvertInd()
    {
        return $this->rateConvertInd;
    }

    /**
     * Sets a new rateConvertInd
     *
     * When true, the rate has been converted to a different currency.
     *
     * @param bool $rateConvertInd
     * @return self
     */
    public function setRateConvertInd($rateConvertInd)
    {
        $this->rateConvertInd = $rateConvertInd;
        return $this;
    }

    /**
     * Adds as taxAmount
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\TaxAmountsAType\TaxAmountAType $taxAmount
     */
    public function addToTaxAmounts(\Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\TaxAmountsAType\TaxAmountAType $taxAmount)
    {
        $this->taxAmounts[] = $taxAmount;
        return $this;
    }

    /**
     * isset taxAmounts
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxAmounts($index)
    {
        return isset($this->taxAmounts[$index]);
    }

    /**
     * unset taxAmounts
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxAmounts($index)
    {
        unset($this->taxAmounts[$index]);
    }

    /**
     * Gets as taxAmounts
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\TaxAmountsAType\TaxAmountAType[]
     */
    public function getTaxAmounts()
    {
        return $this->taxAmounts;
    }

    /**
     * Sets a new taxAmounts
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\TaxAmountsAType\TaxAmountAType[] $taxAmounts
     * @return self
     */
    public function setTaxAmounts(array $taxAmounts)
    {
        $this->taxAmounts = $taxAmounts;
        return $this;
    }

    /**
     * Gets as minMax
     *
     * Information on any minimum or maximum amounts, if appropriate.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\MinMaxAType
     */
    public function getMinMax()
    {
        return $this->minMax;
    }

    /**
     * Sets a new minMax
     *
     * Information on any minimum or maximum amounts, if appropriate.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\MinMaxAType $minMax
     * @return self
     */
    public function setMinMax(\Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\MinMaxAType $minMax)
    {
        $this->minMax = $minMax;
        return $this;
    }

    /**
     * Adds as calculation
     *
     * Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\CalculationAType $calculation
     */
    public function addToCalculation(\Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\CalculationAType $calculation)
    {
        $this->calculation[] = $calculation;
        return $this;
    }

    /**
     * isset calculation
     *
     * Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCalculation($index)
    {
        return isset($this->calculation[$index]);
    }

    /**
     * unset calculation
     *
     * Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCalculation($index)
    {
        unset($this->calculation[$index]);
    }

    /**
     * Gets as calculation
     *
     * Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\CalculationAType[]
     */
    public function getCalculation()
    {
        return $this->calculation;
    }

    /**
     * Sets a new calculation
     *
     * Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\CalculationAType[] $calculation
     * @return self
     */
    public function setCalculation(array $calculation)
    {
        $this->calculation = $calculation;
        return $this;
    }


}

