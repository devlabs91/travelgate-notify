<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType;

/**
 * Class representing AgeAType
 */
class AgeAType
{

    /**
     * Identifies the minimum age of a person allowed to rent a vehicle from this
     *  rental facility.
     *
     * @property int $minimumAge
     */
    private $minimumAge = null;

    /**
     * Identifies the maximum age of a person allowed to rent a vehicle from this 
     * rental facility.
     *
     * @property int $maximumAge
     */
    private $maximumAge = null;

    /**
     * Surcharge information that may be applied based upon age of the renter.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeSurchargeAType[] $ageSurcharge
     */
    private $ageSurcharge = [
        
    ];

    /**
     * Collection of descriptions about the different requirements related to age of driver
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[] $ageInfos
     */
    private $ageInfos = null;

    /**
     * A collection of vehicle information associated to the age requirements.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType[] $vehicles
     */
    private $vehicles = null;

    /**
     * Gets as minimumAge
     *
     * Identifies the minimum age of a person allowed to rent a vehicle from this
     *  rental facility.
     *
     * @return int
     */
    public function getMinimumAge()
    {
        return $this->minimumAge;
    }

    /**
     * Sets a new minimumAge
     *
     * Identifies the minimum age of a person allowed to rent a vehicle from this
     *  rental facility.
     *
     * @param int $minimumAge
     * @return self
     */
    public function setMinimumAge($minimumAge)
    {
        $this->minimumAge = $minimumAge;
        return $this;
    }

    /**
     * Gets as maximumAge
     *
     * Identifies the maximum age of a person allowed to rent a vehicle from this 
     * rental facility.
     *
     * @return int
     */
    public function getMaximumAge()
    {
        return $this->maximumAge;
    }

    /**
     * Sets a new maximumAge
     *
     * Identifies the maximum age of a person allowed to rent a vehicle from this 
     * rental facility.
     *
     * @param int $maximumAge
     * @return self
     */
    public function setMaximumAge($maximumAge)
    {
        $this->maximumAge = $maximumAge;
        return $this;
    }

    /**
     * Adds as ageSurcharge
     *
     * Surcharge information that may be applied based upon age of the renter.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeSurchargeAType $ageSurcharge
     */
    public function addToAgeSurcharge(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeSurchargeAType $ageSurcharge)
    {
        $this->ageSurcharge[] = $ageSurcharge;
        return $this;
    }

    /**
     * isset ageSurcharge
     *
     * Surcharge information that may be applied based upon age of the renter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAgeSurcharge($index)
    {
        return isset($this->ageSurcharge[$index]);
    }

    /**
     * unset ageSurcharge
     *
     * Surcharge information that may be applied based upon age of the renter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAgeSurcharge($index)
    {
        unset($this->ageSurcharge[$index]);
    }

    /**
     * Gets as ageSurcharge
     *
     * Surcharge information that may be applied based upon age of the renter.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeSurchargeAType[]
     */
    public function getAgeSurcharge()
    {
        return $this->ageSurcharge;
    }

    /**
     * Sets a new ageSurcharge
     *
     * Surcharge information that may be applied based upon age of the renter.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeSurchargeAType[] $ageSurcharge
     * @return self
     */
    public function setAgeSurcharge(array $ageSurcharge)
    {
        $this->ageSurcharge = $ageSurcharge;
        return $this;
    }

    /**
     * Adds as ageInfo
     *
     * Collection of descriptions about the different requirements related to age of driver
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType $ageInfo
     */
    public function addToAgeInfos(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType $ageInfo)
    {
        $this->ageInfos[] = $ageInfo;
        return $this;
    }

    /**
     * isset ageInfos
     *
     * Collection of descriptions about the different requirements related to age of driver
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAgeInfos($index)
    {
        return isset($this->ageInfos[$index]);
    }

    /**
     * unset ageInfos
     *
     * Collection of descriptions about the different requirements related to age of driver
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAgeInfos($index)
    {
        unset($this->ageInfos[$index]);
    }

    /**
     * Gets as ageInfos
     *
     * Collection of descriptions about the different requirements related to age of driver
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[]
     */
    public function getAgeInfos()
    {
        return $this->ageInfos;
    }

    /**
     * Sets a new ageInfos
     *
     * Collection of descriptions about the different requirements related to age of driver
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[] $ageInfos
     * @return self
     */
    public function setAgeInfos(array $ageInfos)
    {
        $this->ageInfos = $ageInfos;
        return $this;
    }

    /**
     * Adds as vehicle
     *
     * A collection of vehicle information associated to the age requirements.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType $vehicle
     */
    public function addToVehicles(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType $vehicle)
    {
        $this->vehicles[] = $vehicle;
        return $this;
    }

    /**
     * isset vehicles
     *
     * A collection of vehicle information associated to the age requirements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicles($index)
    {
        return isset($this->vehicles[$index]);
    }

    /**
     * unset vehicles
     *
     * A collection of vehicle information associated to the age requirements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicles($index)
    {
        unset($this->vehicles[$index]);
    }

    /**
     * Gets as vehicles
     *
     * A collection of vehicle information associated to the age requirements.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * Sets a new vehicles
     *
     * A collection of vehicle information associated to the age requirements.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\VehiclesAType\VehicleAType[] $vehicles
     * @return self
     */
    public function setVehicles(array $vehicles)
    {
        $this->vehicles = $vehicles;
        return $this;
    }


}

