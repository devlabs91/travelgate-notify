<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType;

/**
 * Class representing SpecialRemarksAType
 */
class SpecialRemarksAType
{

    /**
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[] $specialRemark
     */
    private $specialRemark = [
        
    ];

    /**
     * Adds as specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType $specialRemark
     */
    public function addToSpecialRemark(\Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType $specialRemark)
    {
        $this->specialRemark[] = $specialRemark;
        return $this;
    }

    /**
     * isset specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialRemark($index)
    {
        return isset($this->specialRemark[$index]);
    }

    /**
     * unset specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialRemark($index)
    {
        unset($this->specialRemark[$index]);
    }

    /**
     * Gets as specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[]
     */
    public function getSpecialRemark()
    {
        return $this->specialRemark;
    }

    /**
     * Sets a new specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[] $specialRemark
     * @return self
     */
    public function setSpecialRemark(array $specialRemark)
    {
        $this->specialRemark = $specialRemark;
        return $this;
    }


}

