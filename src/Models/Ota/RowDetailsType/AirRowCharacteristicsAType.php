<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType;

/**
 * Class representing AirRowCharacteristicsAType
 */
class AirRowCharacteristicsAType
{

    /**
     * Describes the characteristics of a specific seat row. Refer to OpenTravel Code List Air Row Type (ROW).
     *
     * @property string[] $characteristicList
     */
    private $characteristicList = null;

    /**
     * Adds as characteristicList
     *
     * Describes the characteristics of a specific seat row. Refer to OpenTravel Code List Air Row Type (ROW).
     *
     * @return self
     * @param string $characteristicList
     */
    public function addToCharacteristicList($characteristicList)
    {
        $this->characteristicList[] = $characteristicList;
        return $this;
    }

    /**
     * isset characteristicList
     *
     * Describes the characteristics of a specific seat row. Refer to OpenTravel Code List Air Row Type (ROW).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacteristicList($index)
    {
        return isset($this->characteristicList[$index]);
    }

    /**
     * unset characteristicList
     *
     * Describes the characteristics of a specific seat row. Refer to OpenTravel Code List Air Row Type (ROW).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacteristicList($index)
    {
        unset($this->characteristicList[$index]);
    }

    /**
     * Gets as characteristicList
     *
     * Describes the characteristics of a specific seat row. Refer to OpenTravel Code List Air Row Type (ROW).
     *
     * @return string[]
     */
    public function getCharacteristicList()
    {
        return $this->characteristicList;
    }

    /**
     * Sets a new characteristicList
     *
     * Describes the characteristics of a specific seat row. Refer to OpenTravel Code List Air Row Type (ROW).
     *
     * @param string $characteristicList
     * @return self
     */
    public function setCharacteristicList(array $characteristicList)
    {
        $this->characteristicList = $characteristicList;
        return $this;
    }


}

