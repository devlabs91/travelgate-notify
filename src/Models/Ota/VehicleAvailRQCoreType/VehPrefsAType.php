<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType;

/**
 * Class representing VehPrefsAType
 */
class VehPrefsAType
{

    /**
     * A preference for one specific vehicle type.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[] $vehPref
     */
    private $vehPref = [
        
    ];

    /**
     * Adds as vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType $vehPref
     */
    public function addToVehPref(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType $vehPref)
    {
        $this->vehPref[] = $vehPref;
        return $this;
    }

    /**
     * isset vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehPref($index)
    {
        return isset($this->vehPref[$index]);
    }

    /**
     * unset vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehPref($index)
    {
        unset($this->vehPref[$index]);
    }

    /**
     * Gets as vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[]
     */
    public function getVehPref()
    {
        return $this->vehPref;
    }

    /**
     * Sets a new vehPref
     *
     * A preference for one specific vehicle type.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[] $vehPref
     * @return self
     */
    public function setVehPref(array $vehPref)
    {
        $this->vehPref = $vehPref;
        return $this;
    }


}

