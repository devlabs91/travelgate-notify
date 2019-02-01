<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing LocationGeneralType
 *
 * Provides high-level information regarding a location.
 * XSD Type: LocationGeneralType
 */
class LocationGeneralType
{

    /**
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @property string $cityName
     */
    private $cityName = null;

    /**
     * State or Province name (e.g., Texas).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\StateProvType $stateProv
     */
    private $stateProv = null;

    /**
     * Country name (e.g., Ireland).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CountryNameType $countryName
     */
    private $countryName = null;

    /**
     * Gets as cityName
     *
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @param string $cityName
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * Gets as stateProv
     *
     * State or Province name (e.g., Texas).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\StateProvType
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Sets a new stateProv
     *
     * State or Province name (e.g., Texas).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\StateProvType $stateProv
     * @return self
     */
    public function setStateProv(\Devlabs91\TravelgateNotify\Models\Ota\StateProvType $stateProv)
    {
        $this->stateProv = $stateProv;
        return $this;
    }

    /**
     * Gets as countryName
     *
     * Country name (e.g., Ireland).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CountryNameType
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * Country name (e.g., Ireland).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CountryNameType $countryName
     * @return self
     */
    public function setCountryName(\Devlabs91\TravelgateNotify\Models\Ota\CountryNameType $countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }


}

