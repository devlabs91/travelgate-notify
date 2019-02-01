<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentAdditionalInfoType;

/**
 * Class representing PricedCoveragesAType
 */
class PricedCoveragesAType
{

    /**
     * One specific coverage associated with this reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CoveragePricedType[] $pricedCoverage
     */
    private $pricedCoverage = [
        
    ];

    /**
     * Adds as pricedCoverage
     *
     * One specific coverage associated with this reservation.
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
     * One specific coverage associated with this reservation.
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
     * One specific coverage associated with this reservation.
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
     * One specific coverage associated with this reservation.
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
     * One specific coverage associated with this reservation.
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

