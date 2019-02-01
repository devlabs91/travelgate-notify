<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationRQCoreType;

/**
 * Class representing FeesAType
 */
class FeesAType
{

    /**
     * One specific fee associated with this vehicle reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * Adds as fee
     *
     * One specific fee associated with this vehicle reservation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType $fee
     */
    public function addToFee(\Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType $fee)
    {
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * One specific fee associated with this vehicle reservation.
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
     * One specific fee associated with this vehicle reservation.
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
     * One specific fee associated with this vehicle reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * One specific fee associated with this vehicle reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;
        return $this;
    }


}

