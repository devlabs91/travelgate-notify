<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType;

/**
 * Class representing CoveragesAType
 */
class CoveragesAType
{

    /**
     * This element is used to identify one specific coverage, insuranc or waiver, and to identify any fees that may be associated with it.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType[] $coverage
     */
    private $coverage = [
        
    ];

    /**
     * Adds as coverage
     *
     * This element is used to identify one specific coverage, insuranc or waiver, and to identify any fees that may be associated with it.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType $coverage
     */
    public function addToCoverage(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType $coverage)
    {
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * isset coverage
     *
     * This element is used to identify one specific coverage, insuranc or waiver, and to identify any fees that may be associated with it.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoverage($index)
    {
        return isset($this->coverage[$index]);
    }

    /**
     * unset coverage
     *
     * This element is used to identify one specific coverage, insuranc or waiver, and to identify any fees that may be associated with it.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoverage($index)
    {
        unset($this->coverage[$index]);
    }

    /**
     * Gets as coverage
     *
     * This element is used to identify one specific coverage, insuranc or waiver, and to identify any fees that may be associated with it.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Sets a new coverage
     *
     * This element is used to identify one specific coverage, insuranc or waiver, and to identify any fees that may be associated with it.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType[] $coverage
     * @return self
     */
    public function setCoverage(array $coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }


}

