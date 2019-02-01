<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\GDSInfoType\GDSCodesAType\GDSCodeAType;

/**
 * Class representing GDSCodeDetailsAType
 */
class GDSCodeDetailsAType
{

    /**
     * This holds detailed information pertaining to the agencies authorized to book this rate.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GDSInfoType\GDSCodesAType\GDSCodeAType\GDSCodeDetailsAType\GDSCodeDetailAType[] $gDSCodeDetail
     */
    private $gDSCodeDetail = [
        
    ];

    /**
     * Adds as gDSCodeDetail
     *
     * This holds detailed information pertaining to the agencies authorized to book this rate.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GDSInfoType\GDSCodesAType\GDSCodeAType\GDSCodeDetailsAType\GDSCodeDetailAType $gDSCodeDetail
     */
    public function addToGDSCodeDetail(\Devlabs91\TravelgateNotify\Models\Ota\GDSInfoType\GDSCodesAType\GDSCodeAType\GDSCodeDetailsAType\GDSCodeDetailAType $gDSCodeDetail)
    {
        $this->gDSCodeDetail[] = $gDSCodeDetail;
        return $this;
    }

    /**
     * isset gDSCodeDetail
     *
     * This holds detailed information pertaining to the agencies authorized to book this rate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGDSCodeDetail($index)
    {
        return isset($this->gDSCodeDetail[$index]);
    }

    /**
     * unset gDSCodeDetail
     *
     * This holds detailed information pertaining to the agencies authorized to book this rate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGDSCodeDetail($index)
    {
        unset($this->gDSCodeDetail[$index]);
    }

    /**
     * Gets as gDSCodeDetail
     *
     * This holds detailed information pertaining to the agencies authorized to book this rate.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\GDSInfoType\GDSCodesAType\GDSCodeAType\GDSCodeDetailsAType\GDSCodeDetailAType[]
     */
    public function getGDSCodeDetail()
    {
        return $this->gDSCodeDetail;
    }

    /**
     * Sets a new gDSCodeDetail
     *
     * This holds detailed information pertaining to the agencies authorized to book this rate.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GDSInfoType\GDSCodesAType\GDSCodeAType\GDSCodeDetailsAType\GDSCodeDetailAType[] $gDSCodeDetail
     * @return self
     */
    public function setGDSCodeDetail(array $gDSCodeDetail)
    {
        $this->gDSCodeDetail = $gDSCodeDetail;
        return $this;
    }


}

