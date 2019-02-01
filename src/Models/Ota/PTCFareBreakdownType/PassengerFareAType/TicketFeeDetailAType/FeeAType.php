<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType;

/**
 * Class representing FeeAType
 */
class FeeAType
{

    /**
     * @property string $feeCode
     */
    private $feeCode = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * The base fee amount.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType\BaseFeeAType $baseFee
     */
    private $baseFee = null;

    /**
     * A collection of taxes.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType\TaxesAType $taxes
     */
    private $taxes = null;

    /**
     * The total of the base fee and taxes.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType\TotalAType $total
     */
    private $total = null;

    /**
     * Gets as feeCode
     *
     * @return string
     */
    public function getFeeCode()
    {
        return $this->feeCode;
    }

    /**
     * Sets a new feeCode
     *
     * @param string $feeCode
     * @return self
     */
    public function setFeeCode($feeCode)
    {
        $this->feeCode = $feeCode;
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
     * Gets as baseFee
     *
     * The base fee amount.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType\BaseFeeAType
     */
    public function getBaseFee()
    {
        return $this->baseFee;
    }

    /**
     * Sets a new baseFee
     *
     * The base fee amount.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType\BaseFeeAType $baseFee
     * @return self
     */
    public function setBaseFee(\Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType\BaseFeeAType $baseFee)
    {
        $this->baseFee = $baseFee;
        return $this;
    }

    /**
     * Gets as taxes
     *
     * A collection of taxes.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType\TaxesAType
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
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType\TaxesAType $taxes
     * @return self
     */
    public function setTaxes(\Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType\TaxesAType $taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Gets as total
     *
     * The total of the base fee and taxes.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType\TotalAType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The total of the base fee and taxes.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType\TotalAType $total
     * @return self
     */
    public function setTotal(\Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType\FeeAType\TotalAType $total)
    {
        $this->total = $total;
        return $this;
    }


}

