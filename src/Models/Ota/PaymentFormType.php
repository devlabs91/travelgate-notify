<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing PaymentFormType
 *
 * Ways of providing funds and guarantees for travel by the individual.
 * XSD Type: PaymentFormType
 */
class PaymentFormType
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
     * A reference to identify the billing department for allocating cost of travel to company account.
     *
     * @property string $costCenterID
     */
    private $costCenterID = null;

    /**
     * Provides a reference to a specific form of payment.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * This is used to indicate either a charge, reserve (deposit) or refund.
     *
     * @property string $paymentTransactionTypeCode
     */
    private $paymentTransactionTypeCode = null;

    /**
     * When true, indicates this represents a guarantee rather than a payment form.
     *
     * @property bool $guaranteeIndicator
     */
    private $guaranteeIndicator = null;

    /**
     * Used to specify the method of guarantee. Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @property string $guaranteeTypeCode
     */
    private $guaranteeTypeCode = null;

    /**
     * Provides the identifier as specified by the GuaranteeTypeCode (e.g., Corporate ID or IATA number).
     *
     * @property string $guaranteeID
     */
    private $guaranteeID = null;

    /**
     * A remark associated with the payment form.
     *
     * @property string $remark
     */
    private $remark = null;

    /**
     * Details of a debit or credit card.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType $paymentCard
     */
    private $paymentCard = null;

    /**
     * Details of a bank account.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BankAcctType $bankAcct
     */
    private $bankAcct = null;

    /**
     * Details of a direct billing arrangement.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\DirectBillType $directBill
     */
    private $directBill = null;

    /**
     * Details of a paper or electronic document indicating prepayment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\VoucherAType $voucher
     */
    private $voucher = null;

    /**
     * Details of a loyalty redemption arrangement. This is normally miles or points.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\LoyaltyRedemptionAType $loyaltyRedemption
     */
    private $loyaltyRedemption = null;

    /**
     * Details of a miscellaneous charge order (MCO).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\MiscChargeOrderAType $miscChargeOrder
     */
    private $miscChargeOrder = null;

    /**
     * Details of a ticket to be exchanged.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\TicketAType $ticket
     */
    private $ticket = null;

    /**
     * Used to indicate payment in cash.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\CashAType $cash
     */
    private $cash = null;

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
     * Gets as costCenterID
     *
     * A reference to identify the billing department for allocating cost of travel to company account.
     *
     * @return string
     */
    public function getCostCenterID()
    {
        return $this->costCenterID;
    }

    /**
     * Sets a new costCenterID
     *
     * A reference to identify the billing department for allocating cost of travel to company account.
     *
     * @param string $costCenterID
     * @return self
     */
    public function setCostCenterID($costCenterID)
    {
        $this->costCenterID = $costCenterID;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Provides a reference to a specific form of payment.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Provides a reference to a specific form of payment.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as paymentTransactionTypeCode
     *
     * This is used to indicate either a charge, reserve (deposit) or refund.
     *
     * @return string
     */
    public function getPaymentTransactionTypeCode()
    {
        return $this->paymentTransactionTypeCode;
    }

    /**
     * Sets a new paymentTransactionTypeCode
     *
     * This is used to indicate either a charge, reserve (deposit) or refund.
     *
     * @param string $paymentTransactionTypeCode
     * @return self
     */
    public function setPaymentTransactionTypeCode($paymentTransactionTypeCode)
    {
        $this->paymentTransactionTypeCode = $paymentTransactionTypeCode;
        return $this;
    }

    /**
     * Gets as guaranteeIndicator
     *
     * When true, indicates this represents a guarantee rather than a payment form.
     *
     * @return bool
     */
    public function getGuaranteeIndicator()
    {
        return $this->guaranteeIndicator;
    }

    /**
     * Sets a new guaranteeIndicator
     *
     * When true, indicates this represents a guarantee rather than a payment form.
     *
     * @param bool $guaranteeIndicator
     * @return self
     */
    public function setGuaranteeIndicator($guaranteeIndicator)
    {
        $this->guaranteeIndicator = $guaranteeIndicator;
        return $this;
    }

    /**
     * Gets as guaranteeTypeCode
     *
     * Used to specify the method of guarantee. Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @return string
     */
    public function getGuaranteeTypeCode()
    {
        return $this->guaranteeTypeCode;
    }

    /**
     * Sets a new guaranteeTypeCode
     *
     * Used to specify the method of guarantee. Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @param string $guaranteeTypeCode
     * @return self
     */
    public function setGuaranteeTypeCode($guaranteeTypeCode)
    {
        $this->guaranteeTypeCode = $guaranteeTypeCode;
        return $this;
    }

    /**
     * Gets as guaranteeID
     *
     * Provides the identifier as specified by the GuaranteeTypeCode (e.g., Corporate ID or IATA number).
     *
     * @return string
     */
    public function getGuaranteeID()
    {
        return $this->guaranteeID;
    }

    /**
     * Sets a new guaranteeID
     *
     * Provides the identifier as specified by the GuaranteeTypeCode (e.g., Corporate ID or IATA number).
     *
     * @param string $guaranteeID
     * @return self
     */
    public function setGuaranteeID($guaranteeID)
    {
        $this->guaranteeID = $guaranteeID;
        return $this;
    }

    /**
     * Gets as remark
     *
     * A remark associated with the payment form.
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
     * A remark associated with the payment form.
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
     * Gets as paymentCard
     *
     * Details of a debit or credit card.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType
     */
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Sets a new paymentCard
     *
     * Details of a debit or credit card.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType $paymentCard
     * @return self
     */
    public function setPaymentCard(\Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType $paymentCard)
    {
        $this->paymentCard = $paymentCard;
        return $this;
    }

    /**
     * Gets as bankAcct
     *
     * Details of a bank account.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BankAcctType
     */
    public function getBankAcct()
    {
        return $this->bankAcct;
    }

    /**
     * Sets a new bankAcct
     *
     * Details of a bank account.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BankAcctType $bankAcct
     * @return self
     */
    public function setBankAcct(\Devlabs91\TravelgateNotify\Models\Ota\BankAcctType $bankAcct)
    {
        $this->bankAcct = $bankAcct;
        return $this;
    }

    /**
     * Gets as directBill
     *
     * Details of a direct billing arrangement.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\DirectBillType
     */
    public function getDirectBill()
    {
        return $this->directBill;
    }

    /**
     * Sets a new directBill
     *
     * Details of a direct billing arrangement.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\DirectBillType $directBill
     * @return self
     */
    public function setDirectBill(\Devlabs91\TravelgateNotify\Models\Ota\DirectBillType $directBill)
    {
        $this->directBill = $directBill;
        return $this;
    }

    /**
     * Gets as voucher
     *
     * Details of a paper or electronic document indicating prepayment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\VoucherAType
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * Sets a new voucher
     *
     * Details of a paper or electronic document indicating prepayment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\VoucherAType $voucher
     * @return self
     */
    public function setVoucher(\Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\VoucherAType $voucher)
    {
        $this->voucher = $voucher;
        return $this;
    }

    /**
     * Gets as loyaltyRedemption
     *
     * Details of a loyalty redemption arrangement. This is normally miles or points.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\LoyaltyRedemptionAType
     */
    public function getLoyaltyRedemption()
    {
        return $this->loyaltyRedemption;
    }

    /**
     * Sets a new loyaltyRedemption
     *
     * Details of a loyalty redemption arrangement. This is normally miles or points.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\LoyaltyRedemptionAType $loyaltyRedemption
     * @return self
     */
    public function setLoyaltyRedemption(\Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\LoyaltyRedemptionAType $loyaltyRedemption)
    {
        $this->loyaltyRedemption = $loyaltyRedemption;
        return $this;
    }

    /**
     * Gets as miscChargeOrder
     *
     * Details of a miscellaneous charge order (MCO).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\MiscChargeOrderAType
     */
    public function getMiscChargeOrder()
    {
        return $this->miscChargeOrder;
    }

    /**
     * Sets a new miscChargeOrder
     *
     * Details of a miscellaneous charge order (MCO).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\MiscChargeOrderAType $miscChargeOrder
     * @return self
     */
    public function setMiscChargeOrder(\Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\MiscChargeOrderAType $miscChargeOrder)
    {
        $this->miscChargeOrder = $miscChargeOrder;
        return $this;
    }

    /**
     * Gets as ticket
     *
     * Details of a ticket to be exchanged.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\TicketAType
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Sets a new ticket
     *
     * Details of a ticket to be exchanged.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\TicketAType $ticket
     * @return self
     */
    public function setTicket(\Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\TicketAType $ticket)
    {
        $this->ticket = $ticket;
        return $this;
    }

    /**
     * Gets as cash
     *
     * Used to indicate payment in cash.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\CashAType
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * Sets a new cash
     *
     * Used to indicate payment in cash.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\CashAType $cash
     * @return self
     */
    public function setCash(\Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType\CashAType $cash)
    {
        $this->cash = $cash;
        return $this;
    }


}

