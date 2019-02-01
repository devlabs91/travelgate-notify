<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RoomSharesType;

/**
 * Class representing RoomShareAType
 */
class RoomShareAType
{

    /**
     * Collection of Guest RPH items.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType[] $guestRPHs
     */
    private $guestRPHs = null;

    /**
     * Adds as guestRPH
     *
     * Collection of Guest RPH items.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType $guestRPH
     */
    public function addToGuestRPHs(\Devlabs91\TravelgateNotify\Models\Ota\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType $guestRPH)
    {
        $this->guestRPHs[] = $guestRPH;
        return $this;
    }

    /**
     * isset guestRPHs
     *
     * Collection of Guest RPH items.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestRPHs($index)
    {
        return isset($this->guestRPHs[$index]);
    }

    /**
     * unset guestRPHs
     *
     * Collection of Guest RPH items.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestRPHs($index)
    {
        unset($this->guestRPHs[$index]);
    }

    /**
     * Gets as guestRPHs
     *
     * Collection of Guest RPH items.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType[]
     */
    public function getGuestRPHs()
    {
        return $this->guestRPHs;
    }

    /**
     * Sets a new guestRPHs
     *
     * Collection of Guest RPH items.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType[] $guestRPHs
     * @return self
     */
    public function setGuestRPHs(array $guestRPHs)
    {
        $this->guestRPHs = $guestRPHs;
        return $this;
    }


}

