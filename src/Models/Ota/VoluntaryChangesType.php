<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VoluntaryChangesType
 *
 * Specifies charges and/or penalties associated with making ticket changes after purchase.
 * XSD Type: VoluntaryChangesType
 */
class VoluntaryChangesType
{

    /**
     * Indicator used to specify whether voluntary change and other penalties are involved in the search or response.
     *
     * @property bool $volChangeInd
     */
    private $volChangeInd = null;

    /**
     * Specifies penalty charges as either a currency amount or a percentage of the fare
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType\PenaltyAType $penalty
     */
    private $penalty = null;

    /**
     * Gets as volChangeInd
     *
     * Indicator used to specify whether voluntary change and other penalties are involved in the search or response.
     *
     * @return bool
     */
    public function getVolChangeInd()
    {
        return $this->volChangeInd;
    }

    /**
     * Sets a new volChangeInd
     *
     * Indicator used to specify whether voluntary change and other penalties are involved in the search or response.
     *
     * @param bool $volChangeInd
     * @return self
     */
    public function setVolChangeInd($volChangeInd)
    {
        $this->volChangeInd = $volChangeInd;
        return $this;
    }

    /**
     * Gets as penalty
     *
     * Specifies penalty charges as either a currency amount or a percentage of the fare
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType\PenaltyAType
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * Sets a new penalty
     *
     * Specifies penalty charges as either a currency amount or a percentage of the fare
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType\PenaltyAType $penalty
     * @return self
     */
    public function setPenalty(\Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType\PenaltyAType $penalty)
    {
        $this->penalty = $penalty;
        return $this;
    }


}

