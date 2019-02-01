<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType;

/**
 * Class representing AgeInfosAType
 */
class AgeInfosAType
{

    /**
     * Textual description about a specific restriction related to age of driver
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[] $ageInfo
     */
    private $ageInfo = [
        
    ];

    /**
     * Adds as ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType $ageInfo
     */
    public function addToAgeInfo(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType $ageInfo)
    {
        $this->ageInfo[] = $ageInfo;
        return $this;
    }

    /**
     * isset ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAgeInfo($index)
    {
        return isset($this->ageInfo[$index]);
    }

    /**
     * unset ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAgeInfo($index)
    {
        unset($this->ageInfo[$index]);
    }

    /**
     * Gets as ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[]
     */
    public function getAgeInfo()
    {
        return $this->ageInfo;
    }

    /**
     * Sets a new ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[] $ageInfo
     * @return self
     */
    public function setAgeInfo(array $ageInfo)
    {
        $this->ageInfo = $ageInfo;
        return $this;
    }


}

