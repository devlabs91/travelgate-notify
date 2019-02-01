<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing MeetingRoomsType
 *
 * A collection of MeetingRoom objects that provide the codes and description of the meeting rooms in the hotel.
 * XSD Type: MeetingRoomsType
 */
class MeetingRoomsType
{

    /**
     * The total number of unique meeting rooms provided at the hotel facility. For example, if the hotel has a grand ballroom that breaks into Salon A, B, and C -the total number of unique meeting rooms is three.
     *
     * @property int $meetingRoomCount
     */
    private $meetingRoomCount = null;

    /**
     * The amount of room space for the smallest unique meeting room at the hotel facility.
     *
     * @property int $smallestRoomSpace
     */
    private $smallestRoomSpace = null;

    /**
     * The amount of room space for the largest unique meeting room at the hotel facility.
     *
     * @property int $largestRoomSpace
     */
    private $largestRoomSpace = null;

    /**
     * This is the numeric value associated with the measurement.
     *
     * @property float $unitOfMeasureQuantity
     */
    private $unitOfMeasureQuantity = null;

    /**
     * This is the standard unit of measure name (e.g., it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @property string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * The total amount of unique room space provided at the hotel facility. Note: when counting space, if there is grand ballroom that is comprised of Salon A, B, and C - count the total measurement of the ballroom only.
     *
     * @property int $totalRoomSpace
     */
    private $totalRoomSpace = null;

    /**
     * The largest seating capacity available in the largest meeting room - generally this is for theatre-style room setup.
     *
     * @property int $largestSeatingCapacity
     */
    private $largestSeatingCapacity = null;

    /**
     * The second largest seating capacity available in the second largest meeting room - generally this is for theatre-style room setup. This is excluding any space within the largest meeting room.
     *
     * @property int $secondLargestSeatingCapacity
     */
    private $secondLargestSeatingCapacity = null;

    /**
     * The smallest seating capacity available in a meeting room - generally this is for theatre-style room setup.
     *
     * @property int $smallestSeatingCapacity
     */
    private $smallestSeatingCapacity = null;

    /**
     * The total seating capacity available at the hotel facility.
     *
     * @property int $totalRoomSeatingCapacity
     */
    private $totalRoomSeatingCapacity = null;

    /**
     * The ceiling height of the largest meeting room.
     *
     * @property int $largestRoomHeight
     */
    private $largestRoomHeight = null;

    /**
     * Dedicated or non-dedicated space or area in which to hold a meeting.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomsType\MeetingRoomAType[] $meetingRoom
     */
    private $meetingRoom = [
        
    ];

    /**
     * Gets as meetingRoomCount
     *
     * The total number of unique meeting rooms provided at the hotel facility. For example, if the hotel has a grand ballroom that breaks into Salon A, B, and C -the total number of unique meeting rooms is three.
     *
     * @return int
     */
    public function getMeetingRoomCount()
    {
        return $this->meetingRoomCount;
    }

    /**
     * Sets a new meetingRoomCount
     *
     * The total number of unique meeting rooms provided at the hotel facility. For example, if the hotel has a grand ballroom that breaks into Salon A, B, and C -the total number of unique meeting rooms is three.
     *
     * @param int $meetingRoomCount
     * @return self
     */
    public function setMeetingRoomCount($meetingRoomCount)
    {
        $this->meetingRoomCount = $meetingRoomCount;
        return $this;
    }

    /**
     * Gets as smallestRoomSpace
     *
     * The amount of room space for the smallest unique meeting room at the hotel facility.
     *
     * @return int
     */
    public function getSmallestRoomSpace()
    {
        return $this->smallestRoomSpace;
    }

    /**
     * Sets a new smallestRoomSpace
     *
     * The amount of room space for the smallest unique meeting room at the hotel facility.
     *
     * @param int $smallestRoomSpace
     * @return self
     */
    public function setSmallestRoomSpace($smallestRoomSpace)
    {
        $this->smallestRoomSpace = $smallestRoomSpace;
        return $this;
    }

    /**
     * Gets as largestRoomSpace
     *
     * The amount of room space for the largest unique meeting room at the hotel facility.
     *
     * @return int
     */
    public function getLargestRoomSpace()
    {
        return $this->largestRoomSpace;
    }

    /**
     * Sets a new largestRoomSpace
     *
     * The amount of room space for the largest unique meeting room at the hotel facility.
     *
     * @param int $largestRoomSpace
     * @return self
     */
    public function setLargestRoomSpace($largestRoomSpace)
    {
        $this->largestRoomSpace = $largestRoomSpace;
        return $this;
    }

    /**
     * Gets as unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @return float
     */
    public function getUnitOfMeasureQuantity()
    {
        return $this->unitOfMeasureQuantity;
    }

    /**
     * Sets a new unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @param float $unitOfMeasureQuantity
     * @return self
     */
    public function setUnitOfMeasureQuantity($unitOfMeasureQuantity)
    {
        $this->unitOfMeasureQuantity = $unitOfMeasureQuantity;
        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
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
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
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
     * Gets as totalRoomSpace
     *
     * The total amount of unique room space provided at the hotel facility. Note: when counting space, if there is grand ballroom that is comprised of Salon A, B, and C - count the total measurement of the ballroom only.
     *
     * @return int
     */
    public function getTotalRoomSpace()
    {
        return $this->totalRoomSpace;
    }

    /**
     * Sets a new totalRoomSpace
     *
     * The total amount of unique room space provided at the hotel facility. Note: when counting space, if there is grand ballroom that is comprised of Salon A, B, and C - count the total measurement of the ballroom only.
     *
     * @param int $totalRoomSpace
     * @return self
     */
    public function setTotalRoomSpace($totalRoomSpace)
    {
        $this->totalRoomSpace = $totalRoomSpace;
        return $this;
    }

    /**
     * Gets as largestSeatingCapacity
     *
     * The largest seating capacity available in the largest meeting room - generally this is for theatre-style room setup.
     *
     * @return int
     */
    public function getLargestSeatingCapacity()
    {
        return $this->largestSeatingCapacity;
    }

    /**
     * Sets a new largestSeatingCapacity
     *
     * The largest seating capacity available in the largest meeting room - generally this is for theatre-style room setup.
     *
     * @param int $largestSeatingCapacity
     * @return self
     */
    public function setLargestSeatingCapacity($largestSeatingCapacity)
    {
        $this->largestSeatingCapacity = $largestSeatingCapacity;
        return $this;
    }

    /**
     * Gets as secondLargestSeatingCapacity
     *
     * The second largest seating capacity available in the second largest meeting room - generally this is for theatre-style room setup. This is excluding any space within the largest meeting room.
     *
     * @return int
     */
    public function getSecondLargestSeatingCapacity()
    {
        return $this->secondLargestSeatingCapacity;
    }

    /**
     * Sets a new secondLargestSeatingCapacity
     *
     * The second largest seating capacity available in the second largest meeting room - generally this is for theatre-style room setup. This is excluding any space within the largest meeting room.
     *
     * @param int $secondLargestSeatingCapacity
     * @return self
     */
    public function setSecondLargestSeatingCapacity($secondLargestSeatingCapacity)
    {
        $this->secondLargestSeatingCapacity = $secondLargestSeatingCapacity;
        return $this;
    }

    /**
     * Gets as smallestSeatingCapacity
     *
     * The smallest seating capacity available in a meeting room - generally this is for theatre-style room setup.
     *
     * @return int
     */
    public function getSmallestSeatingCapacity()
    {
        return $this->smallestSeatingCapacity;
    }

    /**
     * Sets a new smallestSeatingCapacity
     *
     * The smallest seating capacity available in a meeting room - generally this is for theatre-style room setup.
     *
     * @param int $smallestSeatingCapacity
     * @return self
     */
    public function setSmallestSeatingCapacity($smallestSeatingCapacity)
    {
        $this->smallestSeatingCapacity = $smallestSeatingCapacity;
        return $this;
    }

    /**
     * Gets as totalRoomSeatingCapacity
     *
     * The total seating capacity available at the hotel facility.
     *
     * @return int
     */
    public function getTotalRoomSeatingCapacity()
    {
        return $this->totalRoomSeatingCapacity;
    }

    /**
     * Sets a new totalRoomSeatingCapacity
     *
     * The total seating capacity available at the hotel facility.
     *
     * @param int $totalRoomSeatingCapacity
     * @return self
     */
    public function setTotalRoomSeatingCapacity($totalRoomSeatingCapacity)
    {
        $this->totalRoomSeatingCapacity = $totalRoomSeatingCapacity;
        return $this;
    }

    /**
     * Gets as largestRoomHeight
     *
     * The ceiling height of the largest meeting room.
     *
     * @return int
     */
    public function getLargestRoomHeight()
    {
        return $this->largestRoomHeight;
    }

    /**
     * Sets a new largestRoomHeight
     *
     * The ceiling height of the largest meeting room.
     *
     * @param int $largestRoomHeight
     * @return self
     */
    public function setLargestRoomHeight($largestRoomHeight)
    {
        $this->largestRoomHeight = $largestRoomHeight;
        return $this;
    }

    /**
     * Adds as meetingRoom
     *
     * Dedicated or non-dedicated space or area in which to hold a meeting.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomsType\MeetingRoomAType $meetingRoom
     */
    public function addToMeetingRoom(\Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomsType\MeetingRoomAType $meetingRoom)
    {
        $this->meetingRoom[] = $meetingRoom;
        return $this;
    }

    /**
     * isset meetingRoom
     *
     * Dedicated or non-dedicated space or area in which to hold a meeting.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeetingRoom($index)
    {
        return isset($this->meetingRoom[$index]);
    }

    /**
     * unset meetingRoom
     *
     * Dedicated or non-dedicated space or area in which to hold a meeting.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeetingRoom($index)
    {
        unset($this->meetingRoom[$index]);
    }

    /**
     * Gets as meetingRoom
     *
     * Dedicated or non-dedicated space or area in which to hold a meeting.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomsType\MeetingRoomAType[]
     */
    public function getMeetingRoom()
    {
        return $this->meetingRoom;
    }

    /**
     * Sets a new meetingRoom
     *
     * Dedicated or non-dedicated space or area in which to hold a meeting.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomsType\MeetingRoomAType[] $meetingRoom
     * @return self
     */
    public function setMeetingRoom(array $meetingRoom)
    {
        $this->meetingRoom = $meetingRoom;
        return $this;
    }


}

