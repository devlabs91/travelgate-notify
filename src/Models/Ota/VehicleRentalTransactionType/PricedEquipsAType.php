<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType;

/**
 * Class representing PricedEquipsAType
 */
class PricedEquipsAType
{

    /**
     * Used to indicate special equipment is returned.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[] $pricedEquip
     */
    private $pricedEquip = [
        
    ];

    /**
     * Adds as pricedEquip
     *
     * Used to indicate special equipment is returned.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType $pricedEquip
     */
    public function addToPricedEquip(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType $pricedEquip)
    {
        $this->pricedEquip[] = $pricedEquip;
        return $this;
    }

    /**
     * isset pricedEquip
     *
     * Used to indicate special equipment is returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricedEquip($index)
    {
        return isset($this->pricedEquip[$index]);
    }

    /**
     * unset pricedEquip
     *
     * Used to indicate special equipment is returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricedEquip($index)
    {
        unset($this->pricedEquip[$index]);
    }

    /**
     * Gets as pricedEquip
     *
     * Used to indicate special equipment is returned.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[]
     */
    public function getPricedEquip()
    {
        return $this->pricedEquip;
    }

    /**
     * Sets a new pricedEquip
     *
     * Used to indicate special equipment is returned.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[] $pricedEquip
     * @return self
     */
    public function setPricedEquip(array $pricedEquip)
    {
        $this->pricedEquip = $pricedEquip;
        return $this;
    }


}

