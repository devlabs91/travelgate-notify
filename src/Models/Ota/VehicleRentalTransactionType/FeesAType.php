<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType;

/**
 * Class representing FeesAType
 */
class FeesAType
{

    /**
     * A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding rates, priced equipment or coverages.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * Adds as fee
     *
     * A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding rates, priced equipment or coverages.
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
     * A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding rates, priced equipment or coverages.
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
     * A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding rates, priced equipment or coverages.
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
     * A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding rates, priced equipment or coverages.
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
     * A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding rates, priced equipment or coverages.
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

