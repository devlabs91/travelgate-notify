<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\ViewershipsType\ViewershipAType;

/**
 * Class representing DistributorTypesAType
 */
class DistributorTypesAType
{

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType[] $distributorType
     */
    private $distributorType = [
        
    ];

    /**
     * Adds as distributorType
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType $distributorType
     */
    public function addToDistributorType(\Devlabs91\TravelgateNotify\Models\Ota\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType $distributorType)
    {
        $this->distributorType[] = $distributorType;
        return $this;
    }

    /**
     * isset distributorType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistributorType($index)
    {
        return isset($this->distributorType[$index]);
    }

    /**
     * unset distributorType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistributorType($index)
    {
        unset($this->distributorType[$index]);
    }

    /**
     * Gets as distributorType
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType[]
     */
    public function getDistributorType()
    {
        return $this->distributorType;
    }

    /**
     * Sets a new distributorType
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType[] $distributorType
     * @return self
     */
    public function setDistributorType(array $distributorType)
    {
        $this->distributorType = $distributorType;
        return $this;
    }


}

