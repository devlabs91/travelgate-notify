<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing RowDetailsType
 *
 * Describes the row details in a seat map
 * XSD Type: RowDetailsType
 */
class RowDetailsType
{

    /**
     * Maximum number of seats per row.
     *
     * @property int $maxNumberOfSeats
     */
    private $maxNumberOfSeats = null;

    /**
     * Specifies the actual row number in the seat map.
     *
     * @property int $rowNumber
     */
    private $rowNumber = null;

    /**
     * Allows that a seat may be assigned a class code.
     *
     * @property string $airBookDesigCode
     */
    private $airBookDesigCode = null;

    /**
     * A Collection of Air Seat
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirSeatsAType\AirSeatAType[] $airSeats
     */
    private $airSeats = null;

    /**
     * Contains a list of characteristics of an air row.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirRowCharacteristicsAType $airRowCharacteristics
     */
    private $airRowCharacteristics = null;

    /**
     * Gets as maxNumberOfSeats
     *
     * Maximum number of seats per row.
     *
     * @return int
     */
    public function getMaxNumberOfSeats()
    {
        return $this->maxNumberOfSeats;
    }

    /**
     * Sets a new maxNumberOfSeats
     *
     * Maximum number of seats per row.
     *
     * @param int $maxNumberOfSeats
     * @return self
     */
    public function setMaxNumberOfSeats($maxNumberOfSeats)
    {
        $this->maxNumberOfSeats = $maxNumberOfSeats;
        return $this;
    }

    /**
     * Gets as rowNumber
     *
     * Specifies the actual row number in the seat map.
     *
     * @return int
     */
    public function getRowNumber()
    {
        return $this->rowNumber;
    }

    /**
     * Sets a new rowNumber
     *
     * Specifies the actual row number in the seat map.
     *
     * @param int $rowNumber
     * @return self
     */
    public function setRowNumber($rowNumber)
    {
        $this->rowNumber = $rowNumber;
        return $this;
    }

    /**
     * Gets as airBookDesigCode
     *
     * Allows that a seat may be assigned a class code.
     *
     * @return string
     */
    public function getAirBookDesigCode()
    {
        return $this->airBookDesigCode;
    }

    /**
     * Sets a new airBookDesigCode
     *
     * Allows that a seat may be assigned a class code.
     *
     * @param string $airBookDesigCode
     * @return self
     */
    public function setAirBookDesigCode($airBookDesigCode)
    {
        $this->airBookDesigCode = $airBookDesigCode;
        return $this;
    }

    /**
     * Adds as airSeat
     *
     * A Collection of Air Seat
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirSeatsAType\AirSeatAType $airSeat
     */
    public function addToAirSeats(\Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirSeatsAType\AirSeatAType $airSeat)
    {
        $this->airSeats[] = $airSeat;
        return $this;
    }

    /**
     * isset airSeats
     *
     * A Collection of Air Seat
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirSeats($index)
    {
        return isset($this->airSeats[$index]);
    }

    /**
     * unset airSeats
     *
     * A Collection of Air Seat
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirSeats($index)
    {
        unset($this->airSeats[$index]);
    }

    /**
     * Gets as airSeats
     *
     * A Collection of Air Seat
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirSeatsAType\AirSeatAType[]
     */
    public function getAirSeats()
    {
        return $this->airSeats;
    }

    /**
     * Sets a new airSeats
     *
     * A Collection of Air Seat
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirSeatsAType\AirSeatAType[] $airSeats
     * @return self
     */
    public function setAirSeats(array $airSeats)
    {
        $this->airSeats = $airSeats;
        return $this;
    }

    /**
     * Gets as airRowCharacteristics
     *
     * Contains a list of characteristics of an air row.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirRowCharacteristicsAType
     */
    public function getAirRowCharacteristics()
    {
        return $this->airRowCharacteristics;
    }

    /**
     * Sets a new airRowCharacteristics
     *
     * Contains a list of characteristics of an air row.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirRowCharacteristicsAType $airRowCharacteristics
     * @return self
     */
    public function setAirRowCharacteristics(\Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirRowCharacteristicsAType $airRowCharacteristics)
    {
        $this->airRowCharacteristics = $airRowCharacteristics;
        return $this;
    }


}

