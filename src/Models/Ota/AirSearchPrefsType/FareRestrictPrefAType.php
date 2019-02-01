<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AirSearchPrefsType;

/**
 * Class representing FareRestrictPrefAType
 *
 * Container used for specifying or limiting acceptable fare restrictions.
 */
class FareRestrictPrefAType
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
     * Currency in which fare display is requested.
     *
     * @property string $fareDisplayCurrency
     */
    private $fareDisplayCurrency = null;

    /**
     * Display fare published in other than local selling currency only.
     *
     * @property string $currencyOverride
     */
    private $currencyOverride = null;

    /**
     * Identifies whether advance reservation or ticketing restrictions are acceptable in the search results.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AdvResTicketingType $advResTicketing
     */
    private $advResTicketing = null;

    /**
     * Identifies whether restrictions on minimum or maximum stays should be included in the search results.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType $stayRestrictions
     */
    private $stayRestrictions = null;

    /**
     * Identifies whether penalties associated with voluntary changes should be included in the search results.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType $voluntaryChanges
     */
    private $voluntaryChanges = null;

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

    /**
     * Gets as fareDisplayCurrency
     *
     * Currency in which fare display is requested.
     *
     * @return string
     */
    public function getFareDisplayCurrency()
    {
        return $this->fareDisplayCurrency;
    }

    /**
     * Sets a new fareDisplayCurrency
     *
     * Currency in which fare display is requested.
     *
     * @param string $fareDisplayCurrency
     * @return self
     */
    public function setFareDisplayCurrency($fareDisplayCurrency)
    {
        $this->fareDisplayCurrency = $fareDisplayCurrency;
        return $this;
    }

    /**
     * Gets as currencyOverride
     *
     * Display fare published in other than local selling currency only.
     *
     * @return string
     */
    public function getCurrencyOverride()
    {
        return $this->currencyOverride;
    }

    /**
     * Sets a new currencyOverride
     *
     * Display fare published in other than local selling currency only.
     *
     * @param string $currencyOverride
     * @return self
     */
    public function setCurrencyOverride($currencyOverride)
    {
        $this->currencyOverride = $currencyOverride;
        return $this;
    }

    /**
     * Gets as advResTicketing
     *
     * Identifies whether advance reservation or ticketing restrictions are acceptable in the search results.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AdvResTicketingType
     */
    public function getAdvResTicketing()
    {
        return $this->advResTicketing;
    }

    /**
     * Sets a new advResTicketing
     *
     * Identifies whether advance reservation or ticketing restrictions are acceptable in the search results.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AdvResTicketingType $advResTicketing
     * @return self
     */
    public function setAdvResTicketing(\Devlabs91\TravelgateNotify\Models\Ota\AdvResTicketingType $advResTicketing)
    {
        $this->advResTicketing = $advResTicketing;
        return $this;
    }

    /**
     * Gets as stayRestrictions
     *
     * Identifies whether restrictions on minimum or maximum stays should be included in the search results.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType
     */
    public function getStayRestrictions()
    {
        return $this->stayRestrictions;
    }

    /**
     * Sets a new stayRestrictions
     *
     * Identifies whether restrictions on minimum or maximum stays should be included in the search results.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType $stayRestrictions
     * @return self
     */
    public function setStayRestrictions(\Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType $stayRestrictions)
    {
        $this->stayRestrictions = $stayRestrictions;
        return $this;
    }

    /**
     * Gets as voluntaryChanges
     *
     * Identifies whether penalties associated with voluntary changes should be included in the search results.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType
     */
    public function getVoluntaryChanges()
    {
        return $this->voluntaryChanges;
    }

    /**
     * Sets a new voluntaryChanges
     *
     * Identifies whether penalties associated with voluntary changes should be included in the search results.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType $voluntaryChanges
     * @return self
     */
    public function setVoluntaryChanges(\Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType $voluntaryChanges)
    {
        $this->voluntaryChanges = $voluntaryChanges;
        return $this;
    }


}

