<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType;

use Devlabs91\TravelgateNotify\Models\Ota\DirectBillType;

/**
 * Class representing MasterAccountAType
 */
class MasterAccountAType extends DirectBillType
{

    /**
     * Indicates charges to be billed to the master account.
     *
     * @property string $billingType
     */
    private $billingType = null;

    /**
     * Food and beverage billed to master account. If false, guest pays own.
     *  false
     *
     * @property bool $signFoodAndBev
     */
    private $signFoodAndBev = null;

    /**
     * Gets as billingType
     *
     * Indicates charges to be billed to the master account.
     *
     * @return string
     */
    public function getBillingType()
    {
        return $this->billingType;
    }

    /**
     * Sets a new billingType
     *
     * Indicates charges to be billed to the master account.
     *
     * @param string $billingType
     * @return self
     */
    public function setBillingType($billingType)
    {
        $this->billingType = $billingType;
        return $this;
    }

    /**
     * Gets as signFoodAndBev
     *
     * Food and beverage billed to master account. If false, guest pays own.
     *  false
     *
     * @return bool
     */
    public function getSignFoodAndBev()
    {
        return $this->signFoodAndBev;
    }

    /**
     * Sets a new signFoodAndBev
     *
     * Food and beverage billed to master account. If false, guest pays own.
     *  false
     *
     * @param bool $signFoodAndBev
     * @return self
     */
    public function setSignFoodAndBev($signFoodAndBev)
    {
        $this->signFoodAndBev = $signFoodAndBev;
        return $this;
    }


}

