<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationRQCoreType;

/**
 * Class representing SpecialEquipPrefsAType
 */
class SpecialEquipPrefsAType
{

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[] $specialEquipPref
     */
    private $specialEquipPref = [
        
    ];

    /**
     * Used when the customer was previously quoted a rate for the equipment in an availability search response.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Adds as specialEquipPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
     */
    public function addToSpecialEquipPref(\Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref)
    {
        $this->specialEquipPref[] = $specialEquipPref;
        return $this;
    }

    /**
     * isset specialEquipPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialEquipPref($index)
    {
        return isset($this->specialEquipPref[$index]);
    }

    /**
     * unset specialEquipPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialEquipPref($index)
    {
        unset($this->specialEquipPref[$index]);
    }

    /**
     * Gets as specialEquipPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPref()
    {
        return $this->specialEquipPref;
    }

    /**
     * Sets a new specialEquipPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleReservationRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[] $specialEquipPref
     * @return self
     */
    public function setSpecialEquipPref(array $specialEquipPref)
    {
        $this->specialEquipPref = $specialEquipPref;
        return $this;
    }

    /**
     * Gets as charge
     *
     * Used when the customer was previously quoted a rate for the equipment in an availability search response.
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
     * Used when the customer was previously quoted a rate for the equipment in an availability search response.
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

