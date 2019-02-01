<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing EquipmentTypePrefType
 *
 * Indicates preferences for type of airplane.
 * XSD Type: EquipmentTypePref
 */
class EquipmentTypePrefType extends EquipmentType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Indicates if an airplane with multiple aisles is preferred.
     *
     * @property bool $wideBody
     */
    private $wideBody = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;
        return $this;
    }

    /**
     * Gets as wideBody
     *
     * Indicates if an airplane with multiple aisles is preferred.
     *
     * @return bool
     */
    public function getWideBody()
    {
        return $this->wideBody;
    }

    /**
     * Sets a new wideBody
     *
     * Indicates if an airplane with multiple aisles is preferred.
     *
     * @param bool $wideBody
     * @return self
     */
    public function setWideBody($wideBody)
    {
        $this->wideBody = $wideBody;
        return $this;
    }


}

