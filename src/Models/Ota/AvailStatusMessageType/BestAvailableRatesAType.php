<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType;

/**
 * Class representing BestAvailableRatesAType
 */
class BestAvailableRatesAType
{

    /**
     * The details of a best available rate.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[] $bestAvailableRate
     */
    private $bestAvailableRate = [
        
    ];

    /**
     * Adds as bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType $bestAvailableRate
     */
    public function addToBestAvailableRate(\Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType $bestAvailableRate)
    {
        $this->bestAvailableRate[] = $bestAvailableRate;
        return $this;
    }

    /**
     * isset bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBestAvailableRate($index)
    {
        return isset($this->bestAvailableRate[$index]);
    }

    /**
     * unset bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBestAvailableRate($index)
    {
        unset($this->bestAvailableRate[$index]);
    }

    /**
     * Gets as bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[]
     */
    public function getBestAvailableRate()
    {
        return $this->bestAvailableRate;
    }

    /**
     * Sets a new bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[] $bestAvailableRate
     * @return self
     */
    public function setBestAvailableRate(array $bestAvailableRate)
    {
        $this->bestAvailableRate = $bestAvailableRate;
        return $this;
    }


}

