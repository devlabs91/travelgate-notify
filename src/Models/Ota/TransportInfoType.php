<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing TransportInfoType
 *
 * A TransportInfo object is used to indicate transportation information for a guest.
 * XSD Type: TransportInfoType
 */
class TransportInfoType
{

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType\TransportInfoAType $transportInfo
     */
    private $transportInfo = null;

    /**
     * Gets as transportInfo
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType\TransportInfoAType
     */
    public function getTransportInfo()
    {
        return $this->transportInfo;
    }

    /**
     * Sets a new transportInfo
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType\TransportInfoAType $transportInfo
     * @return self
     */
    public function setTransportInfo(\Devlabs91\TravelgateNotify\Models\Ota\TransportInfoType\TransportInfoAType $transportInfo)
    {
        $this->transportInfo = $transportInfo;
        return $this;
    }


}

