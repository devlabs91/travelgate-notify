<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailCoreType;

use Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType;

/**
 * Class representing ReferenceAType
 */
class ReferenceAType extends UniqueIDType
{

    /**
     * The date and time at which this availability quote was made available.
     *
     * @property \DateTime $dateTime
     */
    private $dateTime = null;

    /**
     * Gets as dateTime
     *
     * The date and time at which this availability quote was made available.
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * The date and time at which this availability quote was made available.
     *
     * @param \DateTime $dateTime
     * @return self
     */
    public function setDateTime(\DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }


}

