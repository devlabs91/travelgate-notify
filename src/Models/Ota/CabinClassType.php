<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing CabinClassType
 *
 * Describes the Cabin details in a seat map
 * XSD Type: CabinClassType
 */
class CabinClassType
{

    /**
     * Cabin class for which the seat map details is being given. Could be first, business or economy.
     *
     * @property string $cabinType
     */
    private $cabinType = null;

    /**
     * Name that a particular airline/ CRS may give to the cabin class
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Collection of Air Rows
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType[] $airRows
     */
    private $airRows = null;

    /**
     * Gets as cabinType
     *
     * Cabin class for which the seat map details is being given. Could be first, business or economy.
     *
     * @return string
     */
    public function getCabinType()
    {
        return $this->cabinType;
    }

    /**
     * Sets a new cabinType
     *
     * Cabin class for which the seat map details is being given. Could be first, business or economy.
     *
     * @param string $cabinType
     * @return self
     */
    public function setCabinType($cabinType)
    {
        $this->cabinType = $cabinType;
        return $this;
    }

    /**
     * Gets as name
     *
     * Name that a particular airline/ CRS may give to the cabin class
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
     * Name that a particular airline/ CRS may give to the cabin class
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
     * Adds as airRow
     *
     * Collection of Air Rows
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType $airRow
     */
    public function addToAirRows(\Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType $airRow)
    {
        $this->airRows[] = $airRow;
        return $this;
    }

    /**
     * isset airRows
     *
     * Collection of Air Rows
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirRows($index)
    {
        return isset($this->airRows[$index]);
    }

    /**
     * unset airRows
     *
     * Collection of Air Rows
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirRows($index)
    {
        unset($this->airRows[$index]);
    }

    /**
     * Gets as airRows
     *
     * Collection of Air Rows
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType[]
     */
    public function getAirRows()
    {
        return $this->airRows;
    }

    /**
     * Sets a new airRows
     *
     * Collection of Air Rows
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType[] $airRows
     * @return self
     */
    public function setAirRows(array $airRows)
    {
        $this->airRows = $airRows;
        return $this;
    }


}

