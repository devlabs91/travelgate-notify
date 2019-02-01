<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing AddressPrefType
 *
 * Identifies an address preference.
 * XSD Type: AddressPrefType
 */
class AddressPrefType
{

    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Defines a physical address.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AddressInfoType $address
     */
    private $address = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Gets as address
     *
     * Defines a physical address.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AddressInfoType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Defines a physical address.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AddressInfoType $address
     * @return self
     */
    public function setAddress(\Devlabs91\TravelgateNotify\Models\Ota\AddressInfoType $address)
    {
        $this->address = $address;
        return $this;
    }


}

