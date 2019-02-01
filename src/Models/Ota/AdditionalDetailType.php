<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing AdditionalDetailType
 *
 * Used to send additional information.
 * XSD Type: AdditionalDetailType
 */
class AdditionalDetailType
{

    /**
     * Used to define the type of information being sent (e.g., rate description, property description, room information). Refer to OpenTravel Code List Additional Detail Type (ADT).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Trading partner code associated to AdditionalDetailType.
     *
     * @property string $code
     */
    private $code = null;

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
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $detailDescription
     */
    private $detailDescription = null;

    /**
     * Gets as type
     *
     * Used to define the type of information being sent (e.g., rate description, property description, room information). Refer to OpenTravel Code List Additional Detail Type (ADT).
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
     * Used to define the type of information being sent (e.g., rate description, property description, room information). Refer to OpenTravel Code List Additional Detail Type (ADT).
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
     * Trading partner code associated to AdditionalDetailType.
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
     * Trading partner code associated to AdditionalDetailType.
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
     * Gets as detailDescription
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType
     */
    public function getDetailDescription()
    {
        return $this->detailDescription;
    }

    /**
     * Sets a new detailDescription
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $detailDescription
     * @return self
     */
    public function setDetailDescription(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $detailDescription)
    {
        $this->detailDescription = $detailDescription;
        return $this;
    }


}

