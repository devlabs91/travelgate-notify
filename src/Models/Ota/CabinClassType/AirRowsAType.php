<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\CabinClassType;

/**
 * Class representing AirRowsAType
 */
class AirRowsAType
{

    /**
     * Row in a Cabin class of a flight
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType[] $airRow
     */
    private $airRow = [
        
    ];

    /**
     * Adds as airRow
     *
     * Row in a Cabin class of a flight
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType $airRow
     */
    public function addToAirRow(\Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType $airRow)
    {
        $this->airRow[] = $airRow;
        return $this;
    }

    /**
     * isset airRow
     *
     * Row in a Cabin class of a flight
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirRow($index)
    {
        return isset($this->airRow[$index]);
    }

    /**
     * unset airRow
     *
     * Row in a Cabin class of a flight
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirRow($index)
    {
        unset($this->airRow[$index]);
    }

    /**
     * Gets as airRow
     *
     * Row in a Cabin class of a flight
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType[]
     */
    public function getAirRow()
    {
        return $this->airRow;
    }

    /**
     * Sets a new airRow
     *
     * Row in a Cabin class of a flight
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType[] $airRow
     * @return self
     */
    public function setAirRow(array $airRow)
    {
        $this->airRow = $airRow;
        return $this;
    }


}

