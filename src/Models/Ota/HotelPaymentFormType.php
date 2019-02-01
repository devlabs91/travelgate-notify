<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing HotelPaymentFormType
 *
 * Defines how an account will be settled at checkout.
 * XSD Type: HotelPaymentFormType
 */
class HotelPaymentFormType extends PaymentFormType
{

    /**
     * Authorized usage of the Master Account established at the hotel for the purposes of billing arrangements.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelPaymentFormType\MasterAccountUsageAType $masterAccountUsage
     */
    private $masterAccountUsage = null;

    /**
     * Gets as masterAccountUsage
     *
     * Authorized usage of the Master Account established at the hotel for the purposes of billing arrangements.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelPaymentFormType\MasterAccountUsageAType
     */
    public function getMasterAccountUsage()
    {
        return $this->masterAccountUsage;
    }

    /**
     * Sets a new masterAccountUsage
     *
     * Authorized usage of the Master Account established at the hotel for the purposes of billing arrangements.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelPaymentFormType\MasterAccountUsageAType $masterAccountUsage
     * @return self
     */
    public function setMasterAccountUsage(\Devlabs91\TravelgateNotify\Models\Ota\HotelPaymentFormType\MasterAccountUsageAType $masterAccountUsage)
    {
        $this->masterAccountUsage = $masterAccountUsage;
        return $this;
    }


}

