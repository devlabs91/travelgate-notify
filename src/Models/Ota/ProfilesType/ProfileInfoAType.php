<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\ProfilesType;

/**
 * Class representing ProfileInfoAType
 */
class ProfileInfoAType
{

    /**
     * A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $uniqueID
     */
    private $uniqueID = [
        
    ];

    /**
     * Provides detailed information regarding either a company or a customer profile.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ProfileType $profile
     */
    private $profile = null;

    /**
     * Adds as uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;
        return $this;
    }

    /**
     * isset uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as profile
     *
     * Provides detailed information regarding either a company or a customer profile.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ProfileType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Provides detailed information regarding either a company or a customer profile.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfileType $profile
     * @return self
     */
    public function setProfile(\Devlabs91\TravelgateNotify\Models\Ota\ProfileType $profile)
    {
        $this->profile = $profile;
        return $this;
    }


}

