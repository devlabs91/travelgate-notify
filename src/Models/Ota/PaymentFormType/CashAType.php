<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType;

/**
 * Class representing CashAType
 */
class CashAType
{

    /**
     * If true, this indicates cash is being used.
     *  true
     *
     * @property bool $cashIndicator
     */
    private $cashIndicator = null;

    /**
     * Gets as cashIndicator
     *
     * If true, this indicates cash is being used.
     *  true
     *
     * @return bool
     */
    public function getCashIndicator()
    {
        return $this->cashIndicator;
    }

    /**
     * Sets a new cashIndicator
     *
     * If true, this indicates cash is being used.
     *  true
     *
     * @param bool $cashIndicator
     * @return self
     */
    public function setCashIndicator($cashIndicator)
    {
        $this->cashIndicator = $cashIndicator;
        return $this;
    }


}

