<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\ViewershipsType\ViewershipAType;

/**
 * Class representing ProfilesAType
 */
class ProfilesAType
{

    /**
     * Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ProfileType[] $profile
     */
    private $profile = [
        
    ];

    /**
     * Adds as profile
     *
     * Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfileType $profile
     */
    public function addToProfile(\Devlabs91\TravelgateNotify\Models\Ota\ProfileType $profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * isset profile
     *
     * Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfile($index)
    {
        return isset($this->profile[$index]);
    }

    /**
     * unset profile
     *
     * Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfile($index)
    {
        unset($this->profile[$index]);
    }

    /**
     * Gets as profile
     *
     * Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ProfileType[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfileType[] $profile
     * @return self
     */
    public function setProfile(array $profile)
    {
        $this->profile = $profile;
        return $this;
    }


}

