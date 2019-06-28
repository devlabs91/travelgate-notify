<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing PaymentCardType
 *
 * Identification about a specific credit card.
 * XSD Type: PaymentCardType
 */
class PaymentCardType
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
     * Indicates the type of magnetic striped card. Refer to OpenTravel Code List Card Type (CDT).
     *
     * @property string $cardType
     */
    private $cardType = null;

    /**
     * The 2 character code of the credit card issuer.
     *
     * @property string $cardCode
     */
    private $cardCode = null;

    /**
     * Credit card number embossed on the card.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\EncryptionTokenAType $cardNumber
     */
    private $cardNumber = null;

    /**
     * Verification digits printed on the card following the embossed number. This may also accommodate the customer identification/batch number (CID), card verification value (CVV2 ), card validation code number (CVC2) on credit card.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\EncryptionTokenAType $cardNumber
     */
    private $seriesCode = null;

    /**
     * Indicates the starting date.
     *
     * @property string $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @property string $expireDate
     */
    private $expireDate = null;

    /**
     * May be used to send a concealed credit card number (e.g., xxxxxxxxxxxx9922).
     *
     * @property string $maskedCardNumber
     */
    private $maskedCardNumber = null;

    /**
     * Provides a reference pointer that links the payment card to the payment card holder.
     *
     * @property string $cardHolderRPH
     */
    private $cardHolderRPH = null;

    /**
     * When true, the credit card company is requested to delay the date on which the amount of this transaction is applied to the customer's account.
     *
     * @property bool $extendPaymentIndicator
     */
    private $extendPaymentIndicator = null;

    /**
     * Code for the country where the credit card was issued.
     *
     * @property string $countryOfIssue
     */
    private $countryOfIssue = null;

    /**
     * A code used to specifiy the installment payment plan or number of payment installments.
     *
     * @property int $extendedPaymentQuantity
     */
    private $extendedPaymentQuantity = null;

    /**
     * When true, the cardholder signature is on file.
     *
     * @property bool $signatureOnFileIndicator
     */
    private $signatureOnFileIndicator = null;

    /**
     * Reference to the company sponsor for this particular card (e.g. a Universal Airline Travel Plan (UATP) card or any loyalty scheme sponsored card).
     *
     * @property string $companyCardReference
     */
    private $companyCardReference = null;

    /**
     * A remark associated with this payment card.
     *
     * @property string $remark
     */
    private $remark = null;

    /**
     * Database key necessary to retrieve the full credit card (compliant with PCI DSS standards).
     *
     * @property string $encryptionKey
     */
    private $encryptionKey = null;

    /**
     * Name of the card holder.
     *
     * @property string $cardHolderName
     */
    private $cardHolderName = null;

    /**
     * Issuer of the card.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\CardIssuerNameAType $cardIssuerName
     */
    private $cardIssuerName = null;

    /**
     * Card holder's address used for additional authorization checks.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AddressType $address
     */
    private $address = null;

    /**
     * Card holder's telephone number used for additional authorization checks.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\TelephoneAType[] $telephone
     */
    private $telephone = [
        
    ];

    /**
     * Card holder's email address(es) used for additional authorization checks.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\EmailType[] $email
     */
    private $email = [
        
    ];

    /**
     * Customer loyalty information used for additional authorization checks.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\CustLoyaltyAType[] $custLoyalty
     */
    private $custLoyalty = [
        
    ];

    /**
     * Indicates if the signature is authorized as a form of guarantee. In some countries, the customer can sign the payment card slip as a form of guarantee.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\SignatureOnFileAType $signatureOnFile
     */
    private $signatureOnFile = null;

    /**
     * Card Magnetic Stripe Data as defined by ISO 7813 for banking cards.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\MagneticStripeAType $magneticStripe
     */
    private $magneticStripe = null;

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
     * Gets as cardType
     *
     * Indicates the type of magnetic striped card. Refer to OpenTravel Code List Card Type (CDT).
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Sets a new cardType
     *
     * Indicates the type of magnetic striped card. Refer to OpenTravel Code List Card Type (CDT).
     *
     * @param string $cardType
     * @return self
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
        return $this;
    }

    /**
     * Gets as cardCode
     *
     * The 2 character code of the credit card issuer.
     *
     * @return string
     */
    public function getCardCode()
    {
        return $this->cardCode;
    }

    /**
     * Sets a new cardCode
     *
     * The 2 character code of the credit card issuer.
     *
     * @param string $cardCode
     * @return self
     */
    public function setCardCode($cardCode)
    {
        $this->cardCode = $cardCode;
        return $this;
    }

    /**
     * Gets as cardNumber
     *
     * Credit card number embossed on the card.
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Sets a new cardNumber
     *
     * Credit card number embossed on the card.
     *
     * @param string $cardNumber
     * @return self
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * Gets as seriesCode
     *
     * Verification digits printed on the card following the embossed number. This may also accommodate the customer identification/batch number (CID), card verification value (CVV2 ), card validation code number (CVC2) on credit card.
     *
     * @return string
     */
    public function getSeriesCode()
    {
        return $this->seriesCode;
    }

    /**
     * Sets a new seriesCode
     *
     * Verification digits printed on the card following the embossed number. This may also accommodate the customer identification/batch number (CID), card verification value (CVV2 ), card validation code number (CVC2) on credit card.
     *
     * @param string $seriesCode
     * @return self
     */
    public function setSeriesCode($seriesCode)
    {
        $this->seriesCode = $seriesCode;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return string
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param string $effectiveDate
     * @return self
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return string
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param string $expireDate
     * @return self
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as maskedCardNumber
     *
     * May be used to send a concealed credit card number (e.g., xxxxxxxxxxxx9922).
     *
     * @return string
     */
    public function getMaskedCardNumber()
    {
        return $this->maskedCardNumber;
    }

    /**
     * Sets a new maskedCardNumber
     *
     * May be used to send a concealed credit card number (e.g., xxxxxxxxxxxx9922).
     *
     * @param string $maskedCardNumber
     * @return self
     */
    public function setMaskedCardNumber($maskedCardNumber)
    {
        $this->maskedCardNumber = $maskedCardNumber;
        return $this;
    }

    /**
     * Gets as cardHolderRPH
     *
     * Provides a reference pointer that links the payment card to the payment card holder.
     *
     * @return string
     */
    public function getCardHolderRPH()
    {
        return $this->cardHolderRPH;
    }

    /**
     * Sets a new cardHolderRPH
     *
     * Provides a reference pointer that links the payment card to the payment card holder.
     *
     * @param string $cardHolderRPH
     * @return self
     */
    public function setCardHolderRPH($cardHolderRPH)
    {
        $this->cardHolderRPH = $cardHolderRPH;
        return $this;
    }

    /**
     * Gets as extendPaymentIndicator
     *
     * When true, the credit card company is requested to delay the date on which the amount of this transaction is applied to the customer's account.
     *
     * @return bool
     */
    public function getExtendPaymentIndicator()
    {
        return $this->extendPaymentIndicator;
    }

    /**
     * Sets a new extendPaymentIndicator
     *
     * When true, the credit card company is requested to delay the date on which the amount of this transaction is applied to the customer's account.
     *
     * @param bool $extendPaymentIndicator
     * @return self
     */
    public function setExtendPaymentIndicator($extendPaymentIndicator)
    {
        $this->extendPaymentIndicator = $extendPaymentIndicator;
        return $this;
    }

    /**
     * Gets as countryOfIssue
     *
     * Code for the country where the credit card was issued.
     *
     * @return string
     */
    public function getCountryOfIssue()
    {
        return $this->countryOfIssue;
    }

    /**
     * Sets a new countryOfIssue
     *
     * Code for the country where the credit card was issued.
     *
     * @param string $countryOfIssue
     * @return self
     */
    public function setCountryOfIssue($countryOfIssue)
    {
        $this->countryOfIssue = $countryOfIssue;
        return $this;
    }

    /**
     * Gets as extendedPaymentQuantity
     *
     * A code used to specifiy the installment payment plan or number of payment installments.
     *
     * @return int
     */
    public function getExtendedPaymentQuantity()
    {
        return $this->extendedPaymentQuantity;
    }

    /**
     * Sets a new extendedPaymentQuantity
     *
     * A code used to specifiy the installment payment plan or number of payment installments.
     *
     * @param int $extendedPaymentQuantity
     * @return self
     */
    public function setExtendedPaymentQuantity($extendedPaymentQuantity)
    {
        $this->extendedPaymentQuantity = $extendedPaymentQuantity;
        return $this;
    }

    /**
     * Gets as signatureOnFileIndicator
     *
     * When true, the cardholder signature is on file.
     *
     * @return bool
     */
    public function getSignatureOnFileIndicator()
    {
        return $this->signatureOnFileIndicator;
    }

    /**
     * Sets a new signatureOnFileIndicator
     *
     * When true, the cardholder signature is on file.
     *
     * @param bool $signatureOnFileIndicator
     * @return self
     */
    public function setSignatureOnFileIndicator($signatureOnFileIndicator)
    {
        $this->signatureOnFileIndicator = $signatureOnFileIndicator;
        return $this;
    }

    /**
     * Gets as companyCardReference
     *
     * Reference to the company sponsor for this particular card (e.g. a Universal Airline Travel Plan (UATP) card or any loyalty scheme sponsored card).
     *
     * @return string
     */
    public function getCompanyCardReference()
    {
        return $this->companyCardReference;
    }

    /**
     * Sets a new companyCardReference
     *
     * Reference to the company sponsor for this particular card (e.g. a Universal Airline Travel Plan (UATP) card or any loyalty scheme sponsored card).
     *
     * @param string $companyCardReference
     * @return self
     */
    public function setCompanyCardReference($companyCardReference)
    {
        $this->companyCardReference = $companyCardReference;
        return $this;
    }

    /**
     * Gets as remark
     *
     * A remark associated with this payment card.
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
     * A remark associated with this payment card.
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
     * Gets as encryptionKey
     *
     * Database key necessary to retrieve the full credit card (compliant with PCI DSS standards).
     *
     * @return string
     */
    public function getEncryptionKey()
    {
        return $this->encryptionKey;
    }

    /**
     * Sets a new encryptionKey
     *
     * Database key necessary to retrieve the full credit card (compliant with PCI DSS standards).
     *
     * @param string $encryptionKey
     * @return self
     */
    public function setEncryptionKey($encryptionKey)
    {
        $this->encryptionKey = $encryptionKey;
        return $this;
    }

    /**
     * Gets as cardHolderName
     *
     * Name of the card holder.
     *
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    /**
     * Sets a new cardHolderName
     *
     * Name of the card holder.
     *
     * @param string $cardHolderName
     * @return self
     */
    public function setCardHolderName($cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;
        return $this;
    }

    /**
     * Gets as cardIssuerName
     *
     * Issuer of the card.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\CardIssuerNameAType
     */
    public function getCardIssuerName()
    {
        return $this->cardIssuerName;
    }

    /**
     * Sets a new cardIssuerName
     *
     * Issuer of the card.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\CardIssuerNameAType $cardIssuerName
     * @return self
     */
    public function setCardIssuerName(\Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\CardIssuerNameAType $cardIssuerName)
    {
        $this->cardIssuerName = $cardIssuerName;
        return $this;
    }

    /**
     * Gets as address
     *
     * Card holder's address used for additional authorization checks.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Card holder's address used for additional authorization checks.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AddressType $address
     * @return self
     */
    public function setAddress(\Devlabs91\TravelgateNotify\Models\Ota\AddressType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as telephone
     *
     * Card holder's telephone number used for additional authorization checks.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\TelephoneAType $telephone
     */
    public function addToTelephone(\Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\TelephoneAType $telephone)
    {
        $this->telephone[] = $telephone;
        return $this;
    }

    /**
     * isset telephone
     *
     * Card holder's telephone number used for additional authorization checks.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelephone($index)
    {
        return isset($this->telephone[$index]);
    }

    /**
     * unset telephone
     *
     * Card holder's telephone number used for additional authorization checks.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelephone($index)
    {
        unset($this->telephone[$index]);
    }

    /**
     * Gets as telephone
     *
     * Card holder's telephone number used for additional authorization checks.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Card holder's telephone number used for additional authorization checks.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\TelephoneAType[] $telephone
     * @return self
     */
    public function setTelephone(array $telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Adds as email
     *
     * Card holder's email address(es) used for additional authorization checks.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\EmailType $email
     */
    public function addToEmail(\Devlabs91\TravelgateNotify\Models\Ota\EmailType $email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * Card holder's email address(es) used for additional authorization checks.
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
     * Card holder's email address(es) used for additional authorization checks.
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
     * Card holder's email address(es) used for additional authorization checks.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\EmailType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Card holder's email address(es) used for additional authorization checks.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\EmailType[] $email
     * @return self
     */
    public function setEmail(array $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Adds as custLoyalty
     *
     * Customer loyalty information used for additional authorization checks.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\CustLoyaltyAType $custLoyalty
     */
    public function addToCustLoyalty(\Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\CustLoyaltyAType $custLoyalty)
    {
        $this->custLoyalty[] = $custLoyalty;
        return $this;
    }

    /**
     * isset custLoyalty
     *
     * Customer loyalty information used for additional authorization checks.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustLoyalty($index)
    {
        return isset($this->custLoyalty[$index]);
    }

    /**
     * unset custLoyalty
     *
     * Customer loyalty information used for additional authorization checks.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustLoyalty($index)
    {
        unset($this->custLoyalty[$index]);
    }

    /**
     * Gets as custLoyalty
     *
     * Customer loyalty information used for additional authorization checks.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\CustLoyaltyAType[]
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Customer loyalty information used for additional authorization checks.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\CustLoyaltyAType[] $custLoyalty
     * @return self
     */
    public function setCustLoyalty(array $custLoyalty)
    {
        $this->custLoyalty = $custLoyalty;
        return $this;
    }

    /**
     * Gets as signatureOnFile
     *
     * Indicates if the signature is authorized as a form of guarantee. In some countries, the customer can sign the payment card slip as a form of guarantee.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\SignatureOnFileAType
     */
    public function getSignatureOnFile()
    {
        return $this->signatureOnFile;
    }

    /**
     * Sets a new signatureOnFile
     *
     * Indicates if the signature is authorized as a form of guarantee. In some countries, the customer can sign the payment card slip as a form of guarantee.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\SignatureOnFileAType $signatureOnFile
     * @return self
     */
    public function setSignatureOnFile(\Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\SignatureOnFileAType $signatureOnFile)
    {
        $this->signatureOnFile = $signatureOnFile;
        return $this;
    }

    /**
     * Gets as magneticStripe
     *
     * Card Magnetic Stripe Data as defined by ISO 7813 for banking cards.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\MagneticStripeAType
     */
    public function getMagneticStripe()
    {
        return $this->magneticStripe;
    }

    /**
     * Sets a new magneticStripe
     *
     * Card Magnetic Stripe Data as defined by ISO 7813 for banking cards.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\MagneticStripeAType $magneticStripe
     * @return self
     */
    public function setMagneticStripe(\Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType\MagneticStripeAType $magneticStripe)
    {
        $this->magneticStripe = $magneticStripe;
        return $this;
    }


}

