<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing RelativePositionType
 *
 * The RelativePosition object contains information about the direction, distance and travel time to/from a facility (hotel, car rental location, or airport) or to/from a designated location.
 * XSD Type: RelativePositionType
 */
class RelativePositionType extends TransportationsType
{

    /**
     * Defines the cardinal direction (e.g., north, south, southwest).
     *
     * @property string $direction
     */
    private $direction = null;

    /**
     * Defines the distance between two points.
     *
     * @property string $distance
     */
    private $distance = null;

    /**
     * Candidate for potential removal, usage is not recommended. Deprecation Warning added in 2006A.
     *  Provides the ability to specify the unit of measure to which the "Distance" attribute is referring.
     *
     * @property string $distanceUnitName
     */
    private $distanceUnitName = null;

    /**
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * The indicator for whether this location is nearest.
     *
     * @property bool $nearest
     */
    private $nearest = null;

    /**
     * This is the object referred to by the relative position (e.g. cross street, airport). Refer to OpenTravel Code List Index Point Code (IPC).
     *
     * @property string $indexPointCode
     */
    private $indexPointCode = null;

    /**
     * This is used to accommodate a city name, rail station name etc. when using the indexPoint attribute.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Indicates whether the reference point is considered the main reference point for the specific type of IndexPointCode (e.g., in Dallas, where IndexPointCode=airport Dallas/Fort Worth airport would be the primary airport even if another airport such as Love Field is closer).
     *
     * @property bool $primaryIndicator
     */
    private $primaryIndicator = null;

    /**
     * Used to indicate whether the context is to a facility or from a facility.
     *
     * @property string $toFrom
     */
    private $toFrom = null;

    /**
     * When true, the distance information is approximate.
     *
     * @property bool $approximateDistanceInd
     */
    private $approximateDistanceInd = null;

    /**
     * Gets as direction
     *
     * Defines the cardinal direction (e.g., north, south, southwest).
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Sets a new direction
     *
     * Defines the cardinal direction (e.g., north, south, southwest).
     *
     * @param string $direction
     * @return self
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * Gets as distance
     *
     * Defines the distance between two points.
     *
     * @return string
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Sets a new distance
     *
     * Defines the distance between two points.
     *
     * @param string $distance
     * @return self
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * Gets as distanceUnitName
     *
     * Candidate for potential removal, usage is not recommended. Deprecation Warning added in 2006A.
     *  Provides the ability to specify the unit of measure to which the "Distance" attribute is referring.
     *
     * @return string
     */
    public function getDistanceUnitName()
    {
        return $this->distanceUnitName;
    }

    /**
     * Sets a new distanceUnitName
     *
     * Candidate for potential removal, usage is not recommended. Deprecation Warning added in 2006A.
     *  Provides the ability to specify the unit of measure to which the "Distance" attribute is referring.
     *
     * @param string $distanceUnitName
     * @return self
     */
    public function setDistanceUnitName($distanceUnitName)
    {
        $this->distanceUnitName = $distanceUnitName;
        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;
        return $this;
    }

    /**
     * Gets as nearest
     *
     * The indicator for whether this location is nearest.
     *
     * @return bool
     */
    public function getNearest()
    {
        return $this->nearest;
    }

    /**
     * Sets a new nearest
     *
     * The indicator for whether this location is nearest.
     *
     * @param bool $nearest
     * @return self
     */
    public function setNearest($nearest)
    {
        $this->nearest = $nearest;
        return $this;
    }

    /**
     * Gets as indexPointCode
     *
     * This is the object referred to by the relative position (e.g. cross street, airport). Refer to OpenTravel Code List Index Point Code (IPC).
     *
     * @return string
     */
    public function getIndexPointCode()
    {
        return $this->indexPointCode;
    }

    /**
     * Sets a new indexPointCode
     *
     * This is the object referred to by the relative position (e.g. cross street, airport). Refer to OpenTravel Code List Index Point Code (IPC).
     *
     * @param string $indexPointCode
     * @return self
     */
    public function setIndexPointCode($indexPointCode)
    {
        $this->indexPointCode = $indexPointCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * This is used to accommodate a city name, rail station name etc. when using the indexPoint attribute.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * This is used to accommodate a city name, rail station name etc. when using the indexPoint attribute.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as primaryIndicator
     *
     * Indicates whether the reference point is considered the main reference point for the specific type of IndexPointCode (e.g., in Dallas, where IndexPointCode=airport Dallas/Fort Worth airport would be the primary airport even if another airport such as Love Field is closer).
     *
     * @return bool
     */
    public function getPrimaryIndicator()
    {
        return $this->primaryIndicator;
    }

    /**
     * Sets a new primaryIndicator
     *
     * Indicates whether the reference point is considered the main reference point for the specific type of IndexPointCode (e.g., in Dallas, where IndexPointCode=airport Dallas/Fort Worth airport would be the primary airport even if another airport such as Love Field is closer).
     *
     * @param bool $primaryIndicator
     * @return self
     */
    public function setPrimaryIndicator($primaryIndicator)
    {
        $this->primaryIndicator = $primaryIndicator;
        return $this;
    }

    /**
     * Gets as toFrom
     *
     * Used to indicate whether the context is to a facility or from a facility.
     *
     * @return string
     */
    public function getToFrom()
    {
        return $this->toFrom;
    }

    /**
     * Sets a new toFrom
     *
     * Used to indicate whether the context is to a facility or from a facility.
     *
     * @param string $toFrom
     * @return self
     */
    public function setToFrom($toFrom)
    {
        $this->toFrom = $toFrom;
        return $this;
    }

    /**
     * Gets as approximateDistanceInd
     *
     * When true, the distance information is approximate.
     *
     * @return bool
     */
    public function getApproximateDistanceInd()
    {
        return $this->approximateDistanceInd;
    }

    /**
     * Sets a new approximateDistanceInd
     *
     * When true, the distance information is approximate.
     *
     * @param bool $approximateDistanceInd
     * @return self
     */
    public function setApproximateDistanceInd($approximateDistanceInd)
    {
        $this->approximateDistanceInd = $approximateDistanceInd;
        return $this;
    }


}

