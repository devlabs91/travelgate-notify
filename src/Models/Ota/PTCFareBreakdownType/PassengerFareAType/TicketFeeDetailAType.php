<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType;

/**
 * Class representing TicketFeeDetailAType
 */
class TicketFeeDetailAType
{

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
     * The ticket fee code.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * Used to specify the total base fees, total taxes and total of both.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\TotalAType[] $total
     */
    private $total = [
        
    ];

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
     * Adds as fee
     *
     * The ticket fee code.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType $fee
     */
    public function addToFee(\Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType $fee)
    {
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * The ticket fee code.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * The ticket fee code.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * The ticket fee code.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * The ticket fee code.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * Adds as total
     *
     * Used to specify the total base fees, total taxes and total of both.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\TotalAType $total
     */
    public function addToTotal(\Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\TotalAType $total)
    {
        $this->total[] = $total;
        return $this;
    }

    /**
     * isset total
     *
     * Used to specify the total base fees, total taxes and total of both.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotal($index)
    {
        return isset($this->total[$index]);
    }

    /**
     * unset total
     *
     * Used to specify the total base fees, total taxes and total of both.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotal($index)
    {
        unset($this->total[$index]);
    }

    /**
     * Gets as total
     *
     * Used to specify the total base fees, total taxes and total of both.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\TotalAType[]
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * Used to specify the total base fees, total taxes and total of both.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\TotalAType[] $total
     * @return self
     */
    public function setTotal(array $total)
    {
        $this->total = $total;
        return $this;
    }


}

