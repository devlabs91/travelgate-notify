<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType;

/**
 * Class representing CardIssuerNameAType
 */
class CardIssuerNameAType
{

    /**
     * Code of bank issuing the card.
     *
     * @property string $bankID
     */
    private $bankID = null;

    /**
     * Gets as bankID
     *
     * Code of bank issuing the card.
     *
     * @return string
     */
    public function getBankID()
    {
        return $this->bankID;
    }

    /**
     * Sets a new bankID
     *
     * Code of bank issuing the card.
     *
     * @param string $bankID
     * @return self
     */
    public function setBankID($bankID)
    {
        $this->bankID = $bankID;
        return $this;
    }


}

