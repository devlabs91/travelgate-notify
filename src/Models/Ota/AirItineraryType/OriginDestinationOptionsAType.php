<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType;

/**
 * Class representing OriginDestinationOptionsAType
 */
class OriginDestinationOptionsAType
{

    /**
     * A container for OriginDestinationOptionType.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[] $originDestinationOption
     */
    private $originDestinationOption = [
        
    ];

    /**
     * Adds as originDestinationOption
     *
     * A container for OriginDestinationOptionType.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType $originDestinationOption
     */
    public function addToOriginDestinationOption(\Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType $originDestinationOption)
    {
        $this->originDestinationOption[] = $originDestinationOption;
        return $this;
    }

    /**
     * isset originDestinationOption
     *
     * A container for OriginDestinationOptionType.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginDestinationOption($index)
    {
        return isset($this->originDestinationOption[$index]);
    }

    /**
     * unset originDestinationOption
     *
     * A container for OriginDestinationOptionType.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginDestinationOption($index)
    {
        unset($this->originDestinationOption[$index]);
    }

    /**
     * Gets as originDestinationOption
     *
     * A container for OriginDestinationOptionType.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     */
    public function getOriginDestinationOption()
    {
        return $this->originDestinationOption;
    }

    /**
     * Sets a new originDestinationOption
     *
     * A container for OriginDestinationOptionType.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[] $originDestinationOption
     * @return self
     */
    public function setOriginDestinationOption(array $originDestinationOption)
    {
        $this->originDestinationOption = $originDestinationOption;
        return $this;
    }


}

