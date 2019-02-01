<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleLocationAdditionalFeesType\TaxesAType;

/**
 * Class representing TaxAType
 */
class TaxAType
{

    /**
     * @property string $taxCode
     */
    private $taxCode = null;

    /**
     * @property float $percentage
     */
    private $percentage = null;

    /**
     * Information on this one specific tax, including a description, etc.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FormattedTextType $info
     */
    private $info = null;

    /**
     * Gets as taxCode
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->taxCode;
    }

    /**
     * Sets a new taxCode
     *
     * @param string $taxCode
     * @return self
     */
    public function setTaxCode($taxCode)
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * Gets as percentage
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets a new percentage
     *
     * @param float $percentage
     * @return self
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }

    /**
     * Gets as info
     *
     * Information on this one specific tax, including a description, etc.
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
     * Information on this one specific tax, including a description, etc.
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

