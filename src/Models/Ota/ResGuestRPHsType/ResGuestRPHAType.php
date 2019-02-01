<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\ResGuestRPHsType;

/**
 * Class representing ResGuestRPHAType
 */
class ResGuestRPHAType
{

    /**
     * A unique reference to the guest.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * A unique reference to the guest.
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
     * A unique reference to the guest.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }


}

