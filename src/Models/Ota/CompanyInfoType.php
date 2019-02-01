<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing CompanyInfoType
 *
 * Detailed information about a company.
 * XSD Type: CompanyInfoType
 */
class CompanyInfoType
{

    /**
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Detailed name information for the company.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType[] $companyName
     */
    private $companyName = [
        
    ];

    /**
     * Detailed information on an address for the company.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\AddressInfoAType[] $addressInfo
     */
    private $addressInfo = [
        
    ];

    /**
     * Information on a telephone number for the company.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\TelephoneInfoAType[] $telephoneInfo
     */
    private $telephoneInfo = [
        
    ];

    /**
     * Information on an email address for the company.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\EmailAType[] $email
     */
    private $email = [
        
    ];

    /**
     * Information on a URL for the company.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\URLType[] $uRL
     */
    private $uRL = [
        
    ];

    /**
     * A jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AddressType[] $businessLocale
     */
    private $businessLocale = [
        
    ];

    /**
     * Method of providing funds for travel by the company.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\PaymentFormAType[] $paymentForm
     */
    private $paymentForm = [
        
    ];

    /**
     * Information on a contact person for the company.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType[] $contactPerson
     */
    private $contactPerson = [
        
    ];

    /**
     * Information on the organization responsible for arranging travel for the company.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TravelArrangerType[] $travelArranger
     */
    private $travelArranger = [
        
    ];

    /**
     * Company's loyalty program information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyProgramType[] $loyaltyProgram
     */
    private $loyaltyProgram = [
        
    ];

    /**
     * Trip purpose codes used by this company.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\TripPurposeAType[] $tripPurpose
     */
    private $tripPurpose = [
        
    ];

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
     * Gets as decimalPlaces
     *
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param int $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }

    /**
     * Adds as companyName
     *
     * Detailed name information for the company.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $companyName
     */
    public function addToCompanyName(\Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $companyName)
    {
        $this->companyName[] = $companyName;
        return $this;
    }

    /**
     * isset companyName
     *
     * Detailed name information for the company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompanyName($index)
    {
        return isset($this->companyName[$index]);
    }

    /**
     * unset companyName
     *
     * Detailed name information for the company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompanyName($index)
    {
        unset($this->companyName[$index]);
    }

    /**
     * Gets as companyName
     *
     * Detailed name information for the company.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType[]
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Detailed name information for the company.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType[] $companyName
     * @return self
     */
    public function setCompanyName(array $companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Adds as addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\AddressInfoAType $addressInfo
     */
    public function addToAddressInfo(\Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\AddressInfoAType $addressInfo)
    {
        $this->addressInfo[] = $addressInfo;
        return $this;
    }

    /**
     * isset addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressInfo($index)
    {
        return isset($this->addressInfo[$index]);
    }

    /**
     * unset addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressInfo($index)
    {
        unset($this->addressInfo[$index]);
    }

    /**
     * Gets as addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\AddressInfoAType[]
     */
    public function getAddressInfo()
    {
        return $this->addressInfo;
    }

    /**
     * Sets a new addressInfo
     *
     * Detailed information on an address for the company.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\AddressInfoAType[] $addressInfo
     * @return self
     */
    public function setAddressInfo(array $addressInfo)
    {
        $this->addressInfo = $addressInfo;
        return $this;
    }

    /**
     * Adds as telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\TelephoneInfoAType $telephoneInfo
     */
    public function addToTelephoneInfo(\Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\TelephoneInfoAType $telephoneInfo)
    {
        $this->telephoneInfo[] = $telephoneInfo;
        return $this;
    }

    /**
     * isset telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelephoneInfo($index)
    {
        return isset($this->telephoneInfo[$index]);
    }

    /**
     * unset telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelephoneInfo($index)
    {
        unset($this->telephoneInfo[$index]);
    }

    /**
     * Gets as telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\TelephoneInfoAType[]
     */
    public function getTelephoneInfo()
    {
        return $this->telephoneInfo;
    }

    /**
     * Sets a new telephoneInfo
     *
     * Information on a telephone number for the company.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\TelephoneInfoAType[] $telephoneInfo
     * @return self
     */
    public function setTelephoneInfo(array $telephoneInfo)
    {
        $this->telephoneInfo = $telephoneInfo;
        return $this;
    }

    /**
     * Adds as email
     *
     * Information on an email address for the company.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\EmailAType $email
     */
    public function addToEmail(\Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\EmailAType $email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * Information on an email address for the company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmail($index)
    {
        return isset($this->email[$index]);
    }

    /**
     * unset email
     *
     * Information on an email address for the company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmail($index)
    {
        unset($this->email[$index]);
    }

    /**
     * Gets as email
     *
     * Information on an email address for the company.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\EmailAType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Information on an email address for the company.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\EmailAType[] $email
     * @return self
     */
    public function setEmail(array $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Adds as uRL
     *
     * Information on a URL for the company.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\URLType $uRL
     */
    public function addToURL(\Devlabs91\TravelgateNotify\Models\Ota\URLType $uRL)
    {
        $this->uRL[] = $uRL;
        return $this;
    }

    /**
     * isset uRL
     *
     * Information on a URL for the company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetURL($index)
    {
        return isset($this->uRL[$index]);
    }

    /**
     * unset uRL
     *
     * Information on a URL for the company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetURL($index)
    {
        unset($this->uRL[$index]);
    }

    /**
     * Gets as uRL
     *
     * Information on a URL for the company.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\URLType[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * Information on a URL for the company.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\URLType[] $uRL
     * @return self
     */
    public function setURL(array $uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Adds as businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country).
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AddressType $businessLocale
     */
    public function addToBusinessLocale(\Devlabs91\TravelgateNotify\Models\Ota\AddressType $businessLocale)
    {
        $this->businessLocale[] = $businessLocale;
        return $this;
    }

    /**
     * isset businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBusinessLocale($index)
    {
        return isset($this->businessLocale[$index]);
    }

    /**
     * unset businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBusinessLocale($index)
    {
        unset($this->businessLocale[$index]);
    }

    /**
     * Gets as businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AddressType[]
     */
    public function getBusinessLocale()
    {
        return $this->businessLocale;
    }

    /**
     * Sets a new businessLocale
     *
     * A jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AddressType[] $businessLocale
     * @return self
     */
    public function setBusinessLocale(array $businessLocale)
    {
        $this->businessLocale = $businessLocale;
        return $this;
    }

    /**
     * Adds as paymentForm
     *
     * Method of providing funds for travel by the company.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\PaymentFormAType $paymentForm
     */
    public function addToPaymentForm(\Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\PaymentFormAType $paymentForm)
    {
        $this->paymentForm[] = $paymentForm;
        return $this;
    }

    /**
     * isset paymentForm
     *
     * Method of providing funds for travel by the company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentForm($index)
    {
        return isset($this->paymentForm[$index]);
    }

    /**
     * unset paymentForm
     *
     * Method of providing funds for travel by the company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentForm($index)
    {
        unset($this->paymentForm[$index]);
    }

    /**
     * Gets as paymentForm
     *
     * Method of providing funds for travel by the company.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\PaymentFormAType[]
     */
    public function getPaymentForm()
    {
        return $this->paymentForm;
    }

    /**
     * Sets a new paymentForm
     *
     * Method of providing funds for travel by the company.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\PaymentFormAType[] $paymentForm
     * @return self
     */
    public function setPaymentForm(array $paymentForm)
    {
        $this->paymentForm = $paymentForm;
        return $this;
    }

    /**
     * Adds as contactPerson
     *
     * Information on a contact person for the company.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType $contactPerson
     */
    public function addToContactPerson(\Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType $contactPerson)
    {
        $this->contactPerson[] = $contactPerson;
        return $this;
    }

    /**
     * isset contactPerson
     *
     * Information on a contact person for the company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactPerson($index)
    {
        return isset($this->contactPerson[$index]);
    }

    /**
     * unset contactPerson
     *
     * Information on a contact person for the company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactPerson($index)
    {
        unset($this->contactPerson[$index]);
    }

    /**
     * Gets as contactPerson
     *
     * Information on a contact person for the company.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType[]
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Sets a new contactPerson
     *
     * Information on a contact person for the company.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType[] $contactPerson
     * @return self
     */
    public function setContactPerson(array $contactPerson)
    {
        $this->contactPerson = $contactPerson;
        return $this;
    }

    /**
     * Adds as travelArranger
     *
     * Information on the organization responsible for arranging travel for the company.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TravelArrangerType $travelArranger
     */
    public function addToTravelArranger(\Devlabs91\TravelgateNotify\Models\Ota\TravelArrangerType $travelArranger)
    {
        $this->travelArranger[] = $travelArranger;
        return $this;
    }

    /**
     * isset travelArranger
     *
     * Information on the organization responsible for arranging travel for the company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTravelArranger($index)
    {
        return isset($this->travelArranger[$index]);
    }

    /**
     * unset travelArranger
     *
     * Information on the organization responsible for arranging travel for the company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTravelArranger($index)
    {
        unset($this->travelArranger[$index]);
    }

    /**
     * Gets as travelArranger
     *
     * Information on the organization responsible for arranging travel for the company.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TravelArrangerType[]
     */
    public function getTravelArranger()
    {
        return $this->travelArranger;
    }

    /**
     * Sets a new travelArranger
     *
     * Information on the organization responsible for arranging travel for the company.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TravelArrangerType[] $travelArranger
     * @return self
     */
    public function setTravelArranger(array $travelArranger)
    {
        $this->travelArranger = $travelArranger;
        return $this;
    }

    /**
     * Adds as loyaltyProgram
     *
     * Company's loyalty program information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyProgramType $loyaltyProgram
     */
    public function addToLoyaltyProgram(\Devlabs91\TravelgateNotify\Models\Ota\LoyaltyProgramType $loyaltyProgram)
    {
        $this->loyaltyProgram[] = $loyaltyProgram;
        return $this;
    }

    /**
     * isset loyaltyProgram
     *
     * Company's loyalty program information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyaltyProgram($index)
    {
        return isset($this->loyaltyProgram[$index]);
    }

    /**
     * unset loyaltyProgram
     *
     * Company's loyalty program information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyaltyProgram($index)
    {
        unset($this->loyaltyProgram[$index]);
    }

    /**
     * Gets as loyaltyProgram
     *
     * Company's loyalty program information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyProgramType[]
     */
    public function getLoyaltyProgram()
    {
        return $this->loyaltyProgram;
    }

    /**
     * Sets a new loyaltyProgram
     *
     * Company's loyalty program information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\LoyaltyProgramType[] $loyaltyProgram
     * @return self
     */
    public function setLoyaltyProgram(array $loyaltyProgram)
    {
        $this->loyaltyProgram = $loyaltyProgram;
        return $this;
    }

    /**
     * Adds as tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\TripPurposeAType $tripPurpose
     */
    public function addToTripPurpose(\Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\TripPurposeAType $tripPurpose)
    {
        $this->tripPurpose[] = $tripPurpose;
        return $this;
    }

    /**
     * isset tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTripPurpose($index)
    {
        return isset($this->tripPurpose[$index]);
    }

    /**
     * unset tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTripPurpose($index)
    {
        unset($this->tripPurpose[$index]);
    }

    /**
     * Gets as tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\TripPurposeAType[]
     */
    public function getTripPurpose()
    {
        return $this->tripPurpose;
    }

    /**
     * Sets a new tripPurpose
     *
     * Trip purpose codes used by this company.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyInfoType\TripPurposeAType[] $tripPurpose
     * @return self
     */
    public function setTripPurpose(array $tripPurpose)
    {
        $this->tripPurpose = $tripPurpose;
        return $this;
    }


}

