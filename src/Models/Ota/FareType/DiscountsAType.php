<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\FareType;

/**
 * Class representing DiscountsAType
 */
class DiscountsAType
{

    /**
     * Provides discount information associated with the fare.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\FareType\DiscountsAType\DiscountAType[] $discount
     */
    private $discount = [
        
    ];

    /**
     * Adds as discount
     *
     * Provides discount information associated with the fare.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\DiscountsAType\DiscountAType $discount
     */
    public function addToDiscount(\Devlabs91\TravelgateNotify\Models\Ota\FareType\DiscountsAType\DiscountAType $discount)
    {
        $this->discount[] = $discount;
        return $this;
    }

    /**
     * isset discount
     *
     * Provides discount information associated with the fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount
     *
     * Provides discount information associated with the fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount
     *
     * Provides discount information associated with the fare.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\FareType\DiscountsAType\DiscountAType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Provides discount information associated with the fare.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\FareType\DiscountsAType\DiscountAType[] $discount
     * @return self
     */
    public function setDiscount(array $discount)
    {
        $this->discount = $discount;
        return $this;
    }


}

