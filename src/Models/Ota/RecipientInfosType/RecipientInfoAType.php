<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RecipientInfosType;

use Devlabs91\TravelgateNotify\Models\Ota\ContactPersonType;

/**
 * Class representing RecipientInfoAType
 */
class RecipientInfoAType extends ContactPersonType
{

    /**
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $reservationID
     */
    private $reservationID = [
        
    ];

    /**
     * Informtion pertaining to the shipment of a product to the recipient.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RecipientInfosType\RecipientInfoAType\ShippingInfoAType $shippingInfo
     */
    private $shippingInfo = null;

    /**
     * A collection of comments.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Adds as reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $reservationID
     */
    public function addToReservationID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $reservationID)
    {
        $this->reservationID[] = $reservationID;
        return $this;
    }

    /**
     * isset reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReservationID($index)
    {
        return isset($this->reservationID[$index]);
    }

    /**
     * unset reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReservationID($index)
    {
        unset($this->reservationID[$index]);
    }

    /**
     * Gets as reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[]
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * Provides the reservation number of the recipient for delivery of the product.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType[] $reservationID
     * @return self
     */
    public function setReservationID(array $reservationID)
    {
        $this->reservationID = $reservationID;
        return $this;
    }

    /**
     * Gets as shippingInfo
     *
     * Informtion pertaining to the shipment of a product to the recipient.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RecipientInfosType\RecipientInfoAType\ShippingInfoAType
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo;
    }

    /**
     * Sets a new shippingInfo
     *
     * Informtion pertaining to the shipment of a product to the recipient.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RecipientInfosType\RecipientInfoAType\ShippingInfoAType $shippingInfo
     * @return self
     */
    public function setShippingInfo(\Devlabs91\TravelgateNotify\Models\Ota\RecipientInfosType\RecipientInfoAType\ShippingInfoAType $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $comment
     */
    public function addToComments(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;
        return $this;
    }


}

