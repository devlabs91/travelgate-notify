<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\FareType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{

    /**
     * The total of all the taxes.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Any individual tax applied to the fare
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AirTaxType[] $tax
     */
    private $tax = [
        
    ];

    /**
     * Gets as amount
     *
     * The total of all the taxes.
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
     * The total of all the taxes.
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
     * Adds as tax
     *
     * Any individual tax applied to the fare
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirTaxType $tax
     */
    public function addToTax(\Devlabs91\TravelgateNotify\Models\Ota\AirTaxType $tax)
    {
        $this->tax[] = $tax;
        return $this;
    }

    /**
     * isset tax
     *
     * Any individual tax applied to the fare
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
     * Any individual tax applied to the fare
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
     * Any individual tax applied to the fare
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AirTaxType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * Any individual tax applied to the fare
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirTaxType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;
        return $this;
    }


}

