<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing FeesType
 *
 * A collection of fees.
 * XSD Type: FeesType
 */
class FeesType
{

    /**
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FeeType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * Adds as fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FeeType $fee
     */
    public function addToFee(\Devlabs91\TravelgateNotify\Models\Ota\FeeType $fee)
    {
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
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
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
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
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FeeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FeeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;
        return $this;
    }


}

