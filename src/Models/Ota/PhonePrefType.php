<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing PhonePrefType
 *
 * Identifies a telephone number preference.
 * XSD Type: PhonePrefType
 */
class PhonePrefType
{

    /**
     * Identifies a telephone number.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PhonePrefType\TelephoneAType $telephone
     */
    private $telephone = null;

    /**
     * Gets as telephone
     *
     * Identifies a telephone number.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PhonePrefType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Identifies a telephone number.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PhonePrefType\TelephoneAType $telephone
     * @return self
     */
    public function setTelephone(\Devlabs91\TravelgateNotify\Models\Ota\PhonePrefType\TelephoneAType $telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }


}

