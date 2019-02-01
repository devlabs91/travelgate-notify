<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType;

/**
 * Class representing PricingUnitAType
 */
class PricingUnitAType
{

    /**
     * A sequential number that identifies this pricing unit.
     *
     * @property int $unitNumber
     */
    private $unitNumber = null;

    /**
     * Provides the data for a component of the fare.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PricingUnitAType\FareComponentAType[] $fareComponent
     */
    private $fareComponent = [
        
    ];

    /**
     * Gets as unitNumber
     *
     * A sequential number that identifies this pricing unit.
     *
     * @return int
     */
    public function getUnitNumber()
    {
        return $this->unitNumber;
    }

    /**
     * Sets a new unitNumber
     *
     * A sequential number that identifies this pricing unit.
     *
     * @param int $unitNumber
     * @return self
     */
    public function setUnitNumber($unitNumber)
    {
        $this->unitNumber = $unitNumber;
        return $this;
    }

    /**
     * Adds as fareComponent
     *
     * Provides the data for a component of the fare.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PricingUnitAType\FareComponentAType $fareComponent
     */
    public function addToFareComponent(\Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PricingUnitAType\FareComponentAType $fareComponent)
    {
        $this->fareComponent[] = $fareComponent;
        return $this;
    }

    /**
     * isset fareComponent
     *
     * Provides the data for a component of the fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFareComponent($index)
    {
        return isset($this->fareComponent[$index]);
    }

    /**
     * unset fareComponent
     *
     * Provides the data for a component of the fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFareComponent($index)
    {
        unset($this->fareComponent[$index]);
    }

    /**
     * Gets as fareComponent
     *
     * Provides the data for a component of the fare.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PricingUnitAType\FareComponentAType[]
     */
    public function getFareComponent()
    {
        return $this->fareComponent;
    }

    /**
     * Sets a new fareComponent
     *
     * Provides the data for a component of the fare.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\PricingUnitAType\FareComponentAType[] $fareComponent
     * @return self
     */
    public function setFareComponent(array $fareComponent)
    {
        $this->fareComponent = $fareComponent;
        return $this;
    }


}

