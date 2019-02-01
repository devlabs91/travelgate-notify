<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing TravelerInfoType
 *
 * Identifies passenger(s) who will travel on the reservation.
 * XSD Type: TravelerInfoType
 */
class TravelerInfoType
{

    /**
     * Information about the person traveling.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoType\AirTravelerAType[] $airTraveler
     */
    private $airTraveler = [
        
    ];

    /**
     * Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType[] $specialReqDetails
     */
    private $specialReqDetails = [
        
    ];

    /**
     * Adds as airTraveler
     *
     * Information about the person traveling.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoType\AirTravelerAType $airTraveler
     */
    public function addToAirTraveler(\Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoType\AirTravelerAType $airTraveler)
    {
        $this->airTraveler[] = $airTraveler;
        return $this;
    }

    /**
     * isset airTraveler
     *
     * Information about the person traveling.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirTraveler($index)
    {
        return isset($this->airTraveler[$index]);
    }

    /**
     * unset airTraveler
     *
     * Information about the person traveling.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirTraveler($index)
    {
        unset($this->airTraveler[$index]);
    }

    /**
     * Gets as airTraveler
     *
     * Information about the person traveling.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoType\AirTravelerAType[]
     */
    public function getAirTraveler()
    {
        return $this->airTraveler;
    }

    /**
     * Sets a new airTraveler
     *
     * Information about the person traveling.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoType\AirTravelerAType[] $airTraveler
     * @return self
     */
    public function setAirTraveler(array $airTraveler)
    {
        $this->airTraveler = $airTraveler;
        return $this;
    }

    /**
     * Adds as specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType $specialReqDetails
     */
    public function addToSpecialReqDetails(\Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType $specialReqDetails)
    {
        $this->specialReqDetails[] = $specialReqDetails;
        return $this;
    }

    /**
     * isset specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialReqDetails($index)
    {
        return isset($this->specialReqDetails[$index]);
    }

    /**
     * unset specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialReqDetails($index)
    {
        unset($this->specialReqDetails[$index]);
    }

    /**
     * Gets as specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType[]
     */
    public function getSpecialReqDetails()
    {
        return $this->specialReqDetails;
    }

    /**
     * Sets a new specialReqDetails
     *
     * Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SpecialReqDetailsType[] $specialReqDetails
     * @return self
     */
    public function setSpecialReqDetails(array $specialReqDetails)
    {
        $this->specialReqDetails = $specialReqDetails;
        return $this;
    }


}

