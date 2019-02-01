<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RestaurantType;

/**
 * Class representing InfoCodesAType
 */
class InfoCodesAType
{

    /**
     * Indicates the generic type of restaurant such as fast food, cafe, fine dining, etc.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\InfoCodesAType\InfoCodeAType[] $infoCode
     */
    private $infoCode = [
        
    ];

    /**
     * Adds as infoCode
     *
     * Indicates the generic type of restaurant such as fast food, cafe, fine dining, etc.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\InfoCodesAType\InfoCodeAType $infoCode
     */
    public function addToInfoCode(\Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\InfoCodesAType\InfoCodeAType $infoCode)
    {
        $this->infoCode[] = $infoCode;
        return $this;
    }

    /**
     * isset infoCode
     *
     * Indicates the generic type of restaurant such as fast food, cafe, fine dining, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfoCode($index)
    {
        return isset($this->infoCode[$index]);
    }

    /**
     * unset infoCode
     *
     * Indicates the generic type of restaurant such as fast food, cafe, fine dining, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfoCode($index)
    {
        unset($this->infoCode[$index]);
    }

    /**
     * Gets as infoCode
     *
     * Indicates the generic type of restaurant such as fast food, cafe, fine dining, etc.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\InfoCodesAType\InfoCodeAType[]
     */
    public function getInfoCode()
    {
        return $this->infoCode;
    }

    /**
     * Sets a new infoCode
     *
     * Indicates the generic type of restaurant such as fast food, cafe, fine dining, etc.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\InfoCodesAType\InfoCodeAType[] $infoCode
     * @return self
     */
    public function setInfoCode(array $infoCode)
    {
        $this->infoCode = $infoCode;
        return $this;
    }


}

