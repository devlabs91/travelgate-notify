<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentCoreType;

/**
 * Class representing PricedEquipsAType
 */
class PricedEquipsAType
{

    /**
     * A specific piece of special equipment, along with the quantity, restrictions and charge.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType[] $pricedEquip
     */
    private $pricedEquip = [
        
    ];

    /**
     * Adds as pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and charge.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType $pricedEquip
     */
    public function addToPricedEquip(\Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType $pricedEquip)
    {
        $this->pricedEquip[] = $pricedEquip;
        return $this;
    }

    /**
     * isset pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and charge.
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
     * A specific piece of special equipment, along with the quantity, restrictions and charge.
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
     * A specific piece of special equipment, along with the quantity, restrictions and charge.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType[]
     */
    public function getPricedEquip()
    {
        return $this->pricedEquip;
    }

    /**
     * Sets a new pricedEquip
     *
     * A specific piece of special equipment, along with the quantity, restrictions and charge.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType[] $pricedEquip
     * @return self
     */
    public function setPricedEquip(array $pricedEquip)
    {
        $this->pricedEquip = $pricedEquip;
        return $this;
    }


}

