<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailAdditionalInfoType;

/**
 * Class representing PricedCoveragesAType
 */
class PricedCoveragesAType
{

    /**
     * One specific vehicle coverage along with the corresponding charge.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CoveragePricedType[] $pricedCoverage
     */
    private $pricedCoverage = [
        
    ];

    /**
     * Adds as pricedCoverage
     *
     * One specific vehicle coverage along with the corresponding charge.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CoveragePricedType $pricedCoverage
     */
    public function addToPricedCoverage(\Devlabs91\TravelgateNotify\Models\Ota\CoveragePricedType $pricedCoverage)
    {
        $this->pricedCoverage[] = $pricedCoverage;
        return $this;
    }

    /**
     * isset pricedCoverage
     *
     * One specific vehicle coverage along with the corresponding charge.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricedCoverage($index)
    {
        return isset($this->pricedCoverage[$index]);
    }

    /**
     * unset pricedCoverage
     *
     * One specific vehicle coverage along with the corresponding charge.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricedCoverage($index)
    {
        unset($this->pricedCoverage[$index]);
    }

    /**
     * Gets as pricedCoverage
     *
     * One specific vehicle coverage along with the corresponding charge.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CoveragePricedType[]
     */
    public function getPricedCoverage()
    {
        return $this->pricedCoverage;
    }

    /**
     * Sets a new pricedCoverage
     *
     * One specific vehicle coverage along with the corresponding charge.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CoveragePricedType[] $pricedCoverage
     * @return self
     */
    public function setPricedCoverage(array $pricedCoverage)
    {
        $this->pricedCoverage = $pricedCoverage;
        return $this;
    }


}

