<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AirTravelerType;

use Devlabs91\TravelgateNotify\Models\Ota\AddressType;

/**
 * Class representing AddressAType
 */
class AddressAType extends AddressType
{

    /**
     * Indicates the required modification to the element.
     *
     * @property string $operation
     */
    private $operation = null;

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }


}

