<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleEquipmentPricedType
 *
 * The VehicleEquipmentPricedType complex type identifies the data that describes a priced piece of special equipment in association with the rental of a vehicle. The data consists of the equipment and the correspondinng charge.
 * XSD Type: VehicleEquipmentPricedType
 */
class VehicleEquipmentPricedType
{

    /**
     * An indication if this particular equipment is required in the vehicle reservation, or is optional, based upon renter preference.
     *  false
     *
     * @property bool $required
     */
    private $required = null;

    /**
     * Details about a equipment, such as text or description.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentType $equipment
     */
    private $equipment = null;

    /**
     * The charges as they relate to a single piece of equipment, such as minimum or maximum amounts, taxes, or information on how the charge was calculated.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Gets as required
     *
     * An indication if this particular equipment is required in the vehicle reservation, or is optional, based upon renter preference.
     *  false
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets a new required
     *
     * An indication if this particular equipment is required in the vehicle reservation, or is optional, based upon renter preference.
     *  false
     *
     * @param bool $required
     * @return self
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * Gets as equipment
     *
     * Details about a equipment, such as text or description.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentType
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * Details about a equipment, such as text or description.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentType $equipment
     * @return self
     */
    public function setEquipment(\Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentType $equipment)
    {
        $this->equipment = $equipment;
        return $this;
    }

    /**
     * Gets as charge
     *
     * The charges as they relate to a single piece of equipment, such as minimum or maximum amounts, taxes, or information on how the charge was calculated.
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
     * The charges as they relate to a single piece of equipment, such as minimum or maximum amounts, taxes, or information on how the charge was calculated.
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

