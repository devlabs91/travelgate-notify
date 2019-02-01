<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing MultimediaDescriptionsType
 *
 * Contains multimedia item(s).
 * XSD Type: MultimediaDescriptionsType
 */
class MultimediaDescriptionsType
{

    /**
     * The date and time when the collection of multimedia information was last updated.
     *
     * @property \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * A multimedia item.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MultimediaDescriptionType[] $multimediaDescription
     */
    private $multimediaDescription = [
        
    ];

    /**
     * Gets as lastUpdated
     *
     * The date and time when the collection of multimedia information was last updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when the collection of multimedia information was last updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * Adds as multimediaDescription
     *
     * A multimedia item.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MultimediaDescriptionType $multimediaDescription
     */
    public function addToMultimediaDescription(\Devlabs91\TravelgateNotify\Models\Ota\MultimediaDescriptionType $multimediaDescription)
    {
        $this->multimediaDescription[] = $multimediaDescription;
        return $this;
    }

    /**
     * isset multimediaDescription
     *
     * A multimedia item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMultimediaDescription($index)
    {
        return isset($this->multimediaDescription[$index]);
    }

    /**
     * unset multimediaDescription
     *
     * A multimedia item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMultimediaDescription($index)
    {
        unset($this->multimediaDescription[$index]);
    }

    /**
     * Gets as multimediaDescription
     *
     * A multimedia item.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MultimediaDescriptionType[]
     */
    public function getMultimediaDescription()
    {
        return $this->multimediaDescription;
    }

    /**
     * Sets a new multimediaDescription
     *
     * A multimedia item.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MultimediaDescriptionType[] $multimediaDescription
     * @return self
     */
    public function setMultimediaDescription(array $multimediaDescription)
    {
        $this->multimediaDescription = $multimediaDescription;
        return $this;
    }


}

