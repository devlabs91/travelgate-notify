<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\GuestsAType;

use Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType;

/**
 * Class representing GuestAType
 */
class GuestAType extends ContactPersonType
{

    /**
     * This attributes indicates the change in status of the guest.
     *
     * @property string $guestAction
     */
    private $guestAction = null;

    /**
     * Indicates whether to send the printed confirmation.
     *
     * @property bool $printConfoInd
     */
    private $printConfoInd = null;

    /**
     * The confirmation number for a particular guest. This is used with the 'GuestAction' attribute value of 'Add-Update' to indicate an update.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType[] $loyalty
     */
    private $loyalty = [
        
    ];

    /**
     * Guarantee or Payment information for an individual guest.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType[] $guaranteePayment
     */
    private $guaranteePayment = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AdditionalDetailType[] $additionalDetails
     */
    private $additionalDetails = null;

    /**
     * Gets as guestAction
     *
     * This attributes indicates the change in status of the guest.
     *
     * @return string
     */
    public function getGuestAction()
    {
        return $this->guestAction;
    }

    /**
     * Sets a new guestAction
     *
     * This attributes indicates the change in status of the guest.
     *
     * @param string $guestAction
     * @return self
     */
    public function setGuestAction($guestAction)
    {
        $this->guestAction = $guestAction;
        return $this;
    }

    /**
     * Gets as printConfoInd
     *
     * Indicates whether to send the printed confirmation.
     *
     * @return bool
     */
    public function getPrintConfoInd()
    {
        return $this->printConfoInd;
    }

    /**
     * Sets a new printConfoInd
     *
     * Indicates whether to send the printed confirmation.
     *
     * @param bool $printConfoInd
     * @return self
     */
    public function setPrintConfoInd($printConfoInd)
    {
        $this->printConfoInd = $printConfoInd;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The confirmation number for a particular guest. This is used with the 'GuestAction' attribute value of 'Add-Update' to indicate an update.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The confirmation number for a particular guest. This is used with the 'GuestAction' attribute value of 'Add-Update' to indicate an update.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Adds as loyalty
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType $loyalty
     */
    public function addToLoyalty(\Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType $loyalty)
    {
        $this->loyalty[] = $loyalty;
        return $this;
    }

    /**
     * isset loyalty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyalty($index)
    {
        return isset($this->loyalty[$index]);
    }

    /**
     * unset loyalty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyalty($index)
    {
        unset($this->loyalty[$index]);
    }

    /**
     * Gets as loyalty
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType[]
     */
    public function getLoyalty()
    {
        return $this->loyalty;
    }

    /**
     * Sets a new loyalty
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType[] $loyalty
     * @return self
     */
    public function setLoyalty(array $loyalty)
    {
        $this->loyalty = $loyalty;
        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType $guaranteePayment
     */
    public function addToGuaranteePayment(\Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType $guaranteePayment)
    {
        $this->guaranteePayment[] = $guaranteePayment;
        return $this;
    }

    /**
     * isset guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteePayment($index)
    {
        return isset($this->guaranteePayment[$index]);
    }

    /**
     * unset guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteePayment($index)
    {
        unset($this->guaranteePayment[$index]);
    }

    /**
     * Gets as guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType[]
     */
    public function getGuaranteePayment()
    {
        return $this->guaranteePayment;
    }

    /**
     * Sets a new guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType[] $guaranteePayment
     * @return self
     */
    public function setGuaranteePayment(array $guaranteePayment)
    {
        $this->guaranteePayment = $guaranteePayment;
        return $this;
    }

    /**
     * Adds as additionalDetail
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AdditionalDetailType $additionalDetail
     */
    public function addToAdditionalDetails(\Devlabs91\TravelgateNotify\Models\Ota\AdditionalDetailType $additionalDetail)
    {
        $this->additionalDetails[] = $additionalDetail;
        return $this;
    }

    /**
     * isset additionalDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDetails($index)
    {
        return isset($this->additionalDetails[$index]);
    }

    /**
     * unset additionalDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDetails($index)
    {
        unset($this->additionalDetails[$index]);
    }

    /**
     * Gets as additionalDetails
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AdditionalDetailType[]
     */
    public function getAdditionalDetails()
    {
        return $this->additionalDetails;
    }

    /**
     * Sets a new additionalDetails
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AdditionalDetailType[] $additionalDetails
     * @return self
     */
    public function setAdditionalDetails(array $additionalDetails)
    {
        $this->additionalDetails = $additionalDetails;
        return $this;
    }


}

