<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing OriginDestinationOptionType
 *
 * A container for flight segments.
 * XSD Type: OriginDestinationOptionType
 */
class OriginDestinationOptionType
{

    /**
     * A container for necessary data to describe one or more legs of a single flight number.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationOptionType\FlightSegmentAType[] $flightSegment
     */
    private $flightSegment = [
        
    ];

    /**
     * Adds as flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight number.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationOptionType\FlightSegmentAType $flightSegment
     */
    public function addToFlightSegment(\Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationOptionType\FlightSegmentAType $flightSegment)
    {
        $this->flightSegment[] = $flightSegment;
        return $this;
    }

    /**
     * isset flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFlightSegment($index)
    {
        return isset($this->flightSegment[$index]);
    }

    /**
     * unset flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFlightSegment($index)
    {
        unset($this->flightSegment[$index]);
    }

    /**
     * Gets as flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight number.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationOptionType\FlightSegmentAType[]
     */
    public function getFlightSegment()
    {
        return $this->flightSegment;
    }

    /**
     * Sets a new flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight number.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OriginDestinationOptionType\FlightSegmentAType[] $flightSegment
     * @return self
     */
    public function setFlightSegment(array $flightSegment)
    {
        $this->flightSegment = $flightSegment;
        return $this;
    }


}

