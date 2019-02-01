<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing BasicPropertyInfoType
 *
 * An abbreviated short summary of hotel descriptive information.
 * XSD Type: BasicPropertyInfoType
 */
class BasicPropertyInfoType
{

    /**
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     *
     * @property string $chainCode
     */
    private $chainCode = null;

    /**
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @property string $brandCode
     */
    private $brandCode = null;

    /**
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @property string $hotelCode
     */
    private $hotelCode = null;

    /**
     * The IATA city code; for example DCA, ORD.
     *
     * @property string $hotelCityCode
     */
    private $hotelCityCode = null;

    /**
     * A text field used to communicate the proper name of the hotel.
     *
     * @property string $hotelName
     */
    private $hotelName = null;

    /**
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @property string $hotelCodeContext
     */
    private $hotelCodeContext = null;

    /**
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @property string $chainName
     */
    private $chainName = null;

    /**
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @property string $brandName
     */
    private $brandName = null;

    /**
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @property string $areaID
     */
    private $areaID = null;

    /**
     * Identifies the segment (e.g., luxury, upscale, extended stay) of the hotel. Refer to OpenTravel Codelist Segment Category Code (SEG).
     *
     * @property string $hotelSegmentCategoryCode
     */
    private $hotelSegmentCategoryCode = null;

    /**
     * The level of integration of a property to provide automated transaction information. The lower the number, the higher the integration (e.g., a 1 means the supplier has the highest level of integration automation).
     *
     * @property int $supplierIntegrationLevel
     */
    private $supplierIntegrationLevel = null;

    /**
     * Provides the maximum number of rooms that can be booked in a property for a group.
     *
     * @property int $maxGroupRoomQuantity
     */
    private $maxGroupRoomQuantity = null;

    /**
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * A collection of VenderMessages.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VendorMessageType[] $vendorMessages
     */
    private $vendorMessages = null;

    /**
     * An element that identifies the geographic position of the hotel. The Position element uses the representation defined by ISO Standard 6709 to define a geographic point location.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\PositionAType $position
     */
    private $position = null;

    /**
     * Public address of the hotel property.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AddressInfoType $address
     */
    private $address = null;

    /**
     * Collection of hotel contact numbers.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType[] $contactNumbers
     */
    private $contactNumbers = null;

    /**
     * An element that identifies the hotel ratings.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\AwardAType[] $award
     */
    private $award = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RelativePositionType $relativePosition
     */
    private $relativePosition = null;

    /**
     * Hotel-level amenities (pool, etc) for searching.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\HotelAmenityAType[] $hotelAmenity
     */
    private $hotelAmenity = [
        
    ];

    /**
     * Identifies recreation facilities or amenities of interest.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\RecreationAType[] $recreation
     */
    private $recreation = [
        
    ];

    /**
     * Identifies services of interest.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\ServiceAType[] $service
     */
    private $service = [
        
    ];

    /**
     * Policy information for this hotel.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\PolicyAType $policy
     */
    private $policy = null;

    /**
     * Gets as chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     *
     * @return string
     */
    public function getChainCode()
    {
        return $this->chainCode;
    }

    /**
     * Sets a new chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     *
     * @param string $chainCode
     * @return self
     */
    public function setChainCode($chainCode)
    {
        $this->chainCode = $chainCode;
        return $this;
    }

    /**
     * Gets as brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @return string
     */
    public function getBrandCode()
    {
        return $this->brandCode;
    }

    /**
     * Sets a new brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @param string $brandCode
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        $this->brandCode = $brandCode;
        return $this;
    }

    /**
     * Gets as hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @return string
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }

    /**
     * Sets a new hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @param string $hotelCode
     * @return self
     */
    public function setHotelCode($hotelCode)
    {
        $this->hotelCode = $hotelCode;
        return $this;
    }

    /**
     * Gets as hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @return string
     */
    public function getHotelCityCode()
    {
        return $this->hotelCityCode;
    }

    /**
     * Sets a new hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @param string $hotelCityCode
     * @return self
     */
    public function setHotelCityCode($hotelCityCode)
    {
        $this->hotelCityCode = $hotelCityCode;
        return $this;
    }

    /**
     * Gets as hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Sets a new hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @param string $hotelName
     * @return self
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;
        return $this;
    }

    /**
     * Gets as hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @return string
     */
    public function getHotelCodeContext()
    {
        return $this->hotelCodeContext;
    }

    /**
     * Sets a new hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @param string $hotelCodeContext
     * @return self
     */
    public function setHotelCodeContext($hotelCodeContext)
    {
        $this->hotelCodeContext = $hotelCodeContext;
        return $this;
    }

    /**
     * Gets as chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @return string
     */
    public function getChainName()
    {
        return $this->chainName;
    }

    /**
     * Sets a new chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @param string $chainName
     * @return self
     */
    public function setChainName($chainName)
    {
        $this->chainName = $chainName;
        return $this;
    }

    /**
     * Gets as brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @param string $brandName
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * Gets as areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @return string
     */
    public function getAreaID()
    {
        return $this->areaID;
    }

    /**
     * Sets a new areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @param string $areaID
     * @return self
     */
    public function setAreaID($areaID)
    {
        $this->areaID = $areaID;
        return $this;
    }

    /**
     * Gets as hotelSegmentCategoryCode
     *
     * Identifies the segment (e.g., luxury, upscale, extended stay) of the hotel. Refer to OpenTravel Codelist Segment Category Code (SEG).
     *
     * @return string
     */
    public function getHotelSegmentCategoryCode()
    {
        return $this->hotelSegmentCategoryCode;
    }

    /**
     * Sets a new hotelSegmentCategoryCode
     *
     * Identifies the segment (e.g., luxury, upscale, extended stay) of the hotel. Refer to OpenTravel Codelist Segment Category Code (SEG).
     *
     * @param string $hotelSegmentCategoryCode
     * @return self
     */
    public function setHotelSegmentCategoryCode($hotelSegmentCategoryCode)
    {
        $this->hotelSegmentCategoryCode = $hotelSegmentCategoryCode;
        return $this;
    }

    /**
     * Gets as supplierIntegrationLevel
     *
     * The level of integration of a property to provide automated transaction information. The lower the number, the higher the integration (e.g., a 1 means the supplier has the highest level of integration automation).
     *
     * @return int
     */
    public function getSupplierIntegrationLevel()
    {
        return $this->supplierIntegrationLevel;
    }

    /**
     * Sets a new supplierIntegrationLevel
     *
     * The level of integration of a property to provide automated transaction information. The lower the number, the higher the integration (e.g., a 1 means the supplier has the highest level of integration automation).
     *
     * @param int $supplierIntegrationLevel
     * @return self
     */
    public function setSupplierIntegrationLevel($supplierIntegrationLevel)
    {
        $this->supplierIntegrationLevel = $supplierIntegrationLevel;
        return $this;
    }

    /**
     * Gets as maxGroupRoomQuantity
     *
     * Provides the maximum number of rooms that can be booked in a property for a group.
     *
     * @return int
     */
    public function getMaxGroupRoomQuantity()
    {
        return $this->maxGroupRoomQuantity;
    }

    /**
     * Sets a new maxGroupRoomQuantity
     *
     * Provides the maximum number of rooms that can be booked in a property for a group.
     *
     * @param int $maxGroupRoomQuantity
     * @return self
     */
    public function setMaxGroupRoomQuantity($maxGroupRoomQuantity)
    {
        $this->maxGroupRoomQuantity = $maxGroupRoomQuantity;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Adds as vendorMessage
     *
     * A collection of VenderMessages.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VendorMessageType $vendorMessage
     */
    public function addToVendorMessages(\Devlabs91\TravelgateNotify\Models\Ota\VendorMessageType $vendorMessage)
    {
        $this->vendorMessages[] = $vendorMessage;
        return $this;
    }

    /**
     * isset vendorMessages
     *
     * A collection of VenderMessages.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendorMessages($index)
    {
        return isset($this->vendorMessages[$index]);
    }

    /**
     * unset vendorMessages
     *
     * A collection of VenderMessages.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendorMessages($index)
    {
        unset($this->vendorMessages[$index]);
    }

    /**
     * Gets as vendorMessages
     *
     * A collection of VenderMessages.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VendorMessageType[]
     */
    public function getVendorMessages()
    {
        return $this->vendorMessages;
    }

    /**
     * Sets a new vendorMessages
     *
     * A collection of VenderMessages.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VendorMessageType[] $vendorMessages
     * @return self
     */
    public function setVendorMessages(array $vendorMessages)
    {
        $this->vendorMessages = $vendorMessages;
        return $this;
    }

    /**
     * Gets as position
     *
     * An element that identifies the geographic position of the hotel. The Position element uses the representation defined by ISO Standard 6709 to define a geographic point location.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * An element that identifies the geographic position of the hotel. The Position element uses the representation defined by ISO Standard 6709 to define a geographic point location.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\PositionAType $position
     * @return self
     */
    public function setPosition(\Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\PositionAType $position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as address
     *
     * Public address of the hotel property.
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
     * Public address of the hotel property.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AddressInfoType $address
     * @return self
     */
    public function setAddress(\Devlabs91\TravelgateNotify\Models\Ota\AddressInfoType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as contactNumber
     *
     * Collection of hotel contact numbers.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType $contactNumber
     */
    public function addToContactNumbers(\Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType $contactNumber)
    {
        $this->contactNumbers[] = $contactNumber;
        return $this;
    }

    /**
     * isset contactNumbers
     *
     * Collection of hotel contact numbers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactNumbers($index)
    {
        return isset($this->contactNumbers[$index]);
    }

    /**
     * unset contactNumbers
     *
     * Collection of hotel contact numbers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactNumbers($index)
    {
        unset($this->contactNumbers[$index]);
    }

    /**
     * Gets as contactNumbers
     *
     * Collection of hotel contact numbers.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType[]
     */
    public function getContactNumbers()
    {
        return $this->contactNumbers;
    }

    /**
     * Sets a new contactNumbers
     *
     * Collection of hotel contact numbers.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType[] $contactNumbers
     * @return self
     */
    public function setContactNumbers(array $contactNumbers)
    {
        $this->contactNumbers = $contactNumbers;
        return $this;
    }

    /**
     * Adds as award
     *
     * An element that identifies the hotel ratings.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\AwardAType $award
     */
    public function addToAward(\Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\AwardAType $award)
    {
        $this->award[] = $award;
        return $this;
    }

    /**
     * isset award
     *
     * An element that identifies the hotel ratings.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAward($index)
    {
        return isset($this->award[$index]);
    }

    /**
     * unset award
     *
     * An element that identifies the hotel ratings.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAward($index)
    {
        unset($this->award[$index]);
    }

    /**
     * Gets as award
     *
     * An element that identifies the hotel ratings.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\AwardAType[]
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * Sets a new award
     *
     * An element that identifies the hotel ratings.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\AwardAType[] $award
     * @return self
     */
    public function setAward(array $award)
    {
        $this->award = $award;
        return $this;
    }

    /**
     * Gets as relativePosition
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RelativePositionType
     */
    public function getRelativePosition()
    {
        return $this->relativePosition;
    }

    /**
     * Sets a new relativePosition
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RelativePositionType $relativePosition
     * @return self
     */
    public function setRelativePosition(\Devlabs91\TravelgateNotify\Models\Ota\RelativePositionType $relativePosition)
    {
        $this->relativePosition = $relativePosition;
        return $this;
    }

    /**
     * Adds as hotelAmenity
     *
     * Hotel-level amenities (pool, etc) for searching.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\HotelAmenityAType $hotelAmenity
     */
    public function addToHotelAmenity(\Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\HotelAmenityAType $hotelAmenity)
    {
        $this->hotelAmenity[] = $hotelAmenity;
        return $this;
    }

    /**
     * isset hotelAmenity
     *
     * Hotel-level amenities (pool, etc) for searching.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelAmenity($index)
    {
        return isset($this->hotelAmenity[$index]);
    }

    /**
     * unset hotelAmenity
     *
     * Hotel-level amenities (pool, etc) for searching.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelAmenity($index)
    {
        unset($this->hotelAmenity[$index]);
    }

    /**
     * Gets as hotelAmenity
     *
     * Hotel-level amenities (pool, etc) for searching.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\HotelAmenityAType[]
     */
    public function getHotelAmenity()
    {
        return $this->hotelAmenity;
    }

    /**
     * Sets a new hotelAmenity
     *
     * Hotel-level amenities (pool, etc) for searching.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\HotelAmenityAType[] $hotelAmenity
     * @return self
     */
    public function setHotelAmenity(array $hotelAmenity)
    {
        $this->hotelAmenity = $hotelAmenity;
        return $this;
    }

    /**
     * Adds as recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\RecreationAType $recreation
     */
    public function addToRecreation(\Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\RecreationAType $recreation)
    {
        $this->recreation[] = $recreation;
        return $this;
    }

    /**
     * isset recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecreation($index)
    {
        return isset($this->recreation[$index]);
    }

    /**
     * unset recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecreation($index)
    {
        unset($this->recreation[$index]);
    }

    /**
     * Gets as recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\RecreationAType[]
     */
    public function getRecreation()
    {
        return $this->recreation;
    }

    /**
     * Sets a new recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\RecreationAType[] $recreation
     * @return self
     */
    public function setRecreation(array $recreation)
    {
        $this->recreation = $recreation;
        return $this;
    }

    /**
     * Adds as service
     *
     * Identifies services of interest.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\ServiceAType $service
     */
    public function addToService(\Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\ServiceAType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * Identifies services of interest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Identifies services of interest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Identifies services of interest.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Identifies services of interest.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\ServiceAType[] $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Gets as policy
     *
     * Policy information for this hotel.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\PolicyAType
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * Policy information for this hotel.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\PolicyAType $policy
     * @return self
     */
    public function setPolicy(\Devlabs91\TravelgateNotify\Models\Ota\BasicPropertyInfoType\PolicyAType $policy)
    {
        $this->policy = $policy;
        return $this;
    }


}

