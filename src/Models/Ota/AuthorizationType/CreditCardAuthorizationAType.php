<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AuthorizationType;

/**
 * Class representing CreditCardAuthorizationAType
 */
class CreditCardAuthorizationAType
{

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

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
     * Information describing the point of sale.
     *
     * @property string $sourceType
     */
    private $sourceType = null;

    /**
     * If true, the requester would like to apply extended payment conditions to this authorization.
     *
     * @property bool $extendedPaymentInd
     */
    private $extendedPaymentInd = null;

    /**
     * The number of equal amount, partial payments for the extended payment.
     *
     * @property int $extendedPaymentQuantity
     */
    private $extendedPaymentQuantity = null;

    /**
     * The frequency of extended payment installments.
     *
     * @property string $extendedPaymentFrequency
     */
    private $extendedPaymentFrequency = null;

    /**
     * This is the approval code received on the original authorization request. Only used in the case where the requested transaction is to reverse the authorization.
     *
     * @property string $authorizationCode
     */
    private $authorizationCode = null;

    /**
     * If true, indicates a request to reverse a credit authorization.
     *
     * @property bool $reversalIndicator
     */
    private $reversalIndicator = null;

    /**
     * When true, the customer has actually presented the credit card.
     *
     * @property bool $cardPresentInd
     */
    private $cardPresentInd = null;

    /**
     * The electronic commerce indicator required for some credit card authorizations, such as the Verified by Visa Process.
     *
     * @property string $eCommerceCode
     */
    private $eCommerceCode = null;

    /**
     * The authentication transaction identifier required for some credit card authorizations, such as the Verified by Visa Process.
     *
     * @property string $authTransactionID
     */
    private $authTransactionID = null;

    /**
     * The cardholder authentication verfication value required for some credit card authorization, such as the Verified by Visa Process.
     *
     * @property string $authVerificationValue
     */
    private $authVerificationValue = null;

    /**
     * Specifies the credit card information for which authorization is required.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType $creditCard
     */
    private $creditCard = null;

    /**
     * Identification of an authorization party (e.g., merchant, acquirer).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $iD
     */
    private $iD = [
        
    ];

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
     * Gets as sourceType
     *
     * Information describing the point of sale.
     *
     * @return string
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * Sets a new sourceType
     *
     * Information describing the point of sale.
     *
     * @param string $sourceType
     * @return self
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
        return $this;
    }

    /**
     * Gets as extendedPaymentInd
     *
     * If true, the requester would like to apply extended payment conditions to this authorization.
     *
     * @return bool
     */
    public function getExtendedPaymentInd()
    {
        return $this->extendedPaymentInd;
    }

    /**
     * Sets a new extendedPaymentInd
     *
     * If true, the requester would like to apply extended payment conditions to this authorization.
     *
     * @param bool $extendedPaymentInd
     * @return self
     */
    public function setExtendedPaymentInd($extendedPaymentInd)
    {
        $this->extendedPaymentInd = $extendedPaymentInd;
        return $this;
    }

    /**
     * Gets as extendedPaymentQuantity
     *
     * The number of equal amount, partial payments for the extended payment.
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
     * The number of equal amount, partial payments for the extended payment.
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
     * Gets as extendedPaymentFrequency
     *
     * The frequency of extended payment installments.
     *
     * @return string
     */
    public function getExtendedPaymentFrequency()
    {
        return $this->extendedPaymentFrequency;
    }

    /**
     * Sets a new extendedPaymentFrequency
     *
     * The frequency of extended payment installments.
     *
     * @param string $extendedPaymentFrequency
     * @return self
     */
    public function setExtendedPaymentFrequency($extendedPaymentFrequency)
    {
        $this->extendedPaymentFrequency = $extendedPaymentFrequency;
        return $this;
    }

    /**
     * Gets as authorizationCode
     *
     * This is the approval code received on the original authorization request. Only used in the case where the requested transaction is to reverse the authorization.
     *
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * Sets a new authorizationCode
     *
     * This is the approval code received on the original authorization request. Only used in the case where the requested transaction is to reverse the authorization.
     *
     * @param string $authorizationCode
     * @return self
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
        return $this;
    }

    /**
     * Gets as reversalIndicator
     *
     * If true, indicates a request to reverse a credit authorization.
     *
     * @return bool
     */
    public function getReversalIndicator()
    {
        return $this->reversalIndicator;
    }

    /**
     * Sets a new reversalIndicator
     *
     * If true, indicates a request to reverse a credit authorization.
     *
     * @param bool $reversalIndicator
     * @return self
     */
    public function setReversalIndicator($reversalIndicator)
    {
        $this->reversalIndicator = $reversalIndicator;
        return $this;
    }

    /**
     * Gets as cardPresentInd
     *
     * When true, the customer has actually presented the credit card.
     *
     * @return bool
     */
    public function getCardPresentInd()
    {
        return $this->cardPresentInd;
    }

    /**
     * Sets a new cardPresentInd
     *
     * When true, the customer has actually presented the credit card.
     *
     * @param bool $cardPresentInd
     * @return self
     */
    public function setCardPresentInd($cardPresentInd)
    {
        $this->cardPresentInd = $cardPresentInd;
        return $this;
    }

    /**
     * Gets as eCommerceCode
     *
     * The electronic commerce indicator required for some credit card authorizations, such as the Verified by Visa Process.
     *
     * @return string
     */
    public function getECommerceCode()
    {
        return $this->eCommerceCode;
    }

    /**
     * Sets a new eCommerceCode
     *
     * The electronic commerce indicator required for some credit card authorizations, such as the Verified by Visa Process.
     *
     * @param string $eCommerceCode
     * @return self
     */
    public function setECommerceCode($eCommerceCode)
    {
        $this->eCommerceCode = $eCommerceCode;
        return $this;
    }

    /**
     * Gets as authTransactionID
     *
     * The authentication transaction identifier required for some credit card authorizations, such as the Verified by Visa Process.
     *
     * @return string
     */
    public function getAuthTransactionID()
    {
        return $this->authTransactionID;
    }

    /**
     * Sets a new authTransactionID
     *
     * The authentication transaction identifier required for some credit card authorizations, such as the Verified by Visa Process.
     *
     * @param string $authTransactionID
     * @return self
     */
    public function setAuthTransactionID($authTransactionID)
    {
        $this->authTransactionID = $authTransactionID;
        return $this;
    }

    /**
     * Gets as authVerificationValue
     *
     * The cardholder authentication verfication value required for some credit card authorization, such as the Verified by Visa Process.
     *
     * @return string
     */
    public function getAuthVerificationValue()
    {
        return $this->authVerificationValue;
    }

    /**
     * Sets a new authVerificationValue
     *
     * The cardholder authentication verfication value required for some credit card authorization, such as the Verified by Visa Process.
     *
     * @param string $authVerificationValue
     * @return self
     */
    public function setAuthVerificationValue($authVerificationValue)
    {
        $this->authVerificationValue = $authVerificationValue;
        return $this;
    }

    /**
     * Gets as creditCard
     *
     * Specifies the credit card information for which authorization is required.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Sets a new creditCard
     *
     * Specifies the credit card information for which authorization is required.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType $creditCard
     * @return self
     */
    public function setCreditCard(\Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType $creditCard)
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * Adds as iD
     *
     * Identification of an authorization party (e.g., merchant, acquirer).
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $iD
     */
    public function addToID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $iD)
    {
        $this->iD[] = $iD;
        return $this;
    }

    /**
     * isset iD
     *
     * Identification of an authorization party (e.g., merchant, acquirer).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetID($index)
    {
        return isset($this->iD[$index]);
    }

    /**
     * unset iD
     *
     * Identification of an authorization party (e.g., merchant, acquirer).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetID($index)
    {
        unset($this->iD[$index]);
    }

    /**
     * Gets as iD
     *
     * Identification of an authorization party (e.g., merchant, acquirer).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[]
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * Identification of an authorization party (e.g., merchant, acquirer).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $iD
     * @return self
     */
    public function setID(array $iD)
    {
        $this->iD = $iD;
        return $this;
    }


}

