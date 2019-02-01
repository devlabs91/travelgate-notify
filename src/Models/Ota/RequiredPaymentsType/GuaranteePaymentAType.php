<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType;

/**
 * Class representing GuaranteePaymentAType
 */
class GuaranteePaymentAType
{

    /**
     * An enumerated type defining the type of action taken when the deadline has been exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @property string $retributionType
     */
    private $retributionType = null;

    /**
     * This defines the form of payment. Recommended usage of this is with the Payment Type in OpenTravel Code List, this datatype will be updated in the future. In order to maintain forward compatability a change is not being made in this publication. This will be corrected in a future version, when a major update is released.
     *
     * @property string $paymentCode
     */
    private $paymentCode = null;

    /**
     * Used to specify the type of information being sent (i.e., RequiredPayment, GuaranteePolicy, AcceptedPaymentForms).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Guarantee Code
     *
     * @property string $guaranteeCode
     */
    private $guaranteeCode = null;

    /**
     * GuaranteeType: GuaranteeType An enumerated type defining the guarantee to be applied to this reservation.
     *
     * @property string $guaranteeType
     */
    private $guaranteeType = null;

    /**
     * The room will held up until this time without a guarantee.
     *
     * @property \DateTime $holdTime
     */
    private $holdTime = null;

    /**
     * When true, apply to Monday.
     *
     * @property bool $mon
     */
    private $mon = null;

    /**
     * When true, apply to Tuesday.
     *
     * @property bool $tue
     */
    private $tue = null;

    /**
     * When true, apply to Wednesday.
     *
     * @property bool $weds
     */
    private $weds = null;

    /**
     * When true, apply to Thursday.
     *
     * @property bool $thur
     */
    private $thur = null;

    /**
     * When true, apply to Friday.
     *
     * @property bool $fri
     */
    private $fri = null;

    /**
     * When true, apply to Saturday.
     *
     * @property bool $sat
     */
    private $sat = null;

    /**
     * When true, apply to Sunday.
     *
     * @property bool $sun
     */
    private $sun = null;

    /**
     * The starting value of the time span.
     *
     * @property \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @property \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \DateTime $end
     */
    private $end = null;

    /**
     * If true, no credit cardholder information is required for guarantee/deposit.
     *
     * @property bool $noCardHolderInfoReqInd
     */
    private $noCardHolderInfoReqInd = null;

    /**
     * If true, the credit cardholder name is required for guarantee/deposit.
     *
     * @property bool $nameInd
     */
    private $nameInd = null;

    /**
     * If true, the credit cardholder address is required for guarantee/deposit.
     *
     * @property bool $addressInd
     */
    private $addressInd = null;

    /**
     * If true, the credit cardholder phone number is required for guarantee/deposit.
     *
     * @property bool $phoneInd
     */
    private $phoneInd = null;

    /**
     * If true, the Interbank Card Association number is required for guarantee/deposit.
     *
     * @property bool $interbankNbrInd
     */
    private $interbankNbrInd = null;

    /**
     * A system specific room type to which this guarantee payment information applies.
     *
     * @property string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * To specify the source of the rate of exchange for a currency code.
     *
     * @property string $infoSource
     */
    private $infoSource = null;

    /**
     * When true, indicates that any prepayment for the reservation is non refundable, therefore a 100% penalty on the prepayment is applied, irrespective of deadline.
     *
     * @property bool $nonRefundableIndicator
     */
    private $nonRefundableIndicator = null;

    /**
     * Used to specify the type of payment policy.
     *
     * @property string $policyCode
     */
    private $policyCode = null;

    /**
     * Collection of forms of payment accepted for payment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType[] $acceptedPayments
     */
    private $acceptedPayments = null;

    /**
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\AmountPercentAType $amountPercent
     */
    private $amountPercent = null;

    /**
     * Payment deadline, absolute or relative.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\DeadlineAType[] $deadline
     */
    private $deadline = [
        
    ];

    /**
     * Text description of the Payment in a given language.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * The address to which a deposit may be sent.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\AddressAType[] $address
     */
    private $address = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as retributionType
     *
     * An enumerated type defining the type of action taken when the deadline has been exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @return string
     */
    public function getRetributionType()
    {
        return $this->retributionType;
    }

    /**
     * Sets a new retributionType
     *
     * An enumerated type defining the type of action taken when the deadline has been exceeded. Valid values: Res Automatically Cancelled, Res No Longer Guaranteed.
     *
     * @param string $retributionType
     * @return self
     */
    public function setRetributionType($retributionType)
    {
        $this->retributionType = $retributionType;
        return $this;
    }

    /**
     * Gets as paymentCode
     *
     * This defines the form of payment. Recommended usage of this is with the Payment Type in OpenTravel Code List, this datatype will be updated in the future. In order to maintain forward compatability a change is not being made in this publication. This will be corrected in a future version, when a major update is released.
     *
     * @return string
     */
    public function getPaymentCode()
    {
        return $this->paymentCode;
    }

    /**
     * Sets a new paymentCode
     *
     * This defines the form of payment. Recommended usage of this is with the Payment Type in OpenTravel Code List, this datatype will be updated in the future. In order to maintain forward compatability a change is not being made in this publication. This will be corrected in a future version, when a major update is released.
     *
     * @param string $paymentCode
     * @return self
     */
    public function setPaymentCode($paymentCode)
    {
        $this->paymentCode = $paymentCode;
        return $this;
    }

    /**
     * Gets as type
     *
     * Used to specify the type of information being sent (i.e., RequiredPayment, GuaranteePolicy, AcceptedPaymentForms).
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
     * Used to specify the type of information being sent (i.e., RequiredPayment, GuaranteePolicy, AcceptedPaymentForms).
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
     * Gets as guaranteeCode
     *
     * Guarantee Code
     *
     * @return string
     */
    public function getGuaranteeCode()
    {
        return $this->guaranteeCode;
    }

    /**
     * Sets a new guaranteeCode
     *
     * Guarantee Code
     *
     * @param string $guaranteeCode
     * @return self
     */
    public function setGuaranteeCode($guaranteeCode)
    {
        $this->guaranteeCode = $guaranteeCode;
        return $this;
    }

    /**
     * Gets as guaranteeType
     *
     * GuaranteeType: GuaranteeType An enumerated type defining the guarantee to be applied to this reservation.
     *
     * @return string
     */
    public function getGuaranteeType()
    {
        return $this->guaranteeType;
    }

    /**
     * Sets a new guaranteeType
     *
     * GuaranteeType: GuaranteeType An enumerated type defining the guarantee to be applied to this reservation.
     *
     * @param string $guaranteeType
     * @return self
     */
    public function setGuaranteeType($guaranteeType)
    {
        $this->guaranteeType = $guaranteeType;
        return $this;
    }

    /**
     * Gets as holdTime
     *
     * The room will held up until this time without a guarantee.
     *
     * @return \DateTime
     */
    public function getHoldTime()
    {
        return $this->holdTime;
    }

    /**
     * Sets a new holdTime
     *
     * The room will held up until this time without a guarantee.
     *
     * @param \DateTime $holdTime
     * @return self
     */
    public function setHoldTime(\DateTime $holdTime)
    {
        $this->holdTime = $holdTime;
        return $this;
    }

    /**
     * Gets as mon
     *
     * When true, apply to Monday.
     *
     * @return bool
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Sets a new mon
     *
     * When true, apply to Monday.
     *
     * @param bool $mon
     * @return self
     */
    public function setMon($mon)
    {
        $this->mon = $mon;
        return $this;
    }

    /**
     * Gets as tue
     *
     * When true, apply to Tuesday.
     *
     * @return bool
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * Sets a new tue
     *
     * When true, apply to Tuesday.
     *
     * @param bool $tue
     * @return self
     */
    public function setTue($tue)
    {
        $this->tue = $tue;
        return $this;
    }

    /**
     * Gets as weds
     *
     * When true, apply to Wednesday.
     *
     * @return bool
     */
    public function getWeds()
    {
        return $this->weds;
    }

    /**
     * Sets a new weds
     *
     * When true, apply to Wednesday.
     *
     * @param bool $weds
     * @return self
     */
    public function setWeds($weds)
    {
        $this->weds = $weds;
        return $this;
    }

    /**
     * Gets as thur
     *
     * When true, apply to Thursday.
     *
     * @return bool
     */
    public function getThur()
    {
        return $this->thur;
    }

    /**
     * Sets a new thur
     *
     * When true, apply to Thursday.
     *
     * @param bool $thur
     * @return self
     */
    public function setThur($thur)
    {
        $this->thur = $thur;
        return $this;
    }

    /**
     * Gets as fri
     *
     * When true, apply to Friday.
     *
     * @return bool
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * Sets a new fri
     *
     * When true, apply to Friday.
     *
     * @param bool $fri
     * @return self
     */
    public function setFri($fri)
    {
        $this->fri = $fri;
        return $this;
    }

    /**
     * Gets as sat
     *
     * When true, apply to Saturday.
     *
     * @return bool
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * Sets a new sat
     *
     * When true, apply to Saturday.
     *
     * @param bool $sat
     * @return self
     */
    public function setSat($sat)
    {
        $this->sat = $sat;
        return $this;
    }

    /**
     * Gets as sun
     *
     * When true, apply to Sunday.
     *
     * @return bool
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * Sets a new sun
     *
     * When true, apply to Sunday.
     *
     * @param bool $sun
     * @return self
     */
    public function setSun($sun)
    {
        $this->sun = $sun;
        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as noCardHolderInfoReqInd
     *
     * If true, no credit cardholder information is required for guarantee/deposit.
     *
     * @return bool
     */
    public function getNoCardHolderInfoReqInd()
    {
        return $this->noCardHolderInfoReqInd;
    }

    /**
     * Sets a new noCardHolderInfoReqInd
     *
     * If true, no credit cardholder information is required for guarantee/deposit.
     *
     * @param bool $noCardHolderInfoReqInd
     * @return self
     */
    public function setNoCardHolderInfoReqInd($noCardHolderInfoReqInd)
    {
        $this->noCardHolderInfoReqInd = $noCardHolderInfoReqInd;
        return $this;
    }

    /**
     * Gets as nameInd
     *
     * If true, the credit cardholder name is required for guarantee/deposit.
     *
     * @return bool
     */
    public function getNameInd()
    {
        return $this->nameInd;
    }

    /**
     * Sets a new nameInd
     *
     * If true, the credit cardholder name is required for guarantee/deposit.
     *
     * @param bool $nameInd
     * @return self
     */
    public function setNameInd($nameInd)
    {
        $this->nameInd = $nameInd;
        return $this;
    }

    /**
     * Gets as addressInd
     *
     * If true, the credit cardholder address is required for guarantee/deposit.
     *
     * @return bool
     */
    public function getAddressInd()
    {
        return $this->addressInd;
    }

    /**
     * Sets a new addressInd
     *
     * If true, the credit cardholder address is required for guarantee/deposit.
     *
     * @param bool $addressInd
     * @return self
     */
    public function setAddressInd($addressInd)
    {
        $this->addressInd = $addressInd;
        return $this;
    }

    /**
     * Gets as phoneInd
     *
     * If true, the credit cardholder phone number is required for guarantee/deposit.
     *
     * @return bool
     */
    public function getPhoneInd()
    {
        return $this->phoneInd;
    }

    /**
     * Sets a new phoneInd
     *
     * If true, the credit cardholder phone number is required for guarantee/deposit.
     *
     * @param bool $phoneInd
     * @return self
     */
    public function setPhoneInd($phoneInd)
    {
        $this->phoneInd = $phoneInd;
        return $this;
    }

    /**
     * Gets as interbankNbrInd
     *
     * If true, the Interbank Card Association number is required for guarantee/deposit.
     *
     * @return bool
     */
    public function getInterbankNbrInd()
    {
        return $this->interbankNbrInd;
    }

    /**
     * Sets a new interbankNbrInd
     *
     * If true, the Interbank Card Association number is required for guarantee/deposit.
     *
     * @param bool $interbankNbrInd
     * @return self
     */
    public function setInterbankNbrInd($interbankNbrInd)
    {
        $this->interbankNbrInd = $interbankNbrInd;
        return $this;
    }

    /**
     * Gets as roomTypeCode
     *
     * A system specific room type to which this guarantee payment information applies.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * A system specific room type to which this guarantee payment information applies.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;
        return $this;
    }

    /**
     * Gets as infoSource
     *
     * To specify the source of the rate of exchange for a currency code.
     *
     * @return string
     */
    public function getInfoSource()
    {
        return $this->infoSource;
    }

    /**
     * Sets a new infoSource
     *
     * To specify the source of the rate of exchange for a currency code.
     *
     * @param string $infoSource
     * @return self
     */
    public function setInfoSource($infoSource)
    {
        $this->infoSource = $infoSource;
        return $this;
    }

    /**
     * Gets as nonRefundableIndicator
     *
     * When true, indicates that any prepayment for the reservation is non refundable, therefore a 100% penalty on the prepayment is applied, irrespective of deadline.
     *
     * @return bool
     */
    public function getNonRefundableIndicator()
    {
        return $this->nonRefundableIndicator;
    }

    /**
     * Sets a new nonRefundableIndicator
     *
     * When true, indicates that any prepayment for the reservation is non refundable, therefore a 100% penalty on the prepayment is applied, irrespective of deadline.
     *
     * @param bool $nonRefundableIndicator
     * @return self
     */
    public function setNonRefundableIndicator($nonRefundableIndicator)
    {
        $this->nonRefundableIndicator = $nonRefundableIndicator;
        return $this;
    }

    /**
     * Gets as policyCode
     *
     * Used to specify the type of payment policy.
     *
     * @return string
     */
    public function getPolicyCode()
    {
        return $this->policyCode;
    }

    /**
     * Sets a new policyCode
     *
     * Used to specify the type of payment policy.
     *
     * @param string $policyCode
     * @return self
     */
    public function setPolicyCode($policyCode)
    {
        $this->policyCode = $policyCode;
        return $this;
    }

    /**
     * Adds as acceptedPayment
     *
     * Collection of forms of payment accepted for payment.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType $acceptedPayment
     */
    public function addToAcceptedPayments(\Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType $acceptedPayment)
    {
        $this->acceptedPayments[] = $acceptedPayment;
        return $this;
    }

    /**
     * isset acceptedPayments
     *
     * Collection of forms of payment accepted for payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptedPayments($index)
    {
        return isset($this->acceptedPayments[$index]);
    }

    /**
     * unset acceptedPayments
     *
     * Collection of forms of payment accepted for payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptedPayments($index)
    {
        unset($this->acceptedPayments[$index]);
    }

    /**
     * Gets as acceptedPayments
     *
     * Collection of forms of payment accepted for payment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType[]
     */
    public function getAcceptedPayments()
    {
        return $this->acceptedPayments;
    }

    /**
     * Sets a new acceptedPayments
     *
     * Collection of forms of payment accepted for payment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType[] $acceptedPayments
     * @return self
     */
    public function setAcceptedPayments(array $acceptedPayments)
    {
        $this->acceptedPayments = $acceptedPayments;
        return $this;
    }

    /**
     * Gets as amountPercent
     *
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\AmountPercentAType
     */
    public function getAmountPercent()
    {
        return $this->amountPercent;
    }

    /**
     * Sets a new amountPercent
     *
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\AmountPercentAType $amountPercent
     * @return self
     */
    public function setAmountPercent(\Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\AmountPercentAType $amountPercent)
    {
        $this->amountPercent = $amountPercent;
        return $this;
    }

    /**
     * Adds as deadline
     *
     * Payment deadline, absolute or relative.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\DeadlineAType $deadline
     */
    public function addToDeadline(\Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\DeadlineAType $deadline)
    {
        $this->deadline[] = $deadline;
        return $this;
    }

    /**
     * isset deadline
     *
     * Payment deadline, absolute or relative.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeadline($index)
    {
        return isset($this->deadline[$index]);
    }

    /**
     * unset deadline
     *
     * Payment deadline, absolute or relative.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeadline($index)
    {
        unset($this->deadline[$index]);
    }

    /**
     * Gets as deadline
     *
     * Payment deadline, absolute or relative.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\DeadlineAType[]
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Sets a new deadline
     *
     * Payment deadline, absolute or relative.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\DeadlineAType[] $deadline
     * @return self
     */
    public function setDeadline(array $deadline)
    {
        $this->deadline = $deadline;
        return $this;
    }

    /**
     * Adds as description
     *
     * Text description of the Payment in a given language.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $description
     */
    public function addToDescription(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Text description of the Payment in a given language.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Text description of the Payment in a given language.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Text description of the Payment in a given language.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Text description of the Payment in a given language.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as address
     *
     * The address to which a deposit may be sent.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\AddressAType $address
     */
    public function addToAddress(\Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\AddressAType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * The address to which a deposit may be sent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * The address to which a deposit may be sent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * The address to which a deposit may be sent.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\AddressAType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * The address to which a deposit may be sent.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RequiredPaymentsType\GuaranteePaymentAType\AddressAType[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;
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

