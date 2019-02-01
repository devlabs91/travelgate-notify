<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\FareInfoType\FareInfoAType;

/**
 * Class representing DateAType
 */
class DateAType
{

    /**
     * The applicable date for the purpose specified in the Type attribute.
     *
     * @property \DateTime $date
     */
    private $date = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as date
     *
     * The applicable date for the purpose specified in the Type attribute.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The applicable date for the purpose specified in the Type attribute.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

