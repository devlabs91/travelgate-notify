<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing GDSInfoType
 *
 * This defines codes used by individual GDS's, which can be used to upload rate information.
 * XSD Type: GDS_InfoType
 */
class GDSInfoType
{

    /**
     * This is the 2 character master chain code that identifes a specific chain that is recognized by all GDS's.
     *
     * @property string $masterChainCode
     */
    private $masterChainCode = null;

    /**
     * The element acts as a container for GDS_Code. It is used to send item for each GDS.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GDSInfoType\GDSCodesAType $gDSCodes
     */
    private $gDSCodes = null;

    /**
     * Gets as masterChainCode
     *
     * This is the 2 character master chain code that identifes a specific chain that is recognized by all GDS's.
     *
     * @return string
     */
    public function getMasterChainCode()
    {
        return $this->masterChainCode;
    }

    /**
     * Sets a new masterChainCode
     *
     * This is the 2 character master chain code that identifes a specific chain that is recognized by all GDS's.
     *
     * @param string $masterChainCode
     * @return self
     */
    public function setMasterChainCode($masterChainCode)
    {
        $this->masterChainCode = $masterChainCode;
        return $this;
    }

    /**
     * Gets as gDSCodes
     *
     * The element acts as a container for GDS_Code. It is used to send item for each GDS.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\GDSInfoType\GDSCodesAType
     */
    public function getGDSCodes()
    {
        return $this->gDSCodes;
    }

    /**
     * Sets a new gDSCodes
     *
     * The element acts as a container for GDS_Code. It is used to send item for each GDS.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GDSInfoType\GDSCodesAType $gDSCodes
     * @return self
     */
    public function setGDSCodes(\Devlabs91\TravelgateNotify\Models\Ota\GDSInfoType\GDSCodesAType $gDSCodes)
    {
        $this->gDSCodes = $gDSCodes;
        return $this;
    }


}

