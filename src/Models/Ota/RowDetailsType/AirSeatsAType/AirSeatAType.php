<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RowDetailsType\AirSeatsAType;

/**
 * Class representing AirSeatAType
 *
 * Describes the seat attributes.
 */
class AirSeatAType
{

    /**
     * Availability status of the particular seat. Refer to OpenTravel Code List Seat Availability (SAV).
     *
     * @property string $seatAvailability
     */
    private $seatAvailability = null;

    /**
     * Actual seat number within a particular row, typically A, B etc.
     *
     * @property string $seatNumber
     */
    private $seatNumber = null;

    /**
     * Describes the characteristics of a specific seat. Refer to OpenTravel Code List Air Seat Type (AST).
     *
     * @property string[] $seatCharacteristics
     */
    private $seatCharacteristics = null;

    /**
     * Allows that a seat may be assigned a class code.
     *
     * @property string $airBookDesigCode
     */
    private $airBookDesigCode = null;

    /**
     * Should be used for situations in which a passenger in the input request is already assigned a seat. The RPH value will correspond to the RPH in the element TravelRefNumber within the element TravelerInfoSummary.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as seatAvailability
     *
     * Availability status of the particular seat. Refer to OpenTravel Code List Seat Availability (SAV).
     *
     * @return string
     */
    public function getSeatAvailability()
    {
        return $this->seatAvailability;
    }

    /**
     * Sets a new seatAvailability
     *
     * Availability status of the particular seat. Refer to OpenTravel Code List Seat Availability (SAV).
     *
     * @param string $seatAvailability
     * @return self
     */
    public function setSeatAvailability($seatAvailability)
    {
        $this->seatAvailability = $seatAvailability;
        return $this;
    }

    /**
     * Gets as seatNumber
     *
     * Actual seat number within a particular row, typically A, B etc.
     *
     * @return string
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * Sets a new seatNumber
     *
     * Actual seat number within a particular row, typically A, B etc.
     *
     * @param string $seatNumber
     * @return self
     */
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
        return $this;
    }

    /**
     * Adds as seatCharacteristics
     *
     * Describes the characteristics of a specific seat. Refer to OpenTravel Code List Air Seat Type (AST).
     *
     * @return self
     * @param string $seatCharacteristics
     */
    public function addToSeatCharacteristics($seatCharacteristics)
    {
        $this->seatCharacteristics[] = $seatCharacteristics;
        return $this;
    }

    /**
     * isset seatCharacteristics
     *
     * Describes the characteristics of a specific seat. Refer to OpenTravel Code List Air Seat Type (AST).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeatCharacteristics($index)
    {
        return isset($this->seatCharacteristics[$index]);
    }

    /**
     * unset seatCharacteristics
     *
     * Describes the characteristics of a specific seat. Refer to OpenTravel Code List Air Seat Type (AST).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeatCharacteristics($index)
    {
        unset($this->seatCharacteristics[$index]);
    }

    /**
     * Gets as seatCharacteristics
     *
     * Describes the characteristics of a specific seat. Refer to OpenTravel Code List Air Seat Type (AST).
     *
     * @return string[]
     */
    public function getSeatCharacteristics()
    {
        return $this->seatCharacteristics;
    }

    /**
     * Sets a new seatCharacteristics
     *
     * Describes the characteristics of a specific seat. Refer to OpenTravel Code List Air Seat Type (AST).
     *
     * @param string $seatCharacteristics
     * @return self
     */
    public function setSeatCharacteristics(array $seatCharacteristics)
    {
        $this->seatCharacteristics = $seatCharacteristics;
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
     * Gets as rPH
     *
     * Should be used for situations in which a passenger in the input request is already assigned a seat. The RPH value will correspond to the RPH in the element TravelRefNumber within the element TravelerInfoSummary.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Should be used for situations in which a passenger in the input request is already assigned a seat. The RPH value will correspond to the RPH in the element TravelRefNumber within the element TravelerInfoSummary.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }


}

