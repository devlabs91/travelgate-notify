<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\SourceType;

use Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType;

/**
 * Class representing RequestorIDAType
 */
class RequestorIDAType extends UniqueIDType
{

    /**
     * This password provides an additional level of security that the recipient can use to validate the sending party's authority to use the message.
     *
     * @property string $messagePassword
     */
    private $messagePassword = null;

    /**
     * Gets as messagePassword
     *
     * This password provides an additional level of security that the recipient can use to validate the sending party's authority to use the message.
     *
     * @return string
     */
    public function getMessagePassword()
    {
        return $this->messagePassword;
    }

    /**
     * Sets a new messagePassword
     *
     * This password provides an additional level of security that the recipient can use to validate the sending party's authority to use the message.
     *
     * @param string $messagePassword
     * @return self
     */
    public function setMessagePassword($messagePassword)
    {
        $this->messagePassword = $messagePassword;
        return $this;
    }


}

