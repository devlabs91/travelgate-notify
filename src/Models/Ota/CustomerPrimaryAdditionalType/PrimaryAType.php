<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType;

use Devlabs91\TravelgateNotify\Models\Ota\CustomerType;

/**
 * Class representing PrimaryAType
 */
class PrimaryAType extends CustomerType
{

    /**
     * The identification of the customer for whom a booking is being requested. This is different from the customer's loyalty number.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $customerID
     */
    private $customerID = null;

    /**
     * Gets as customerID
     *
     * The identification of the customer for whom a booking is being requested. This is different from the customer's loyalty number.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * Sets a new customerID
     *
     * The identification of the customer for whom a booking is being requested. This is different from the customer's loyalty number.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $customerID
     * @return self
     */
    public function setCustomerID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $customerID)
    {
        $this->customerID = $customerID;
        return $this;
    }


}

