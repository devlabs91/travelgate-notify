<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing OriginDestinationInformationType
 *
 * Origin and Destination location, and time information for the request. Also includes the ability to specify a connection location for the search.
 * XSD Type: OriginDestinationInformationType
 */
class OriginDestinationInformationType extends TravelDateTimeType
{

    /**
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationInformationType\OriginLocationAType $originLocation
     */
    private $originLocation = null;

    /**
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationInformationType\DestinationLocationAType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ConnectionType\ConnectionLocationAType[] $connectionLocations
     */
    private $connectionLocations = null;

    /**
     * Gets as originLocation
     *
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationInformationType\OriginLocationAType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationInformationType\OriginLocationAType $originLocation
     * @return self
     */
    public function setOriginLocation(\Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationInformationType\OriginLocationAType $originLocation)
    {
        $this->originLocation = $originLocation;
        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationInformationType\DestinationLocationAType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationInformationType\DestinationLocationAType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationInformationType\DestinationLocationAType $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;
        return $this;
    }

    /**
     * Adds as connectionLocation
     *
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ConnectionType\ConnectionLocationAType $connectionLocation
     */
    public function addToConnectionLocations(\Devlabs91\TravelgateNotify\Models\Ota\ConnectionType\ConnectionLocationAType $connectionLocation)
    {
        $this->connectionLocations[] = $connectionLocation;
        return $this;
    }

    /**
     * isset connectionLocations
     *
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionLocations($index)
    {
        return isset($this->connectionLocations[$index]);
    }

    /**
     * unset connectionLocations
     *
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionLocations($index)
    {
        unset($this->connectionLocations[$index]);
    }

    /**
     * Gets as connectionLocations
     *
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ConnectionType\ConnectionLocationAType[]
     */
    public function getConnectionLocations()
    {
        return $this->connectionLocations;
    }

    /**
     * Sets a new connectionLocations
     *
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ConnectionType\ConnectionLocationAType[] $connectionLocations
     * @return self
     */
    public function setConnectionLocations(array $connectionLocations)
    {
        $this->connectionLocations = $connectionLocations;
        return $this;
    }


}

