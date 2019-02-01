<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType;

/**
 * Class representing CoverageFeesAType
 */
class CoverageFeesAType
{

    /**
     * Provides information on one specific charge for this coverage, insurance or waiver.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[] $coverageFee
     */
    private $coverageFee = [
        
    ];

    /**
     * Adds as coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or waiver.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType $coverageFee
     */
    public function addToCoverageFee(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType $coverageFee)
    {
        $this->coverageFee[] = $coverageFee;
        return $this;
    }

    /**
     * isset coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or waiver.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoverageFee($index)
    {
        return isset($this->coverageFee[$index]);
    }

    /**
     * unset coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or waiver.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoverageFee($index)
    {
        unset($this->coverageFee[$index]);
    }

    /**
     * Gets as coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or waiver.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[]
     */
    public function getCoverageFee()
    {
        return $this->coverageFee;
    }

    /**
     * Sets a new coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or waiver.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[] $coverageFee
     * @return self
     */
    public function setCoverageFee(array $coverageFee)
    {
        $this->coverageFee = $coverageFee;
        return $this;
    }


}

