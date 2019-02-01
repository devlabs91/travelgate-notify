<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing OffLocationServiceType
 *
 * The OffLocationServiceType complex type defines a specific off-location service.
 * XSD Type: OffLocationServiceType
 */
class OffLocationServiceType extends OffLocationServiceCoreType
{

    /**
     * Provides special instructions regarding the off location service (e.g., keys with receptionist).
     *
     * @property string $specInstructions
     */
    private $specInstructions = null;

    /**
     * Name for the contact person for the off location service.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Phone number for the contact person for the off location service.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType\TelephoneAType $telephone
     */
    private $telephone = null;

    /**
     * Can be used as a tracking number for delivery and collection.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $trackingID
     */
    private $trackingID = null;

    /**
     * Gets as specInstructions
     *
     * Provides special instructions regarding the off location service (e.g., keys with receptionist).
     *
     * @return string
     */
    public function getSpecInstructions()
    {
        return $this->specInstructions;
    }

    /**
     * Sets a new specInstructions
     *
     * Provides special instructions regarding the off location service (e.g., keys with receptionist).
     *
     * @param string $specInstructions
     * @return self
     */
    public function setSpecInstructions($specInstructions)
    {
        $this->specInstructions = $specInstructions;
        return $this;
    }

    /**
     * Gets as personName
     *
     * Name for the contact person for the off location service.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PersonNameType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * Name for the contact person for the off location service.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PersonNameType $personName
     * @return self
     */
    public function setPersonName(\Devlabs91\TravelgateNotify\Models\Ota\PersonNameType $personName)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Gets as telephone
     *
     * Phone number for the contact person for the off location service.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Phone number for the contact person for the off location service.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType\TelephoneAType $telephone
     * @return self
     */
    public function setTelephone(\Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType\TelephoneAType $telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as trackingID
     *
     * Can be used as a tracking number for delivery and collection.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType
     */
    public function getTrackingID()
    {
        return $this->trackingID;
    }

    /**
     * Sets a new trackingID
     *
     * Can be used as a tracking number for delivery and collection.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $trackingID
     * @return self
     */
    public function setTrackingID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $trackingID)
    {
        $this->trackingID = $trackingID;
        return $this;
    }


}

