<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\PricingOverviewAType;

/**
 * Class representing AccountAType
 */
class AccountAType
{

    /**
     * The account code applicable to the fare.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * The account code applicable to the fare.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The account code applicable to the fare.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }


}

