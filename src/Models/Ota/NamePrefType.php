<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing NamePrefType
 *
 * Enables a preference to be indicated for name information.
 * XSD Type: NamePrefType
 */
class NamePrefType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Unique identifier for a person or profile.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Name information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * Unique identifier for a person or profile.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Unique identifier for a person or profile.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as personName
     *
     * Name information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PersonNameType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * Name information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PersonNameType $personName
     * @return self
     */
    public function setPersonName(\Devlabs91\TravelgateNotify\Models\Ota\PersonNameType $personName)
    {
        $this->personName = $personName;
        return $this;
    }


}

