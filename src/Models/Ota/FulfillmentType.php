<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing FulfillmentType
 *
 * Payment information relevant to a booking.
 * XSD Type: FulfillmentType
 */
class FulfillmentType
{

    /**
     * Container for Payment Detail.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[] $paymentDetails
     */
    private $paymentDetails = null;

    /**
     * Ticket delivery information for the booking request.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AddressType $deliveryAddress
     */
    private $deliveryAddress = null;

    /**
     * Purchaser name details
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PersonNameType $name
     */
    private $name = null;

    /**
     * Specifies the requested distribution method for the ticket receipt.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\ReceiptAType $receipt
     */
    private $receipt = null;

    /**
     * Used to provide textual information concerning fulfillment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\PaymentTextAType[] $paymentText
     */
    private $paymentText = [
        
    ];

    /**
     * Adds as paymentDetail
     *
     * Container for Payment Detail.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\PaymentDetailsAType\PaymentDetailAType $paymentDetail
     */
    public function addToPaymentDetails(\Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\PaymentDetailsAType\PaymentDetailAType $paymentDetail)
    {
        $this->paymentDetails[] = $paymentDetail;
        return $this;
    }

    /**
     * isset paymentDetails
     *
     * Container for Payment Detail.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentDetails($index)
    {
        return isset($this->paymentDetails[$index]);
    }

    /**
     * unset paymentDetails
     *
     * Container for Payment Detail.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentDetails($index)
    {
        unset($this->paymentDetails[$index]);
    }

    /**
     * Gets as paymentDetails
     *
     * Container for Payment Detail.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[]
     */
    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }

    /**
     * Sets a new paymentDetails
     *
     * Container for Payment Detail.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[] $paymentDetails
     * @return self
     */
    public function setPaymentDetails(array $paymentDetails)
    {
        $this->paymentDetails = $paymentDetails;
        return $this;
    }

    /**
     * Gets as deliveryAddress
     *
     * Ticket delivery information for the booking request.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AddressType
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Sets a new deliveryAddress
     *
     * Ticket delivery information for the booking request.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AddressType $deliveryAddress
     * @return self
     */
    public function setDeliveryAddress(\Devlabs91\TravelgateNotify\Models\Ota\AddressType $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * Gets as name
     *
     * Purchaser name details
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PersonNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Purchaser name details
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PersonNameType $name
     * @return self
     */
    public function setName(\Devlabs91\TravelgateNotify\Models\Ota\PersonNameType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as receipt
     *
     * Specifies the requested distribution method for the ticket receipt.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\ReceiptAType
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * Sets a new receipt
     *
     * Specifies the requested distribution method for the ticket receipt.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\ReceiptAType $receipt
     * @return self
     */
    public function setReceipt(\Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\ReceiptAType $receipt)
    {
        $this->receipt = $receipt;
        return $this;
    }

    /**
     * Adds as paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\PaymentTextAType $paymentText
     */
    public function addToPaymentText(\Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\PaymentTextAType $paymentText)
    {
        $this->paymentText[] = $paymentText;
        return $this;
    }

    /**
     * isset paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentText($index)
    {
        return isset($this->paymentText[$index]);
    }

    /**
     * unset paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentText($index)
    {
        unset($this->paymentText[$index]);
    }

    /**
     * Gets as paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\PaymentTextAType[]
     */
    public function getPaymentText()
    {
        return $this->paymentText;
    }

    /**
     * Sets a new paymentText
     *
     * Used to provide textual information concerning fulfillment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\PaymentTextAType[] $paymentText
     * @return self
     */
    public function setPaymentText(array $paymentText)
    {
        $this->paymentText = $paymentText;
        return $this;
    }


}

