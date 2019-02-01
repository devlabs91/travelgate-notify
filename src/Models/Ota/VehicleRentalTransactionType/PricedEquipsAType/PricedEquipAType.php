<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType;

/**
 * Class representing PricedEquipAType
 */
class PricedEquipAType
{

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType[] $equipment
     */
    private $equipment = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Adds as equipment
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType $equipment
     */
    public function addToEquipment(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType $equipment)
    {
        $this->equipment[] = $equipment;
        return $this;
    }

    /**
     * isset equipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquipment($index)
    {
        return isset($this->equipment[$index]);
    }

    /**
     * unset equipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquipment($index)
    {
        unset($this->equipment[$index]);
    }

    /**
     * Gets as equipment
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType[]
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType\EquipmentAType[] $equipment
     * @return self
     */
    public function setEquipment(array $equipment)
    {
        $this->equipment = $equipment;
        return $this;
    }

    /**
     * Gets as charge
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType $charge
     * @return self
     */
    public function setCharge(\Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType $charge)
    {
        $this->charge = $charge;
        return $this;
    }


}

