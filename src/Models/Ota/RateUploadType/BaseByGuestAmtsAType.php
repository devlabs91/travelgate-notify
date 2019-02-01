<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RateUploadType;

/**
 * Class representing BaseByGuestAmtsAType
 */
class BaseByGuestAmtsAType
{

    /**
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType[] $baseByGuestAmt
     */
    private $baseByGuestAmt = [
        
    ];

    /**
     * Adds as baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType $baseByGuestAmt
     */
    public function addToBaseByGuestAmt(\Devlabs91\TravelgateNotify\Models\Ota\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType $baseByGuestAmt)
    {
        $this->baseByGuestAmt[] = $baseByGuestAmt;
        return $this;
    }

    /**
     * isset baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBaseByGuestAmt($index)
    {
        return isset($this->baseByGuestAmt[$index]);
    }

    /**
     * unset baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBaseByGuestAmt($index)
    {
        unset($this->baseByGuestAmt[$index]);
    }

    /**
     * Gets as baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType[]
     */
    public function getBaseByGuestAmt()
    {
        return $this->baseByGuestAmt;
    }

    /**
     * Sets a new baseByGuestAmt
     *
     * Base charge for a given number of guests for a given age qualifying code.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType[] $baseByGuestAmt
     * @return self
     */
    public function setBaseByGuestAmt(array $baseByGuestAmt)
    {
        $this->baseByGuestAmt = $baseByGuestAmt;
        return $this;
    }


}

