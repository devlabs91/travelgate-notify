<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing TravelerInformationType
 *
 * Specify passenger numbers and types.
 * XSD Type: TravelerInformationType
 */
class TravelerInformationType
{

    /**
     * Specify number of passengers using Passenger Type Codes.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PassengerTypeQuantityType[] $passengerTypeQuantity
     */
    private $passengerTypeQuantity = [
        
    ];

    /**
     * Information profiling the person traveling: Gender - the gender of the customer, if needed; BirthDate - Date of Birth; Currency - the preferred currency in which monetary amounts should be returned.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AirTravelerType $airTraveler
     */
    private $airTraveler = null;

    /**
     * Adds as passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PassengerTypeQuantityType $passengerTypeQuantity
     */
    public function addToPassengerTypeQuantity(\Devlabs91\TravelgateNotify\Models\Ota\PassengerTypeQuantityType $passengerTypeQuantity)
    {
        $this->passengerTypeQuantity[] = $passengerTypeQuantity;
        return $this;
    }

    /**
     * isset passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerTypeQuantity($index)
    {
        return isset($this->passengerTypeQuantity[$index]);
    }

    /**
     * unset passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerTypeQuantity($index)
    {
        unset($this->passengerTypeQuantity[$index]);
    }

    /**
     * Gets as passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PassengerTypeQuantityType[]
     */
    public function getPassengerTypeQuantity()
    {
        return $this->passengerTypeQuantity;
    }

    /**
     * Sets a new passengerTypeQuantity
     *
     * Specify number of passengers using Passenger Type Codes.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PassengerTypeQuantityType[] $passengerTypeQuantity
     * @return self
     */
    public function setPassengerTypeQuantity(array $passengerTypeQuantity)
    {
        $this->passengerTypeQuantity = $passengerTypeQuantity;
        return $this;
    }

    /**
     * Gets as airTraveler
     *
     * Information profiling the person traveling: Gender - the gender of the customer, if needed; BirthDate - Date of Birth; Currency - the preferred currency in which monetary amounts should be returned.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AirTravelerType
     */
    public function getAirTraveler()
    {
        return $this->airTraveler;
    }

    /**
     * Sets a new airTraveler
     *
     * Information profiling the person traveling: Gender - the gender of the customer, if needed; BirthDate - Date of Birth; Currency - the preferred currency in which monetary amounts should be returned.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirTravelerType $airTraveler
     * @return self
     */
    public function setAirTraveler(\Devlabs91\TravelgateNotify\Models\Ota\AirTravelerType $airTraveler)
    {
        $this->airTraveler = $airTraveler;
        return $this;
    }


}

