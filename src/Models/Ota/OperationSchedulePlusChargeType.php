<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing OperationSchedulePlusChargeType
 *
 * This allows a charge to be associated with operating times (e.g. a golf tee time may be more expensive during peak hours v. off peak hours).
 * XSD Type: OperationSchedulePlusChargeType
 */
class OperationSchedulePlusChargeType extends OperationScheduleType
{

    /**
     * Cost associated with an amenity.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FeeType[] $charge
     */
    private $charge = [
        
    ];

    /**
     * Adds as charge
     *
     * Cost associated with an amenity.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FeeType $charge
     */
    public function addToCharge(\Devlabs91\TravelgateNotify\Models\Ota\FeeType $charge)
    {
        $this->charge[] = $charge;
        return $this;
    }

    /**
     * isset charge
     *
     * Cost associated with an amenity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharge($index)
    {
        return isset($this->charge[$index]);
    }

    /**
     * unset charge
     *
     * Cost associated with an amenity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharge($index)
    {
        unset($this->charge[$index]);
    }

    /**
     * Gets as charge
     *
     * Cost associated with an amenity.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FeeType[]
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Cost associated with an amenity.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FeeType[] $charge
     * @return self
     */
    public function setCharge(array $charge)
    {
        $this->charge = $charge;
        return $this;
    }


}

