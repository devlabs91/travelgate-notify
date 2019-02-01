<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing HotelAdditionalChargesType
 *
 *
 * XSD Type: HotelAdditionalChargesType
 */
class HotelAdditionalChargesType
{

    /**
     * Total additional charges before taxes.
     *
     * @property float $amountBeforeTax
     */
    private $amountBeforeTax = null;

    /**
     * Total additional charges after taxes.
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
     * Amenities or services to which a charge applies.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelAdditionalChargesType\AdditionalChargeAType[] $additionalCharge
     */
    private $additionalCharge = [
        
    ];

    /**
     * Gets as amountBeforeTax
     *
     * Total additional charges before taxes.
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
     * Total additional charges before taxes.
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
     * Total additional charges after taxes.
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
     * Total additional charges after taxes.
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
     * Adds as additionalCharge
     *
     * Amenities or services to which a charge applies.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelAdditionalChargesType\AdditionalChargeAType $additionalCharge
     */
    public function addToAdditionalCharge(\Devlabs91\TravelgateNotify\Models\Ota\HotelAdditionalChargesType\AdditionalChargeAType $additionalCharge)
    {
        $this->additionalCharge[] = $additionalCharge;
        return $this;
    }

    /**
     * isset additionalCharge
     *
     * Amenities or services to which a charge applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalCharge($index)
    {
        return isset($this->additionalCharge[$index]);
    }

    /**
     * unset additionalCharge
     *
     * Amenities or services to which a charge applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalCharge($index)
    {
        unset($this->additionalCharge[$index]);
    }

    /**
     * Gets as additionalCharge
     *
     * Amenities or services to which a charge applies.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelAdditionalChargesType\AdditionalChargeAType[]
     */
    public function getAdditionalCharge()
    {
        return $this->additionalCharge;
    }

    /**
     * Sets a new additionalCharge
     *
     * Amenities or services to which a charge applies.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelAdditionalChargesType\AdditionalChargeAType[] $additionalCharge
     * @return self
     */
    public function setAdditionalCharge(array $additionalCharge)
    {
        $this->additionalCharge = $additionalCharge;
        return $this;
    }


}

