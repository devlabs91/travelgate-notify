<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType;

/**
 * Class representing TaxAmountsAType
 */
class TaxAmountsAType
{

    /**
     * Detailed information on one specific tax associated with a specific charge
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\TaxAmountsAType\TaxAmountAType[] $taxAmount
     */
    private $taxAmount = [
        
    ];

    /**
     * Adds as taxAmount
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\TaxAmountsAType\TaxAmountAType $taxAmount
     */
    public function addToTaxAmount(\Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\TaxAmountsAType\TaxAmountAType $taxAmount)
    {
        $this->taxAmount[] = $taxAmount;
        return $this;
    }

    /**
     * isset taxAmount
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxAmount($index)
    {
        return isset($this->taxAmount[$index]);
    }

    /**
     * unset taxAmount
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxAmount($index)
    {
        unset($this->taxAmount[$index]);
    }

    /**
     * Gets as taxAmount
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\TaxAmountsAType\TaxAmountAType[]
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType\TaxAmountsAType\TaxAmountAType[] $taxAmount
     * @return self
     */
    public function setTaxAmount(array $taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }


}

