<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoSummaryType\PriceRequestInformationAType;

/**
 * Class representing FareRestrictionPrefAType
 */
class FareRestrictionPrefAType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @property string $fareRestriction
     */
    private $fareRestriction = null;

    /**
     * A date that is associated to the fare restriction.
     *
     * @property \DateTime $date
     */
    private $date = null;

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
     * Gets as fareRestriction
     *
     * Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @return string
     */
    public function getFareRestriction()
    {
        return $this->fareRestriction;
    }

    /**
     * Sets a new fareRestriction
     *
     * Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @param string $fareRestriction
     * @return self
     */
    public function setFareRestriction($fareRestriction)
    {
        $this->fareRestriction = $fareRestriction;
        return $this;
    }

    /**
     * Gets as date
     *
     * A date that is associated to the fare restriction.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * A date that is associated to the fare restriction.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }


}

