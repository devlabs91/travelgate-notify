<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing CommonPrefType
 *
 * Identifies preferences for common travel needs not associated with a specific travel service.
 * XSD Type: CommonPrefType
 */
class CommonPrefType
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
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property bool $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Identifes the primary language preference for the message. The human language is identified by ISO 639 codes.
     *
     * @property string $primaryLangID
     */
    private $primaryLangID = null;

    /**
     * Identifies the alternate language for a customer or message. The human language is identified by ISO 639 codes.
     *
     * @property string $altLangID
     */
    private $altLangID = null;

    /**
     * Enables a preference to be indicated for name information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\NamePrefType[] $namePref
     */
    private $namePref = [
        
    ];

    /**
     * Enables a preference to be indicated for telephone information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PhonePrefType[] $phonePref
     */
    private $phonePref = [
        
    ];

    /**
     * Enables a preference to be indicated for address information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AddressPrefType[] $addressPref
     */
    private $addressPref = [
        
    ];

    /**
     * Enables a preference to be indicated for form of payment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormPrefType[] $paymentFormPref
     */
    private $paymentFormPref = [
        
    ];

    /**
     * Enables a preference to be indicated for a traveler's interests.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\InterestPrefType[] $interestPref
     */
    private $interestPref = [
        
    ];

    /**
     * Enables a preference to be indicated for insurance.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\InsurancePrefType[] $insurancePref
     */
    private $insurancePref = [
        
    ];

    /**
     * Enables a preference to be indicated for seating.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SeatingPrefType[] $seatingPref
     */
    private $seatingPref = [
        
    ];

    /**
     * Enables a preference to be indicated for a method of ticket distribution.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TicketDistribPrefType[] $ticketDistribPref
     */
    private $ticketDistribPref = [
        
    ];

    /**
     * Enables a preference to be indicated for media and entertainment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MediaEntertainPrefType[] $mediaEntertainPref
     */
    private $mediaEntertainPref = [
        
    ];

    /**
     * Enables a preference to be indicated for pet information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PetInfoPrefType[] $petInfoPref
     */
    private $petInfoPref = [
        
    ];

    /**
     * Enables a preference to be indicated for food and beverage.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MealPrefType[] $mealPref
     */
    private $mealPref = [
        
    ];

    /**
     * Enables a preference to be indicated for a loyalty program.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyPrefType[] $loyaltyPref
     */
    private $loyaltyPref = [
        
    ];

    /**
     * Enables a preference to be indicated for a special request.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SpecRequestPrefType[] $specRequestPref
     */
    private $specRequestPref = [
        
    ];

    /**
     * Enables a preference to be indicated for a related traveler.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RelatedTravelerPrefType[] $relatedTravelerPref
     */
    private $relatedTravelerPref = [
        
    ];

    /**
     * The traveller's preferred means of being contacted.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CommonPrefType\ContactPrefAType[] $contactPref
     */
    private $contactPref = [
        
    ];

    /**
     * Defines the category of the traveler and the purpose of the trip for which these preferences apply. Typically used for company profiles.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\EmployeeInfoType $employeeLevelInfo
     */
    private $employeeLevelInfo = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Gets as primaryLangID
     *
     * Identifes the primary language preference for the message. The human language is identified by ISO 639 codes.
     *
     * @return string
     */
    public function getPrimaryLangID()
    {
        return $this->primaryLangID;
    }

    /**
     * Sets a new primaryLangID
     *
     * Identifes the primary language preference for the message. The human language is identified by ISO 639 codes.
     *
     * @param string $primaryLangID
     * @return self
     */
    public function setPrimaryLangID($primaryLangID)
    {
        $this->primaryLangID = $primaryLangID;
        return $this;
    }

    /**
     * Gets as altLangID
     *
     * Identifies the alternate language for a customer or message. The human language is identified by ISO 639 codes.
     *
     * @return string
     */
    public function getAltLangID()
    {
        return $this->altLangID;
    }

    /**
     * Sets a new altLangID
     *
     * Identifies the alternate language for a customer or message. The human language is identified by ISO 639 codes.
     *
     * @param string $altLangID
     * @return self
     */
    public function setAltLangID($altLangID)
    {
        $this->altLangID = $altLangID;
        return $this;
    }

    /**
     * Adds as namePref
     *
     * Enables a preference to be indicated for name information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\NamePrefType $namePref
     */
    public function addToNamePref(\Devlabs91\TravelgateNotify\Models\Ota\NamePrefType $namePref)
    {
        $this->namePref[] = $namePref;
        return $this;
    }

    /**
     * isset namePref
     *
     * Enables a preference to be indicated for name information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNamePref($index)
    {
        return isset($this->namePref[$index]);
    }

    /**
     * unset namePref
     *
     * Enables a preference to be indicated for name information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNamePref($index)
    {
        unset($this->namePref[$index]);
    }

    /**
     * Gets as namePref
     *
     * Enables a preference to be indicated for name information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\NamePrefType[]
     */
    public function getNamePref()
    {
        return $this->namePref;
    }

    /**
     * Sets a new namePref
     *
     * Enables a preference to be indicated for name information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\NamePrefType[] $namePref
     * @return self
     */
    public function setNamePref(array $namePref)
    {
        $this->namePref = $namePref;
        return $this;
    }

    /**
     * Adds as phonePref
     *
     * Enables a preference to be indicated for telephone information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PhonePrefType $phonePref
     */
    public function addToPhonePref(\Devlabs91\TravelgateNotify\Models\Ota\PhonePrefType $phonePref)
    {
        $this->phonePref[] = $phonePref;
        return $this;
    }

    /**
     * isset phonePref
     *
     * Enables a preference to be indicated for telephone information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhonePref($index)
    {
        return isset($this->phonePref[$index]);
    }

    /**
     * unset phonePref
     *
     * Enables a preference to be indicated for telephone information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhonePref($index)
    {
        unset($this->phonePref[$index]);
    }

    /**
     * Gets as phonePref
     *
     * Enables a preference to be indicated for telephone information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PhonePrefType[]
     */
    public function getPhonePref()
    {
        return $this->phonePref;
    }

    /**
     * Sets a new phonePref
     *
     * Enables a preference to be indicated for telephone information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PhonePrefType[] $phonePref
     * @return self
     */
    public function setPhonePref(array $phonePref)
    {
        $this->phonePref = $phonePref;
        return $this;
    }

    /**
     * Adds as addressPref
     *
     * Enables a preference to be indicated for address information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AddressPrefType $addressPref
     */
    public function addToAddressPref(\Devlabs91\TravelgateNotify\Models\Ota\AddressPrefType $addressPref)
    {
        $this->addressPref[] = $addressPref;
        return $this;
    }

    /**
     * isset addressPref
     *
     * Enables a preference to be indicated for address information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressPref($index)
    {
        return isset($this->addressPref[$index]);
    }

    /**
     * unset addressPref
     *
     * Enables a preference to be indicated for address information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressPref($index)
    {
        unset($this->addressPref[$index]);
    }

    /**
     * Gets as addressPref
     *
     * Enables a preference to be indicated for address information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AddressPrefType[]
     */
    public function getAddressPref()
    {
        return $this->addressPref;
    }

    /**
     * Sets a new addressPref
     *
     * Enables a preference to be indicated for address information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AddressPrefType[] $addressPref
     * @return self
     */
    public function setAddressPref(array $addressPref)
    {
        $this->addressPref = $addressPref;
        return $this;
    }

    /**
     * Adds as paymentFormPref
     *
     * Enables a preference to be indicated for form of payment.
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
     * Enables a preference to be indicated for form of payment.
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
     * Enables a preference to be indicated for form of payment.
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
     * Enables a preference to be indicated for form of payment.
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
     * Enables a preference to be indicated for form of payment.
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
     * Adds as interestPref
     *
     * Enables a preference to be indicated for a traveler's interests.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\InterestPrefType $interestPref
     */
    public function addToInterestPref(\Devlabs91\TravelgateNotify\Models\Ota\InterestPrefType $interestPref)
    {
        $this->interestPref[] = $interestPref;
        return $this;
    }

    /**
     * isset interestPref
     *
     * Enables a preference to be indicated for a traveler's interests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInterestPref($index)
    {
        return isset($this->interestPref[$index]);
    }

    /**
     * unset interestPref
     *
     * Enables a preference to be indicated for a traveler's interests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInterestPref($index)
    {
        unset($this->interestPref[$index]);
    }

    /**
     * Gets as interestPref
     *
     * Enables a preference to be indicated for a traveler's interests.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\InterestPrefType[]
     */
    public function getInterestPref()
    {
        return $this->interestPref;
    }

    /**
     * Sets a new interestPref
     *
     * Enables a preference to be indicated for a traveler's interests.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\InterestPrefType[] $interestPref
     * @return self
     */
    public function setInterestPref(array $interestPref)
    {
        $this->interestPref = $interestPref;
        return $this;
    }

    /**
     * Adds as insurancePref
     *
     * Enables a preference to be indicated for insurance.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\InsurancePrefType $insurancePref
     */
    public function addToInsurancePref(\Devlabs91\TravelgateNotify\Models\Ota\InsurancePrefType $insurancePref)
    {
        $this->insurancePref[] = $insurancePref;
        return $this;
    }

    /**
     * isset insurancePref
     *
     * Enables a preference to be indicated for insurance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInsurancePref($index)
    {
        return isset($this->insurancePref[$index]);
    }

    /**
     * unset insurancePref
     *
     * Enables a preference to be indicated for insurance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInsurancePref($index)
    {
        unset($this->insurancePref[$index]);
    }

    /**
     * Gets as insurancePref
     *
     * Enables a preference to be indicated for insurance.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\InsurancePrefType[]
     */
    public function getInsurancePref()
    {
        return $this->insurancePref;
    }

    /**
     * Sets a new insurancePref
     *
     * Enables a preference to be indicated for insurance.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\InsurancePrefType[] $insurancePref
     * @return self
     */
    public function setInsurancePref(array $insurancePref)
    {
        $this->insurancePref = $insurancePref;
        return $this;
    }

    /**
     * Adds as seatingPref
     *
     * Enables a preference to be indicated for seating.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SeatingPrefType $seatingPref
     */
    public function addToSeatingPref(\Devlabs91\TravelgateNotify\Models\Ota\SeatingPrefType $seatingPref)
    {
        $this->seatingPref[] = $seatingPref;
        return $this;
    }

    /**
     * isset seatingPref
     *
     * Enables a preference to be indicated for seating.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeatingPref($index)
    {
        return isset($this->seatingPref[$index]);
    }

    /**
     * unset seatingPref
     *
     * Enables a preference to be indicated for seating.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeatingPref($index)
    {
        unset($this->seatingPref[$index]);
    }

    /**
     * Gets as seatingPref
     *
     * Enables a preference to be indicated for seating.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SeatingPrefType[]
     */
    public function getSeatingPref()
    {
        return $this->seatingPref;
    }

    /**
     * Sets a new seatingPref
     *
     * Enables a preference to be indicated for seating.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SeatingPrefType[] $seatingPref
     * @return self
     */
    public function setSeatingPref(array $seatingPref)
    {
        $this->seatingPref = $seatingPref;
        return $this;
    }

    /**
     * Adds as ticketDistribPref
     *
     * Enables a preference to be indicated for a method of ticket distribution.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TicketDistribPrefType $ticketDistribPref
     */
    public function addToTicketDistribPref(\Devlabs91\TravelgateNotify\Models\Ota\TicketDistribPrefType $ticketDistribPref)
    {
        $this->ticketDistribPref[] = $ticketDistribPref;
        return $this;
    }

    /**
     * isset ticketDistribPref
     *
     * Enables a preference to be indicated for a method of ticket distribution.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTicketDistribPref($index)
    {
        return isset($this->ticketDistribPref[$index]);
    }

    /**
     * unset ticketDistribPref
     *
     * Enables a preference to be indicated for a method of ticket distribution.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTicketDistribPref($index)
    {
        unset($this->ticketDistribPref[$index]);
    }

    /**
     * Gets as ticketDistribPref
     *
     * Enables a preference to be indicated for a method of ticket distribution.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TicketDistribPrefType[]
     */
    public function getTicketDistribPref()
    {
        return $this->ticketDistribPref;
    }

    /**
     * Sets a new ticketDistribPref
     *
     * Enables a preference to be indicated for a method of ticket distribution.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TicketDistribPrefType[] $ticketDistribPref
     * @return self
     */
    public function setTicketDistribPref(array $ticketDistribPref)
    {
        $this->ticketDistribPref = $ticketDistribPref;
        return $this;
    }

    /**
     * Adds as mediaEntertainPref
     *
     * Enables a preference to be indicated for media and entertainment.
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
     * Enables a preference to be indicated for media and entertainment.
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
     * Enables a preference to be indicated for media and entertainment.
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
     * Enables a preference to be indicated for media and entertainment.
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
     * Enables a preference to be indicated for media and entertainment.
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
     * Enables a preference to be indicated for pet information.
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
     * Enables a preference to be indicated for pet information.
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
     * Enables a preference to be indicated for pet information.
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
     * Enables a preference to be indicated for pet information.
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
     * Enables a preference to be indicated for pet information.
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
     * Enables a preference to be indicated for food and beverage.
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
     * Enables a preference to be indicated for food and beverage.
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
     * Enables a preference to be indicated for food and beverage.
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
     * Enables a preference to be indicated for food and beverage.
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
     * Enables a preference to be indicated for food and beverage.
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
     * Adds as loyaltyPref
     *
     * Enables a preference to be indicated for a loyalty program.
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
     * Enables a preference to be indicated for a loyalty program.
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
     * Enables a preference to be indicated for a loyalty program.
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
     * Enables a preference to be indicated for a loyalty program.
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
     * Enables a preference to be indicated for a loyalty program.
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
     * Adds as specRequestPref
     *
     * Enables a preference to be indicated for a special request.
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
     * Enables a preference to be indicated for a special request.
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
     * Enables a preference to be indicated for a special request.
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
     * Enables a preference to be indicated for a special request.
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
     * Enables a preference to be indicated for a special request.
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
     * Adds as relatedTravelerPref
     *
     * Enables a preference to be indicated for a related traveler.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RelatedTravelerPrefType $relatedTravelerPref
     */
    public function addToRelatedTravelerPref(\Devlabs91\TravelgateNotify\Models\Ota\RelatedTravelerPrefType $relatedTravelerPref)
    {
        $this->relatedTravelerPref[] = $relatedTravelerPref;
        return $this;
    }

    /**
     * isset relatedTravelerPref
     *
     * Enables a preference to be indicated for a related traveler.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedTravelerPref($index)
    {
        return isset($this->relatedTravelerPref[$index]);
    }

    /**
     * unset relatedTravelerPref
     *
     * Enables a preference to be indicated for a related traveler.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedTravelerPref($index)
    {
        unset($this->relatedTravelerPref[$index]);
    }

    /**
     * Gets as relatedTravelerPref
     *
     * Enables a preference to be indicated for a related traveler.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RelatedTravelerPrefType[]
     */
    public function getRelatedTravelerPref()
    {
        return $this->relatedTravelerPref;
    }

    /**
     * Sets a new relatedTravelerPref
     *
     * Enables a preference to be indicated for a related traveler.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RelatedTravelerPrefType[] $relatedTravelerPref
     * @return self
     */
    public function setRelatedTravelerPref(array $relatedTravelerPref)
    {
        $this->relatedTravelerPref = $relatedTravelerPref;
        return $this;
    }

    /**
     * Adds as contactPref
     *
     * The traveller's preferred means of being contacted.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CommonPrefType\ContactPrefAType $contactPref
     */
    public function addToContactPref(\Devlabs91\TravelgateNotify\Models\Ota\CommonPrefType\ContactPrefAType $contactPref)
    {
        $this->contactPref[] = $contactPref;
        return $this;
    }

    /**
     * isset contactPref
     *
     * The traveller's preferred means of being contacted.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactPref($index)
    {
        return isset($this->contactPref[$index]);
    }

    /**
     * unset contactPref
     *
     * The traveller's preferred means of being contacted.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactPref($index)
    {
        unset($this->contactPref[$index]);
    }

    /**
     * Gets as contactPref
     *
     * The traveller's preferred means of being contacted.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CommonPrefType\ContactPrefAType[]
     */
    public function getContactPref()
    {
        return $this->contactPref;
    }

    /**
     * Sets a new contactPref
     *
     * The traveller's preferred means of being contacted.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CommonPrefType\ContactPrefAType[] $contactPref
     * @return self
     */
    public function setContactPref(array $contactPref)
    {
        $this->contactPref = $contactPref;
        return $this;
    }

    /**
     * Gets as employeeLevelInfo
     *
     * Defines the category of the traveler and the purpose of the trip for which these preferences apply. Typically used for company profiles.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\EmployeeInfoType
     */
    public function getEmployeeLevelInfo()
    {
        return $this->employeeLevelInfo;
    }

    /**
     * Sets a new employeeLevelInfo
     *
     * Defines the category of the traveler and the purpose of the trip for which these preferences apply. Typically used for company profiles.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\EmployeeInfoType $employeeLevelInfo
     * @return self
     */
    public function setEmployeeLevelInfo(\Devlabs91\TravelgateNotify\Models\Ota\EmployeeInfoType $employeeLevelInfo)
    {
        $this->employeeLevelInfo = $employeeLevelInfo;
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

