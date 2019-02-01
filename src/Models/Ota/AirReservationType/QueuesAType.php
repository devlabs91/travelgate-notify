<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\AirReservationType;

/**
 * Class representing QueuesAType
 */
class QueuesAType
{

    /**
     * Specifies queue information for this booking.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\QueuesAType\QueueAType[] $queue
     */
    private $queue = [
        
    ];

    /**
     * Adds as queue
     *
     * Specifies queue information for this booking.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\QueuesAType\QueueAType $queue
     */
    public function addToQueue(\Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\QueuesAType\QueueAType $queue)
    {
        $this->queue[] = $queue;
        return $this;
    }

    /**
     * isset queue
     *
     * Specifies queue information for this booking.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQueue($index)
    {
        return isset($this->queue[$index]);
    }

    /**
     * unset queue
     *
     * Specifies queue information for this booking.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQueue($index)
    {
        unset($this->queue[$index]);
    }

    /**
     * Gets as queue
     *
     * Specifies queue information for this booking.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\QueuesAType\QueueAType[]
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Sets a new queue
     *
     * Specifies queue information for this booking.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirReservationType\QueuesAType\QueueAType[] $queue
     * @return self
     */
    public function setQueue(array $queue)
    {
        $this->queue = $queue;
        return $this;
    }


}

