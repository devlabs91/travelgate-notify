<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing AddressType
 *
 * Provides address information.
 * XSD Type: AddressType
 */
class AddressType
{

    /**
     * Specifies if the associated data is formatted or not. When true, then it is formatted; when false, then not formatted.
     *  false
     *
     * @property bool $formattedInd
     */
    private $formattedInd = null;

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
     * Defines the type of address (e.g. home, business, other). Refer to OpenTravel Code List Communication Location Type (CLT).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * A remark associated with this address.
     *
     * @property string $remark
     */
    private $remark = null;

    /**
     * May contain the street number and optionally the street name.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AddressType\StreetNmbrAType $streetNmbr
     */
    private $streetNmbr = null;

    /**
     * Building name, room, apartment, or suite number.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AddressType\BldgRoomAType[] $bldgRoom
     */
    private $bldgRoom = [
        
    ];

    /**
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @property string[] $addressLine
     */
    private $addressLine = [
        
    ];

    /**
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @property string $cityName
     */
    private $cityName = null;

    /**
     * Post Office Code number.
     *
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * County or Region Name (e.g., Fairfax).
     *
     * @property string $county
     */
    private $county = null;

    /**
     * State or Province name (e.g., Texas).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\StateProvType $stateProv
     */
    private $stateProv = null;

    /**
     * Country name (e.g., Ireland).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CountryNameType $countryName
     */
    private $countryName = null;

    /**
     * Gets as formattedInd
     *
     * Specifies if the associated data is formatted or not. When true, then it is formatted; when false, then not formatted.
     *  false
     *
     * @return bool
     */
    public function getFormattedInd()
    {
        return $this->formattedInd;
    }

    /**
     * Sets a new formattedInd
     *
     * Specifies if the associated data is formatted or not. When true, then it is formatted; when false, then not formatted.
     *  false
     *
     * @param bool $formattedInd
     * @return self
     */
    public function setFormattedInd($formattedInd)
    {
        $this->formattedInd = $formattedInd;
        return $this;
    }

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
     * Gets as type
     *
     * Defines the type of address (e.g. home, business, other). Refer to OpenTravel Code List Communication Location Type (CLT).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Defines the type of address (e.g. home, business, other). Refer to OpenTravel Code List Communication Location Type (CLT).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as remark
     *
     * A remark associated with this address.
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * A remark associated with this address.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * Gets as streetNmbr
     *
     * May contain the street number and optionally the street name.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AddressType\StreetNmbrAType
     */
    public function getStreetNmbr()
    {
        return $this->streetNmbr;
    }

    /**
     * Sets a new streetNmbr
     *
     * May contain the street number and optionally the street name.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AddressType\StreetNmbrAType $streetNmbr
     * @return self
     */
    public function setStreetNmbr(\Devlabs91\TravelgateNotify\Models\Ota\AddressType\StreetNmbrAType $streetNmbr)
    {
        $this->streetNmbr = $streetNmbr;
        return $this;
    }

    /**
     * Adds as bldgRoom
     *
     * Building name, room, apartment, or suite number.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AddressType\BldgRoomAType $bldgRoom
     */
    public function addToBldgRoom(\Devlabs91\TravelgateNotify\Models\Ota\AddressType\BldgRoomAType $bldgRoom)
    {
        $this->bldgRoom[] = $bldgRoom;
        return $this;
    }

    /**
     * isset bldgRoom
     *
     * Building name, room, apartment, or suite number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBldgRoom($index)
    {
        return isset($this->bldgRoom[$index]);
    }

    /**
     * unset bldgRoom
     *
     * Building name, room, apartment, or suite number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBldgRoom($index)
    {
        unset($this->bldgRoom[$index]);
    }

    /**
     * Gets as bldgRoom
     *
     * Building name, room, apartment, or suite number.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AddressType\BldgRoomAType[]
     */
    public function getBldgRoom()
    {
        return $this->bldgRoom;
    }

    /**
     * Sets a new bldgRoom
     *
     * Building name, room, apartment, or suite number.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AddressType\BldgRoomAType[] $bldgRoom
     * @return self
     */
    public function setBldgRoom(array $bldgRoom)
    {
        $this->bldgRoom = $bldgRoom;
        return $this;
    }

    /**
     * Adds as addressLine
     *
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @return self
     * @param string $addressLine
     */
    public function addToAddressLine($addressLine)
    {
        $this->addressLine[] = $addressLine;
        return $this;
    }

    /**
     * isset addressLine
     *
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressLine($index)
    {
        return isset($this->addressLine[$index]);
    }

    /**
     * unset addressLine
     *
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressLine($index)
    {
        unset($this->addressLine[$index]);
    }

    /**
     * Gets as addressLine
     *
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @return string[]
     */
    public function getAddressLine()
    {
        return $this->addressLine;
    }

    /**
     * Sets a new addressLine
     *
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @param string $addressLine
     * @return self
     */
    public function setAddressLine(array $addressLine)
    {
        $this->addressLine = $addressLine;
        return $this;
    }

    /**
     * Gets as cityName
     *
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @param string $cityName
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * Post Office Code number.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * Post Office Code number.
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as county
     *
     * County or Region Name (e.g., Fairfax).
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Sets a new county
     *
     * County or Region Name (e.g., Fairfax).
     *
     * @param string $county
     * @return self
     */
    public function setCounty($county)
    {
        $this->county = $county;
        return $this;
    }

    /**
     * Gets as stateProv
     *
     * State or Province name (e.g., Texas).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\StateProvType
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Sets a new stateProv
     *
     * State or Province name (e.g., Texas).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\StateProvType $stateProv
     * @return self
     */
    public function setStateProv(\Devlabs91\TravelgateNotify\Models\Ota\StateProvType $stateProv)
    {
        $this->stateProv = $stateProv;
        return $this;
    }

    /**
     * Gets as countryName
     *
     * Country name (e.g., Ireland).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CountryNameType
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * Country name (e.g., Ireland).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CountryNameType $countryName
     * @return self
     */
    public function setCountryName(\Devlabs91\TravelgateNotify\Models\Ota\CountryNameType $countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }


}

