<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing FeeType
 *
 * Used for non-tax fees and charges (e.g. service charges) .
 * XSD Type: FeeType
 */
class FeeType
{

    /**
     * Indicates whether taxes are included when figuring the fees.
     *
     * @property bool $taxInclusive
     */
    private $taxInclusive = null;

    /**
     * Used to indicate if the amount is inclusive or exclusive of other charges, such as taxes, or is cumulative (amounts have been added to each other).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Code identifying the fee (e.g.,agency fee, municipality fee). Refer to OpenTravel Code List Fee Tax Type (FTT).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Fee percentage; if zero, assume use of the Amount attribute (Amount or Percent must be a zero value).
     *
     * @property float $percent
     */
    private $percent = null;

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
     * Indicates the starting date.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @property bool $expireDateExclusiveIndicator
     */
    private $expireDateExclusiveIndicator = null;

    /**
     * When true, indicates the fee is mandatory. When false, the fee is not mandatory.
     *
     * @property bool $mandatoryIndicator
     */
    private $mandatoryIndicator = null;

    /**
     * An index code to identify an instance in a collection of like items.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * This is the unit for which the charge applies (e.g. room, person, seat). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @property string $chargeUnit
     */
    private $chargeUnit = null;

    /**
     * This is the timeframe used to apply the charge during the course of the reservation (e.g. Daily, Weekly, Stay). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @property string $chargeFrequency
     */
    private $chargeFrequency = null;

    /**
     * Number of units permitted before charges are applied (e.g., more than 4 persons).
     *
     * @property int $chargeUnitExempt
     */
    private $chargeUnitExempt = null;

    /**
     * ChargeFrequency exemptions before charges are applied (e.g. after 2 nights).
     *
     * @property int $chargeFrequencyExempt
     */
    private $chargeFrequencyExempt = null;

    /**
     * Maximum number of Units for which the charge will be applied (e.g., waive charges above 10 rooms).
     *
     * @property int $maxChargeUnitApplies
     */
    private $maxChargeUnitApplies = null;

    /**
     * Maximum number of times the charge will be applied (e.g. waive charges above 30 nights).
     *
     * @property int $maxChargeFrequencyApplies
     */
    private $maxChargeFrequencyApplies = null;

    /**
     * When true, indicates that the fee is subject to tax.
     *
     * @property bool $taxableIndicator
     */
    private $taxableIndicator = null;

    /**
     * Used for taxes on the associated fee.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TaxesType $taxes
     */
    private $taxes = null;

    /**
     * Text description of the fees in a given language.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as taxInclusive
     *
     * Indicates whether taxes are included when figuring the fees.
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
     * Indicates whether taxes are included when figuring the fees.
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
     * Gets as type
     *
     * Used to indicate if the amount is inclusive or exclusive of other charges, such as taxes, or is cumulative (amounts have been added to each other).
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
     * Used to indicate if the amount is inclusive or exclusive of other charges, such as taxes, or is cumulative (amounts have been added to each other).
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
     * Gets as code
     *
     * Code identifying the fee (e.g.,agency fee, municipality fee). Refer to OpenTravel Code List Fee Tax Type (FTT).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code identifying the fee (e.g.,agency fee, municipality fee). Refer to OpenTravel Code List Fee Tax Type (FTT).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as percent
     *
     * Fee percentage; if zero, assume use of the Amount attribute (Amount or Percent must be a zero value).
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
     * Fee percentage; if zero, assume use of the Amount attribute (Amount or Percent must be a zero value).
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
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as expireDateExclusiveIndicator
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return bool
     */
    public function getExpireDateExclusiveIndicator()
    {
        return $this->expireDateExclusiveIndicator;
    }

    /**
     * Sets a new expireDateExclusiveIndicator
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param bool $expireDateExclusiveIndicator
     * @return self
     */
    public function setExpireDateExclusiveIndicator($expireDateExclusiveIndicator)
    {
        $this->expireDateExclusiveIndicator = $expireDateExclusiveIndicator;
        return $this;
    }

    /**
     * Gets as mandatoryIndicator
     *
     * When true, indicates the fee is mandatory. When false, the fee is not mandatory.
     *
     * @return bool
     */
    public function getMandatoryIndicator()
    {
        return $this->mandatoryIndicator;
    }

    /**
     * Sets a new mandatoryIndicator
     *
     * When true, indicates the fee is mandatory. When false, the fee is not mandatory.
     *
     * @param bool $mandatoryIndicator
     * @return self
     */
    public function setMandatoryIndicator($mandatoryIndicator)
    {
        $this->mandatoryIndicator = $mandatoryIndicator;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * An index code to identify an instance in a collection of like items.
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
     * An index code to identify an instance in a collection of like items.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as chargeUnit
     *
     * This is the unit for which the charge applies (e.g. room, person, seat). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @return string
     */
    public function getChargeUnit()
    {
        return $this->chargeUnit;
    }

    /**
     * Sets a new chargeUnit
     *
     * This is the unit for which the charge applies (e.g. room, person, seat). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @param string $chargeUnit
     * @return self
     */
    public function setChargeUnit($chargeUnit)
    {
        $this->chargeUnit = $chargeUnit;
        return $this;
    }

    /**
     * Gets as chargeFrequency
     *
     * This is the timeframe used to apply the charge during the course of the reservation (e.g. Daily, Weekly, Stay). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @return string
     */
    public function getChargeFrequency()
    {
        return $this->chargeFrequency;
    }

    /**
     * Sets a new chargeFrequency
     *
     * This is the timeframe used to apply the charge during the course of the reservation (e.g. Daily, Weekly, Stay). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @param string $chargeFrequency
     * @return self
     */
    public function setChargeFrequency($chargeFrequency)
    {
        $this->chargeFrequency = $chargeFrequency;
        return $this;
    }

    /**
     * Gets as chargeUnitExempt
     *
     * Number of units permitted before charges are applied (e.g., more than 4 persons).
     *
     * @return int
     */
    public function getChargeUnitExempt()
    {
        return $this->chargeUnitExempt;
    }

    /**
     * Sets a new chargeUnitExempt
     *
     * Number of units permitted before charges are applied (e.g., more than 4 persons).
     *
     * @param int $chargeUnitExempt
     * @return self
     */
    public function setChargeUnitExempt($chargeUnitExempt)
    {
        $this->chargeUnitExempt = $chargeUnitExempt;
        return $this;
    }

    /**
     * Gets as chargeFrequencyExempt
     *
     * ChargeFrequency exemptions before charges are applied (e.g. after 2 nights).
     *
     * @return int
     */
    public function getChargeFrequencyExempt()
    {
        return $this->chargeFrequencyExempt;
    }

    /**
     * Sets a new chargeFrequencyExempt
     *
     * ChargeFrequency exemptions before charges are applied (e.g. after 2 nights).
     *
     * @param int $chargeFrequencyExempt
     * @return self
     */
    public function setChargeFrequencyExempt($chargeFrequencyExempt)
    {
        $this->chargeFrequencyExempt = $chargeFrequencyExempt;
        return $this;
    }

    /**
     * Gets as maxChargeUnitApplies
     *
     * Maximum number of Units for which the charge will be applied (e.g., waive charges above 10 rooms).
     *
     * @return int
     */
    public function getMaxChargeUnitApplies()
    {
        return $this->maxChargeUnitApplies;
    }

    /**
     * Sets a new maxChargeUnitApplies
     *
     * Maximum number of Units for which the charge will be applied (e.g., waive charges above 10 rooms).
     *
     * @param int $maxChargeUnitApplies
     * @return self
     */
    public function setMaxChargeUnitApplies($maxChargeUnitApplies)
    {
        $this->maxChargeUnitApplies = $maxChargeUnitApplies;
        return $this;
    }

    /**
     * Gets as maxChargeFrequencyApplies
     *
     * Maximum number of times the charge will be applied (e.g. waive charges above 30 nights).
     *
     * @return int
     */
    public function getMaxChargeFrequencyApplies()
    {
        return $this->maxChargeFrequencyApplies;
    }

    /**
     * Sets a new maxChargeFrequencyApplies
     *
     * Maximum number of times the charge will be applied (e.g. waive charges above 30 nights).
     *
     * @param int $maxChargeFrequencyApplies
     * @return self
     */
    public function setMaxChargeFrequencyApplies($maxChargeFrequencyApplies)
    {
        $this->maxChargeFrequencyApplies = $maxChargeFrequencyApplies;
        return $this;
    }

    /**
     * Gets as taxableIndicator
     *
     * When true, indicates that the fee is subject to tax.
     *
     * @return bool
     */
    public function getTaxableIndicator()
    {
        return $this->taxableIndicator;
    }

    /**
     * Sets a new taxableIndicator
     *
     * When true, indicates that the fee is subject to tax.
     *
     * @param bool $taxableIndicator
     * @return self
     */
    public function setTaxableIndicator($taxableIndicator)
    {
        $this->taxableIndicator = $taxableIndicator;
        return $this;
    }

    /**
     * Gets as taxes
     *
     * Used for taxes on the associated fee.
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
     * Used for taxes on the associated fee.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TaxesType $taxes
     * @return self
     */
    public function setTaxes(\Devlabs91\TravelgateNotify\Models\Ota\TaxesType $taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Adds as description
     *
     * Text description of the fees in a given language.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $description
     */
    public function addToDescription(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Text description of the fees in a given language.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Text description of the fees in a given language.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Text description of the fees in a given language.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Text description of the fees in a given language.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }


}

