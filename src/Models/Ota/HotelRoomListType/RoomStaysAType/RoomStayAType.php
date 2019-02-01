<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\HotelRoomListType\RoomStaysAType;

use Devlabs91\TravelgateNotify\Models\Ota\RoomStayType;

/**
 * Class representing RoomStayAType
 */
class RoomStayAType extends RoomStayType
{

    /**
     * This attribute indicates the change to the reservation.
     *
     * @property string $roomStay
     */
    private $roomStay = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationIDsType\HotelReservationIDAType[] $hotelReservationIDs
     */
    private $hotelReservationIDs = null;

    /**
     * Collection of shared rooms for room stay.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomSharesType\RoomShareAType[] $roomShares
     */
    private $roomShares = null;

    /**
     * Provides a mechanism for uniquely identifying a room stay (e.g. this would be useful for a modification).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\SuccessType $success
     */
    private $success = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ErrorType[] $errors
     */
    private $errors = null;

    /**
     * Gets as roomStay
     *
     * This attribute indicates the change to the reservation.
     *
     * @return string
     */
    public function getRoomStay()
    {
        return $this->roomStay;
    }

    /**
     * Sets a new roomStay
     *
     * This attribute indicates the change to the reservation.
     *
     * @param string $roomStay
     * @return self
     */
    public function setRoomStay($roomStay)
    {
        $this->roomStay = $roomStay;
        return $this;
    }

    /**
     * Adds as hotelReservationID
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID
     */
    public function addToHotelReservationIDs(\Devlabs91\TravelgateNotify\Models\Ota\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID)
    {
        $this->hotelReservationIDs[] = $hotelReservationID;
        return $this;
    }

    /**
     * isset hotelReservationIDs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelReservationIDs($index)
    {
        return isset($this->hotelReservationIDs[$index]);
    }

    /**
     * unset hotelReservationIDs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelReservationIDs($index)
    {
        unset($this->hotelReservationIDs[$index]);
    }

    /**
     * Gets as hotelReservationIDs
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationIDsType\HotelReservationIDAType[]
     */
    public function getHotelReservationIDs()
    {
        return $this->hotelReservationIDs;
    }

    /**
     * Sets a new hotelReservationIDs
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelReservationIDsType\HotelReservationIDAType[] $hotelReservationIDs
     * @return self
     */
    public function setHotelReservationIDs(array $hotelReservationIDs)
    {
        $this->hotelReservationIDs = $hotelReservationIDs;
        return $this;
    }

    /**
     * Adds as roomShare
     *
     * Collection of shared rooms for room stay.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomSharesType\RoomShareAType $roomShare
     */
    public function addToRoomShares(\Devlabs91\TravelgateNotify\Models\Ota\RoomSharesType\RoomShareAType $roomShare)
    {
        $this->roomShares[] = $roomShare;
        return $this;
    }

    /**
     * isset roomShares
     *
     * Collection of shared rooms for room stay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomShares($index)
    {
        return isset($this->roomShares[$index]);
    }

    /**
     * unset roomShares
     *
     * Collection of shared rooms for room stay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomShares($index)
    {
        unset($this->roomShares[$index]);
    }

    /**
     * Gets as roomShares
     *
     * Collection of shared rooms for room stay.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomSharesType\RoomShareAType[]
     */
    public function getRoomShares()
    {
        return $this->roomShares;
    }

    /**
     * Sets a new roomShares
     *
     * Collection of shared rooms for room stay.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomSharesType\RoomShareAType[] $roomShares
     * @return self
     */
    public function setRoomShares(array $roomShares)
    {
        $this->roomShares = $roomShares;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * Provides a mechanism for uniquely identifying a room stay (e.g. this would be useful for a modification).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Provides a mechanism for uniquely identifying a room stay (e.g. this would be useful for a modification).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as success
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\SuccessType
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Sets a new success
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\SuccessType $success
     * @return self
     */
    public function setSuccess(\Devlabs91\TravelgateNotify\Models\Ota\SuccessType $success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * Adds as warning
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\WarningType $warning
     */
    public function addToWarnings(\Devlabs91\TravelgateNotify\Models\Ota\WarningType $warning)
    {
        $this->warnings[] = $warning;
        return $this;
    }

    /**
     * isset warnings
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarnings($index)
    {
        return isset($this->warnings[$index]);
    }

    /**
     * unset warnings
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarnings($index)
    {
        unset($this->warnings[$index]);
    }

    /**
     * Gets as warnings
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;
        return $this;
    }

    /**
     * Adds as error
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ErrorType $error
     */
    public function addToErrors(\Devlabs91\TravelgateNotify\Models\Ota\ErrorType $error)
    {
        $this->errors[] = $error;
        return $this;
    }

    /**
     * isset errors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }


}

