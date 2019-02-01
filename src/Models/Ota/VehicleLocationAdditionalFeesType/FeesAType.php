<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalFeesType;

/**
 * Class representing FeesAType
 */
class FeesAType
{

    /**
     * This element is used to describe one specific fee that may apply.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalFeesType\FeesAType\FeeAType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * General information about the additional fees that may apply.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info
     */
    private $info = null;

    /**
     * Adds as fee
     *
     * This element is used to describe one specific fee that may apply.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalFeesType\FeesAType\FeeAType $fee
     */
    public function addToFee(\Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalFeesType\FeesAType\FeeAType $fee)
    {
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * This element is used to describe one specific fee that may apply.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * This element is used to describe one specific fee that may apply.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * This element is used to describe one specific fee that may apply.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalFeesType\FeesAType\FeeAType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * This element is used to describe one specific fee that may apply.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalFeesType\FeesAType\FeeAType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * Gets as info
     *
     * General information about the additional fees that may apply.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * General information about the additional fees that may apply.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info
     * @return self
     */
    public function setInfo(\Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info)
    {
        $this->info = $info;
        return $this;
    }


}

