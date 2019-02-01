<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing StayRestrictionsType
 *
 * Type defining Min and Max Stay Restrictions.
 * XSD Type: StayRestrictionsType
 */
class StayRestrictionsType
{

    /**
     * True indicates that Stay Restrictions exist.
     *
     * @property bool $stayRestrictionsInd
     */
    private $stayRestrictionsInd = null;

    /**
     * Specifies restrictions for the shortest length/period of time or earliest day return travel can commence or be completed.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType\MinimumStayAType $minimumStay
     */
    private $minimumStay = null;

    /**
     * Specifies restrictions for the longest length/period of time or last day to begin or complete the return.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType\MaximumStayAType $maximumStay
     */
    private $maximumStay = null;

    /**
     * Gets as stayRestrictionsInd
     *
     * True indicates that Stay Restrictions exist.
     *
     * @return bool
     */
    public function getStayRestrictionsInd()
    {
        return $this->stayRestrictionsInd;
    }

    /**
     * Sets a new stayRestrictionsInd
     *
     * True indicates that Stay Restrictions exist.
     *
     * @param bool $stayRestrictionsInd
     * @return self
     */
    public function setStayRestrictionsInd($stayRestrictionsInd)
    {
        $this->stayRestrictionsInd = $stayRestrictionsInd;
        return $this;
    }

    /**
     * Gets as minimumStay
     *
     * Specifies restrictions for the shortest length/period of time or earliest day return travel can commence or be completed.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType\MinimumStayAType
     */
    public function getMinimumStay()
    {
        return $this->minimumStay;
    }

    /**
     * Sets a new minimumStay
     *
     * Specifies restrictions for the shortest length/period of time or earliest day return travel can commence or be completed.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType\MinimumStayAType $minimumStay
     * @return self
     */
    public function setMinimumStay(\Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType\MinimumStayAType $minimumStay)
    {
        $this->minimumStay = $minimumStay;
        return $this;
    }

    /**
     * Gets as maximumStay
     *
     * Specifies restrictions for the longest length/period of time or last day to begin or complete the return.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType\MaximumStayAType
     */
    public function getMaximumStay()
    {
        return $this->maximumStay;
    }

    /**
     * Sets a new maximumStay
     *
     * Specifies restrictions for the longest length/period of time or last day to begin or complete the return.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType\MaximumStayAType $maximumStay
     * @return self
     */
    public function setMaximumStay(\Devlabs91\TravelgateNotify\Models\Ota\StayRestrictionsType\MaximumStayAType $maximumStay)
    {
        $this->maximumStay = $maximumStay;
        return $this;
    }


}

