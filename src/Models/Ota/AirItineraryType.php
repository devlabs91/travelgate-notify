<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing AirItineraryType
 *
 * Specifies the origin and destination of the traveler. Attributes: DirectionInd - A directional indicator that identifies a type of air booking, either one-way, round-trip, or open-jaw with the enumeration of (OneWay | RT | OpenJaw) respectively; ActionCode - Indicates the status of the booking, such as OK or Wait-List; NumberInParty - Indicates the traveler count.
 * XSD Type: AirItineraryType
 */
class AirItineraryType
{

    /**
     * Identifies whether travel is: one way, return trip, circle trip, open jaw, other.
     *
     * @property string $directionInd
     */
    private $directionInd = null;

    /**
     * A collection of OriginDestinationOption
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[] $originDestinationOptions
     */
    private $originDestinationOptions = null;

    /**
     * Gets as directionInd
     *
     * Identifies whether travel is: one way, return trip, circle trip, open jaw, other.
     *
     * @return string
     */
    public function getDirectionInd()
    {
        return $this->directionInd;
    }

    /**
     * Sets a new directionInd
     *
     * Identifies whether travel is: one way, return trip, circle trip, open jaw, other.
     *
     * @param string $directionInd
     * @return self
     */
    public function setDirectionInd($directionInd)
    {
        $this->directionInd = $directionInd;
        return $this;
    }

    /**
     * Adds as originDestinationOption
     *
     * A collection of OriginDestinationOption
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType $originDestinationOption
     */
    public function addToOriginDestinationOptions(\Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType $originDestinationOption)
    {
        $this->originDestinationOptions[] = $originDestinationOption;
        return $this;
    }

    /**
     * isset originDestinationOptions
     *
     * A collection of OriginDestinationOption
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginDestinationOptions($index)
    {
        return isset($this->originDestinationOptions[$index]);
    }

    /**
     * unset originDestinationOptions
     *
     * A collection of OriginDestinationOption
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginDestinationOptions($index)
    {
        unset($this->originDestinationOptions[$index]);
    }

    /**
     * Gets as originDestinationOptions
     *
     * A collection of OriginDestinationOption
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     */
    public function getOriginDestinationOptions()
    {
        return $this->originDestinationOptions;
    }

    /**
     * Sets a new originDestinationOptions
     *
     * A collection of OriginDestinationOption
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[] $originDestinationOptions
     * @return self
     */
    public function setOriginDestinationOptions(array $originDestinationOptions)
    {
        $this->originDestinationOptions = $originDestinationOptions;
        return $this;
    }


}

