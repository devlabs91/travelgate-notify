<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\FareType;

/**
 * Class representing ExchangeInfoAType
 */
class ExchangeInfoAType
{

    /**
     * The new ticket/document number.
     *
     * @property string $ticketDocumentNbr
     */
    private $ticketDocumentNbr = null;

    /**
     * Optional information on coupon numbers being exchanged.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType\CouponInfoAType[] $couponInfo
     */
    private $couponInfo = [
        
    ];

    /**
     * The original origin and destination for exchanged ticket/documents.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType\OriginalOriginDestinationAType $originalOriginDestination
     */
    private $originalOriginDestination = null;

    /**
     * Gets as ticketDocumentNbr
     *
     * The new ticket/document number.
     *
     * @return string
     */
    public function getTicketDocumentNbr()
    {
        return $this->ticketDocumentNbr;
    }

    /**
     * Sets a new ticketDocumentNbr
     *
     * The new ticket/document number.
     *
     * @param string $ticketDocumentNbr
     * @return self
     */
    public function setTicketDocumentNbr($ticketDocumentNbr)
    {
        $this->ticketDocumentNbr = $ticketDocumentNbr;
        return $this;
    }

    /**
     * Adds as couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType\CouponInfoAType $couponInfo
     */
    public function addToCouponInfo(\Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType\CouponInfoAType $couponInfo)
    {
        $this->couponInfo[] = $couponInfo;
        return $this;
    }

    /**
     * isset couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCouponInfo($index)
    {
        return isset($this->couponInfo[$index]);
    }

    /**
     * unset couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCouponInfo($index)
    {
        unset($this->couponInfo[$index]);
    }

    /**
     * Gets as couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType\CouponInfoAType[]
     */
    public function getCouponInfo()
    {
        return $this->couponInfo;
    }

    /**
     * Sets a new couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType\CouponInfoAType[] $couponInfo
     * @return self
     */
    public function setCouponInfo(array $couponInfo)
    {
        $this->couponInfo = $couponInfo;
        return $this;
    }

    /**
     * Gets as originalOriginDestination
     *
     * The original origin and destination for exchanged ticket/documents.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType\OriginalOriginDestinationAType
     */
    public function getOriginalOriginDestination()
    {
        return $this->originalOriginDestination;
    }

    /**
     * Sets a new originalOriginDestination
     *
     * The original origin and destination for exchanged ticket/documents.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType\OriginalOriginDestinationAType $originalOriginDestination
     * @return self
     */
    public function setOriginalOriginDestination(\Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType\OriginalOriginDestinationAType $originalOriginDestination)
    {
        $this->originalOriginDestination = $originalOriginDestination;
        return $this;
    }


}

