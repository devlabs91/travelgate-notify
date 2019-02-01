<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomsType\MeetingRoomAType;

/**
 * Class representing CodesAType
 */
class CodesAType
{

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCodeType[] $code
     */
    private $code = [
        
    ];

    /**
     * Adds as code
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCodeType $code
     */
    public function addToCode(\Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCodeType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCodeType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\MeetingRoomCodeType[] $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }


}

