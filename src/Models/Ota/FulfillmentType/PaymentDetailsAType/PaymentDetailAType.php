<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\FulfillmentType\PaymentDetailsAType;

use Devlabs91\TravelgateNotify\Models\Ota\PaymentDetailType;

/**
 * Class representing PaymentDetailAType
 */
class PaymentDetailAType extends PaymentDetailType
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

