<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing HotelPrefType
 *
 * These are the hotel preference elements used on an instance of a profile.
 * XSD Type: HotelPrefType
 */
class HotelPrefType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

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
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property bool $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Code identifying preferred hotel rate plan for this travel situation
     *
     * @property string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * Category of hotel guest. Refer to OpenTravel Code List Hotel Guest Type (GUE).
     *
     * @property string $hotelGuestType
     */
    private $hotelGuestType = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyPrefType[] $loyaltyPref
     */
    private $loyaltyPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormPrefType[] $paymentFormPref
     */
    private $paymentFormPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyNamePrefType[] $hotelChainPref
     */
    private $hotelChainPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PropertyNamePrefType[] $propertyNamePref
     */
    private $propertyNamePref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PropertyLocationPrefType[] $propertyLocationPref
     */
    private $propertyLocationPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PropertyTypePrefType[] $propertyTypePref
     */
    private $propertyTypePref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PropertyClassPrefType[] $propertyClassPref
     */
    private $propertyClassPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PropertyAmenityPrefType[] $propertyAmenityPref
     */
    private $propertyAmenityPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType[] $roomAmenityPref
     */
    private $roomAmenityPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomLocationPrefType[] $roomLocationPref
     */
    private $roomLocationPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BedTypePrefType[] $bedTypePref
     */
    private $bedTypePref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FoodSrvcPrefType[] $foodSrvcPref
     */
    private $foodSrvcPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MediaEntertainPrefType[] $mediaEntertainPref
     */
    private $mediaEntertainPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PetInfoPrefType[] $petInfoPref
     */
    private $petInfoPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MealPrefType[] $mealPref
     */
    private $mealPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RecreationSrvcPrefType[] $recreationSrvcPref
     */
    private $recreationSrvcPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BusinessSrvcPrefType[] $businessSrvcPref
     */
    private $businessSrvcPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PersonalSrvcPrefType[] $personalSrvcPref
     */
    private $personalSrvcPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SecurityFeaturePrefType[] $securityFeaturePref
     */
    private $securityFeaturePref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PhysChallFeaturePrefType[] $physChallFeaturePref
     */
    private $physChallFeaturePref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SpecRequestPrefType[] $specRequestPref
     */
    private $specRequestPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;
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
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @return bool
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @param bool $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;
        return $this;
    }

    /**
     * Gets as ratePlanCode
     *
     * Code identifying preferred hotel rate plan for this travel situation
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * Code identifying preferred hotel rate plan for this travel situation
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;
        return $this;
    }

    /**
     * Gets as hotelGuestType
     *
     * Category of hotel guest. Refer to OpenTravel Code List Hotel Guest Type (GUE).
     *
     * @return string
     */
    public function getHotelGuestType()
    {
        return $this->hotelGuestType;
    }

    /**
     * Sets a new hotelGuestType
     *
     * Category of hotel guest. Refer to OpenTravel Code List Hotel Guest Type (GUE).
     *
     * @param string $hotelGuestType
     * @return self
     */
    public function setHotelGuestType($hotelGuestType)
    {
        $this->hotelGuestType = $hotelGuestType;
        return $this;
    }

    /**
     * Adds as loyaltyPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyPrefType $loyaltyPref
     */
    public function addToLoyaltyPref(\Devlabs91\TravelgateNotify\Models\Ota\LoyaltyPrefType $loyaltyPref)
    {
        $this->loyaltyPref[] = $loyaltyPref;
        return $this;
    }

    /**
     * isset loyaltyPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyaltyPref($index)
    {
        return isset($this->loyaltyPref[$index]);
    }

    /**
     * unset loyaltyPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyaltyPref($index)
    {
        unset($this->loyaltyPref[$index]);
    }

    /**
     * Gets as loyaltyPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyPrefType[]
     */
    public function getLoyaltyPref()
    {
        return $this->loyaltyPref;
    }

    /**
     * Sets a new loyaltyPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyPrefType[] $loyaltyPref
     * @return self
     */
    public function setLoyaltyPref(array $loyaltyPref)
    {
        $this->loyaltyPref = $loyaltyPref;
        return $this;
    }

    /**
     * Adds as paymentFormPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormPrefType $paymentFormPref
     */
    public function addToPaymentFormPref(\Devlabs91\TravelgateNotify\Models\Ota\PaymentFormPrefType $paymentFormPref)
    {
        $this->paymentFormPref[] = $paymentFormPref;
        return $this;
    }

    /**
     * isset paymentFormPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentFormPref($index)
    {
        return isset($this->paymentFormPref[$index]);
    }

    /**
     * unset paymentFormPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentFormPref($index)
    {
        unset($this->paymentFormPref[$index]);
    }

    /**
     * Gets as paymentFormPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormPrefType[]
     */
    public function getPaymentFormPref()
    {
        return $this->paymentFormPref;
    }

    /**
     * Sets a new paymentFormPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormPrefType[] $paymentFormPref
     * @return self
     */
    public function setPaymentFormPref(array $paymentFormPref)
    {
        $this->paymentFormPref = $paymentFormPref;
        return $this;
    }

    /**
     * Adds as hotelChainPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNamePrefType $hotelChainPref
     */
    public function addToHotelChainPref(\Devlabs91\TravelgateNotify\Models\Ota\CompanyNamePrefType $hotelChainPref)
    {
        $this->hotelChainPref[] = $hotelChainPref;
        return $this;
    }

    /**
     * isset hotelChainPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelChainPref($index)
    {
        return isset($this->hotelChainPref[$index]);
    }

    /**
     * unset hotelChainPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelChainPref($index)
    {
        unset($this->hotelChainPref[$index]);
    }

    /**
     * Gets as hotelChainPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyNamePrefType[]
     */
    public function getHotelChainPref()
    {
        return $this->hotelChainPref;
    }

    /**
     * Sets a new hotelChainPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNamePrefType[] $hotelChainPref
     * @return self
     */
    public function setHotelChainPref(array $hotelChainPref)
    {
        $this->hotelChainPref = $hotelChainPref;
        return $this;
    }

    /**
     * Adds as propertyNamePref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PropertyNamePrefType $propertyNamePref
     */
    public function addToPropertyNamePref(\Devlabs91\TravelgateNotify\Models\Ota\PropertyNamePrefType $propertyNamePref)
    {
        $this->propertyNamePref[] = $propertyNamePref;
        return $this;
    }

    /**
     * isset propertyNamePref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyNamePref($index)
    {
        return isset($this->propertyNamePref[$index]);
    }

    /**
     * unset propertyNamePref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyNamePref($index)
    {
        unset($this->propertyNamePref[$index]);
    }

    /**
     * Gets as propertyNamePref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PropertyNamePrefType[]
     */
    public function getPropertyNamePref()
    {
        return $this->propertyNamePref;
    }

    /**
     * Sets a new propertyNamePref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PropertyNamePrefType[] $propertyNamePref
     * @return self
     */
    public function setPropertyNamePref(array $propertyNamePref)
    {
        $this->propertyNamePref = $propertyNamePref;
        return $this;
    }

    /**
     * Adds as propertyLocationPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PropertyLocationPrefType $propertyLocationPref
     */
    public function addToPropertyLocationPref(\Devlabs91\TravelgateNotify\Models\Ota\PropertyLocationPrefType $propertyLocationPref)
    {
        $this->propertyLocationPref[] = $propertyLocationPref;
        return $this;
    }

    /**
     * isset propertyLocationPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyLocationPref($index)
    {
        return isset($this->propertyLocationPref[$index]);
    }

    /**
     * unset propertyLocationPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyLocationPref($index)
    {
        unset($this->propertyLocationPref[$index]);
    }

    /**
     * Gets as propertyLocationPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PropertyLocationPrefType[]
     */
    public function getPropertyLocationPref()
    {
        return $this->propertyLocationPref;
    }

    /**
     * Sets a new propertyLocationPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PropertyLocationPrefType[] $propertyLocationPref
     * @return self
     */
    public function setPropertyLocationPref(array $propertyLocationPref)
    {
        $this->propertyLocationPref = $propertyLocationPref;
        return $this;
    }

    /**
     * Adds as propertyTypePref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PropertyTypePrefType $propertyTypePref
     */
    public function addToPropertyTypePref(\Devlabs91\TravelgateNotify\Models\Ota\PropertyTypePrefType $propertyTypePref)
    {
        $this->propertyTypePref[] = $propertyTypePref;
        return $this;
    }

    /**
     * isset propertyTypePref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyTypePref($index)
    {
        return isset($this->propertyTypePref[$index]);
    }

    /**
     * unset propertyTypePref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyTypePref($index)
    {
        unset($this->propertyTypePref[$index]);
    }

    /**
     * Gets as propertyTypePref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PropertyTypePrefType[]
     */
    public function getPropertyTypePref()
    {
        return $this->propertyTypePref;
    }

    /**
     * Sets a new propertyTypePref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PropertyTypePrefType[] $propertyTypePref
     * @return self
     */
    public function setPropertyTypePref(array $propertyTypePref)
    {
        $this->propertyTypePref = $propertyTypePref;
        return $this;
    }

    /**
     * Adds as propertyClassPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PropertyClassPrefType $propertyClassPref
     */
    public function addToPropertyClassPref(\Devlabs91\TravelgateNotify\Models\Ota\PropertyClassPrefType $propertyClassPref)
    {
        $this->propertyClassPref[] = $propertyClassPref;
        return $this;
    }

    /**
     * isset propertyClassPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyClassPref($index)
    {
        return isset($this->propertyClassPref[$index]);
    }

    /**
     * unset propertyClassPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyClassPref($index)
    {
        unset($this->propertyClassPref[$index]);
    }

    /**
     * Gets as propertyClassPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PropertyClassPrefType[]
     */
    public function getPropertyClassPref()
    {
        return $this->propertyClassPref;
    }

    /**
     * Sets a new propertyClassPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PropertyClassPrefType[] $propertyClassPref
     * @return self
     */
    public function setPropertyClassPref(array $propertyClassPref)
    {
        $this->propertyClassPref = $propertyClassPref;
        return $this;
    }

    /**
     * Adds as propertyAmenityPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PropertyAmenityPrefType $propertyAmenityPref
     */
    public function addToPropertyAmenityPref(\Devlabs91\TravelgateNotify\Models\Ota\PropertyAmenityPrefType $propertyAmenityPref)
    {
        $this->propertyAmenityPref[] = $propertyAmenityPref;
        return $this;
    }

    /**
     * isset propertyAmenityPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyAmenityPref($index)
    {
        return isset($this->propertyAmenityPref[$index]);
    }

    /**
     * unset propertyAmenityPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyAmenityPref($index)
    {
        unset($this->propertyAmenityPref[$index]);
    }

    /**
     * Gets as propertyAmenityPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PropertyAmenityPrefType[]
     */
    public function getPropertyAmenityPref()
    {
        return $this->propertyAmenityPref;
    }

    /**
     * Sets a new propertyAmenityPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PropertyAmenityPrefType[] $propertyAmenityPref
     * @return self
     */
    public function setPropertyAmenityPref(array $propertyAmenityPref)
    {
        $this->propertyAmenityPref = $propertyAmenityPref;
        return $this;
    }

    /**
     * Adds as roomAmenityPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType $roomAmenityPref
     */
    public function addToRoomAmenityPref(\Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType $roomAmenityPref)
    {
        $this->roomAmenityPref[] = $roomAmenityPref;
        return $this;
    }

    /**
     * isset roomAmenityPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomAmenityPref($index)
    {
        return isset($this->roomAmenityPref[$index]);
    }

    /**
     * unset roomAmenityPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomAmenityPref($index)
    {
        unset($this->roomAmenityPref[$index]);
    }

    /**
     * Gets as roomAmenityPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType[]
     */
    public function getRoomAmenityPref()
    {
        return $this->roomAmenityPref;
    }

    /**
     * Sets a new roomAmenityPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType[] $roomAmenityPref
     * @return self
     */
    public function setRoomAmenityPref(array $roomAmenityPref)
    {
        $this->roomAmenityPref = $roomAmenityPref;
        return $this;
    }

    /**
     * Adds as roomLocationPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomLocationPrefType $roomLocationPref
     */
    public function addToRoomLocationPref(\Devlabs91\TravelgateNotify\Models\Ota\RoomLocationPrefType $roomLocationPref)
    {
        $this->roomLocationPref[] = $roomLocationPref;
        return $this;
    }

    /**
     * isset roomLocationPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomLocationPref($index)
    {
        return isset($this->roomLocationPref[$index]);
    }

    /**
     * unset roomLocationPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomLocationPref($index)
    {
        unset($this->roomLocationPref[$index]);
    }

    /**
     * Gets as roomLocationPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomLocationPrefType[]
     */
    public function getRoomLocationPref()
    {
        return $this->roomLocationPref;
    }

    /**
     * Sets a new roomLocationPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomLocationPrefType[] $roomLocationPref
     * @return self
     */
    public function setRoomLocationPref(array $roomLocationPref)
    {
        $this->roomLocationPref = $roomLocationPref;
        return $this;
    }

    /**
     * Adds as bedTypePref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BedTypePrefType $bedTypePref
     */
    public function addToBedTypePref(\Devlabs91\TravelgateNotify\Models\Ota\BedTypePrefType $bedTypePref)
    {
        $this->bedTypePref[] = $bedTypePref;
        return $this;
    }

    /**
     * isset bedTypePref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBedTypePref($index)
    {
        return isset($this->bedTypePref[$index]);
    }

    /**
     * unset bedTypePref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBedTypePref($index)
    {
        unset($this->bedTypePref[$index]);
    }

    /**
     * Gets as bedTypePref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BedTypePrefType[]
     */
    public function getBedTypePref()
    {
        return $this->bedTypePref;
    }

    /**
     * Sets a new bedTypePref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BedTypePrefType[] $bedTypePref
     * @return self
     */
    public function setBedTypePref(array $bedTypePref)
    {
        $this->bedTypePref = $bedTypePref;
        return $this;
    }

    /**
     * Adds as foodSrvcPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FoodSrvcPrefType $foodSrvcPref
     */
    public function addToFoodSrvcPref(\Devlabs91\TravelgateNotify\Models\Ota\FoodSrvcPrefType $foodSrvcPref)
    {
        $this->foodSrvcPref[] = $foodSrvcPref;
        return $this;
    }

    /**
     * isset foodSrvcPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFoodSrvcPref($index)
    {
        return isset($this->foodSrvcPref[$index]);
    }

    /**
     * unset foodSrvcPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFoodSrvcPref($index)
    {
        unset($this->foodSrvcPref[$index]);
    }

    /**
     * Gets as foodSrvcPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FoodSrvcPrefType[]
     */
    public function getFoodSrvcPref()
    {
        return $this->foodSrvcPref;
    }

    /**
     * Sets a new foodSrvcPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FoodSrvcPrefType[] $foodSrvcPref
     * @return self
     */
    public function setFoodSrvcPref(array $foodSrvcPref)
    {
        $this->foodSrvcPref = $foodSrvcPref;
        return $this;
    }

    /**
     * Adds as mediaEntertainPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MediaEntertainPrefType $mediaEntertainPref
     */
    public function addToMediaEntertainPref(\Devlabs91\TravelgateNotify\Models\Ota\MediaEntertainPrefType $mediaEntertainPref)
    {
        $this->mediaEntertainPref[] = $mediaEntertainPref;
        return $this;
    }

    /**
     * isset mediaEntertainPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMediaEntertainPref($index)
    {
        return isset($this->mediaEntertainPref[$index]);
    }

    /**
     * unset mediaEntertainPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMediaEntertainPref($index)
    {
        unset($this->mediaEntertainPref[$index]);
    }

    /**
     * Gets as mediaEntertainPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MediaEntertainPrefType[]
     */
    public function getMediaEntertainPref()
    {
        return $this->mediaEntertainPref;
    }

    /**
     * Sets a new mediaEntertainPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MediaEntertainPrefType[] $mediaEntertainPref
     * @return self
     */
    public function setMediaEntertainPref(array $mediaEntertainPref)
    {
        $this->mediaEntertainPref = $mediaEntertainPref;
        return $this;
    }

    /**
     * Adds as petInfoPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PetInfoPrefType $petInfoPref
     */
    public function addToPetInfoPref(\Devlabs91\TravelgateNotify\Models\Ota\PetInfoPrefType $petInfoPref)
    {
        $this->petInfoPref[] = $petInfoPref;
        return $this;
    }

    /**
     * isset petInfoPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPetInfoPref($index)
    {
        return isset($this->petInfoPref[$index]);
    }

    /**
     * unset petInfoPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPetInfoPref($index)
    {
        unset($this->petInfoPref[$index]);
    }

    /**
     * Gets as petInfoPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PetInfoPrefType[]
     */
    public function getPetInfoPref()
    {
        return $this->petInfoPref;
    }

    /**
     * Sets a new petInfoPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PetInfoPrefType[] $petInfoPref
     * @return self
     */
    public function setPetInfoPref(array $petInfoPref)
    {
        $this->petInfoPref = $petInfoPref;
        return $this;
    }

    /**
     * Adds as mealPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MealPrefType $mealPref
     */
    public function addToMealPref(\Devlabs91\TravelgateNotify\Models\Ota\MealPrefType $mealPref)
    {
        $this->mealPref[] = $mealPref;
        return $this;
    }

    /**
     * isset mealPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMealPref($index)
    {
        return isset($this->mealPref[$index]);
    }

    /**
     * unset mealPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMealPref($index)
    {
        unset($this->mealPref[$index]);
    }

    /**
     * Gets as mealPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MealPrefType[]
     */
    public function getMealPref()
    {
        return $this->mealPref;
    }

    /**
     * Sets a new mealPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MealPrefType[] $mealPref
     * @return self
     */
    public function setMealPref(array $mealPref)
    {
        $this->mealPref = $mealPref;
        return $this;
    }

    /**
     * Adds as recreationSrvcPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RecreationSrvcPrefType $recreationSrvcPref
     */
    public function addToRecreationSrvcPref(\Devlabs91\TravelgateNotify\Models\Ota\RecreationSrvcPrefType $recreationSrvcPref)
    {
        $this->recreationSrvcPref[] = $recreationSrvcPref;
        return $this;
    }

    /**
     * isset recreationSrvcPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecreationSrvcPref($index)
    {
        return isset($this->recreationSrvcPref[$index]);
    }

    /**
     * unset recreationSrvcPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecreationSrvcPref($index)
    {
        unset($this->recreationSrvcPref[$index]);
    }

    /**
     * Gets as recreationSrvcPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RecreationSrvcPrefType[]
     */
    public function getRecreationSrvcPref()
    {
        return $this->recreationSrvcPref;
    }

    /**
     * Sets a new recreationSrvcPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RecreationSrvcPrefType[] $recreationSrvcPref
     * @return self
     */
    public function setRecreationSrvcPref(array $recreationSrvcPref)
    {
        $this->recreationSrvcPref = $recreationSrvcPref;
        return $this;
    }

    /**
     * Adds as businessSrvcPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BusinessSrvcPrefType $businessSrvcPref
     */
    public function addToBusinessSrvcPref(\Devlabs91\TravelgateNotify\Models\Ota\BusinessSrvcPrefType $businessSrvcPref)
    {
        $this->businessSrvcPref[] = $businessSrvcPref;
        return $this;
    }

    /**
     * isset businessSrvcPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBusinessSrvcPref($index)
    {
        return isset($this->businessSrvcPref[$index]);
    }

    /**
     * unset businessSrvcPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBusinessSrvcPref($index)
    {
        unset($this->businessSrvcPref[$index]);
    }

    /**
     * Gets as businessSrvcPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BusinessSrvcPrefType[]
     */
    public function getBusinessSrvcPref()
    {
        return $this->businessSrvcPref;
    }

    /**
     * Sets a new businessSrvcPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BusinessSrvcPrefType[] $businessSrvcPref
     * @return self
     */
    public function setBusinessSrvcPref(array $businessSrvcPref)
    {
        $this->businessSrvcPref = $businessSrvcPref;
        return $this;
    }

    /**
     * Adds as personalSrvcPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PersonalSrvcPrefType $personalSrvcPref
     */
    public function addToPersonalSrvcPref(\Devlabs91\TravelgateNotify\Models\Ota\PersonalSrvcPrefType $personalSrvcPref)
    {
        $this->personalSrvcPref[] = $personalSrvcPref;
        return $this;
    }

    /**
     * isset personalSrvcPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonalSrvcPref($index)
    {
        return isset($this->personalSrvcPref[$index]);
    }

    /**
     * unset personalSrvcPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonalSrvcPref($index)
    {
        unset($this->personalSrvcPref[$index]);
    }

    /**
     * Gets as personalSrvcPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PersonalSrvcPrefType[]
     */
    public function getPersonalSrvcPref()
    {
        return $this->personalSrvcPref;
    }

    /**
     * Sets a new personalSrvcPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PersonalSrvcPrefType[] $personalSrvcPref
     * @return self
     */
    public function setPersonalSrvcPref(array $personalSrvcPref)
    {
        $this->personalSrvcPref = $personalSrvcPref;
        return $this;
    }

    /**
     * Adds as securityFeaturePref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SecurityFeaturePrefType $securityFeaturePref
     */
    public function addToSecurityFeaturePref(\Devlabs91\TravelgateNotify\Models\Ota\SecurityFeaturePrefType $securityFeaturePref)
    {
        $this->securityFeaturePref[] = $securityFeaturePref;
        return $this;
    }

    /**
     * isset securityFeaturePref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurityFeaturePref($index)
    {
        return isset($this->securityFeaturePref[$index]);
    }

    /**
     * unset securityFeaturePref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurityFeaturePref($index)
    {
        unset($this->securityFeaturePref[$index]);
    }

    /**
     * Gets as securityFeaturePref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SecurityFeaturePrefType[]
     */
    public function getSecurityFeaturePref()
    {
        return $this->securityFeaturePref;
    }

    /**
     * Sets a new securityFeaturePref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SecurityFeaturePrefType[] $securityFeaturePref
     * @return self
     */
    public function setSecurityFeaturePref(array $securityFeaturePref)
    {
        $this->securityFeaturePref = $securityFeaturePref;
        return $this;
    }

    /**
     * Adds as physChallFeaturePref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PhysChallFeaturePrefType $physChallFeaturePref
     */
    public function addToPhysChallFeaturePref(\Devlabs91\TravelgateNotify\Models\Ota\PhysChallFeaturePrefType $physChallFeaturePref)
    {
        $this->physChallFeaturePref[] = $physChallFeaturePref;
        return $this;
    }

    /**
     * isset physChallFeaturePref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhysChallFeaturePref($index)
    {
        return isset($this->physChallFeaturePref[$index]);
    }

    /**
     * unset physChallFeaturePref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhysChallFeaturePref($index)
    {
        unset($this->physChallFeaturePref[$index]);
    }

    /**
     * Gets as physChallFeaturePref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PhysChallFeaturePrefType[]
     */
    public function getPhysChallFeaturePref()
    {
        return $this->physChallFeaturePref;
    }

    /**
     * Sets a new physChallFeaturePref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PhysChallFeaturePrefType[] $physChallFeaturePref
     * @return self
     */
    public function setPhysChallFeaturePref(array $physChallFeaturePref)
    {
        $this->physChallFeaturePref = $physChallFeaturePref;
        return $this;
    }

    /**
     * Adds as specRequestPref
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecRequestPrefType $specRequestPref
     */
    public function addToSpecRequestPref(\Devlabs91\TravelgateNotify\Models\Ota\SpecRequestPrefType $specRequestPref)
    {
        $this->specRequestPref[] = $specRequestPref;
        return $this;
    }

    /**
     * isset specRequestPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecRequestPref($index)
    {
        return isset($this->specRequestPref[$index]);
    }

    /**
     * unset specRequestPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecRequestPref($index)
    {
        unset($this->specRequestPref[$index]);
    }

    /**
     * Gets as specRequestPref
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SpecRequestPrefType[]
     */
    public function getSpecRequestPref()
    {
        return $this->specRequestPref;
    }

    /**
     * Sets a new specRequestPref
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecRequestPrefType[] $specRequestPref
     * @return self
     */
    public function setSpecRequestPref(array $specRequestPref)
    {
        $this->specRequestPref = $specRequestPref;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }


}

