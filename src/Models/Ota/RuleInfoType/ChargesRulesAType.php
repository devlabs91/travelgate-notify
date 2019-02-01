<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RuleInfoType;

/**
 * Class representing ChargesRulesAType
 */
class ChargesRulesAType
{

    /**
     * Specifies a voluntary change charge.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType $voluntaryChanges
     */
    private $voluntaryChanges = null;

    /**
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType $voluntaryRefunds
     */
    private $voluntaryRefunds = null;

    /**
     * Gets as voluntaryChanges
     *
     * Specifies a voluntary change charge.
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
     * Specifies a voluntary change charge.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType $voluntaryChanges
     * @return self
     */
    public function setVoluntaryChanges(\Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType $voluntaryChanges)
    {
        $this->voluntaryChanges = $voluntaryChanges;
        return $this;
    }

    /**
     * Gets as voluntaryRefunds
     *
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType
     */
    public function getVoluntaryRefunds()
    {
        return $this->voluntaryRefunds;
    }

    /**
     * Sets a new voluntaryRefunds
     *
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType $voluntaryRefunds
     * @return self
     */
    public function setVoluntaryRefunds(\Devlabs91\TravelgateNotify\Models\Ota\VoluntaryChangesType $voluntaryRefunds)
    {
        $this->voluntaryRefunds = $voluntaryRefunds;
        return $this;
    }


}

