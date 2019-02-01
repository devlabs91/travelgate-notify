<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\FareType\ExchangeInfoAType;

/**
 * Class representing CouponInfoAType
 */
class CouponInfoAType
{

    /**
     * The applicable coupon number.
     *
     * @property int $number
     */
    private $number = null;

    /**
     * Gets as number
     *
     * The applicable coupon number.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The applicable coupon number.
     *
     * @param int $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }


}

