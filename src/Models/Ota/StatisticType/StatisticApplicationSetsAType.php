<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\StatisticType;

/**
 * Class representing StatisticApplicationSetsAType
 */
class StatisticApplicationSetsAType
{

    /**
     * Repeated for each date or set of statistic codes.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType[] $statisticApplicationSet
     */
    private $statisticApplicationSet = [
        
    ];

    /**
     * Adds as statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType $statisticApplicationSet
     */
    public function addToStatisticApplicationSet(\Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType $statisticApplicationSet)
    {
        $this->statisticApplicationSet[] = $statisticApplicationSet;
        return $this;
    }

    /**
     * isset statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatisticApplicationSet($index)
    {
        return isset($this->statisticApplicationSet[$index]);
    }

    /**
     * unset statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatisticApplicationSet($index)
    {
        unset($this->statisticApplicationSet[$index]);
    }

    /**
     * Gets as statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType[]
     */
    public function getStatisticApplicationSet()
    {
        return $this->statisticApplicationSet;
    }

    /**
     * Sets a new statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType[] $statisticApplicationSet
     * @return self
     */
    public function setStatisticApplicationSet(array $statisticApplicationSet)
    {
        $this->statisticApplicationSet = $statisticApplicationSet;
        return $this;
    }


}

