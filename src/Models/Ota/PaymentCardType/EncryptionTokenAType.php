<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType;

/**
 * Class representing EncryptionTokenAType
 */
class EncryptionTokenAType
{

    /**
     *
     * @property string $PlainText
     */
    private $PlainText = null;

    /**
     * Gets as PlainText
     *
     * @return string
     */
    public function getPlainText()
    {
        return $this->PlainText;
    }
    
    /**
     * Sets a new PlainText
     *
     * @param string $plainText
     * @return self
     */
    public function setPlainText($plainText)
    {
        $this->PlainText = $plainText;
        return $this;
    }


}
