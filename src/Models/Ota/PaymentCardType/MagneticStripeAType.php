<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PaymentCardType;

/**
 * Class representing MagneticStripeAType
 */
class MagneticStripeAType
{

    /**
     * The binary magnetic stripe data for track 1.
     *
     * @property mixed $track1
     */
    private $track1 = null;

    /**
     * The binary magnetic stripe data for track 2.
     *
     * @property mixed $track2
     */
    private $track2 = null;

    /**
     * The binary magnetic stripe data for track 2.
     *
     * @property mixed $track3
     */
    private $track3 = null;

    /**
     * Gets as track1
     *
     * The binary magnetic stripe data for track 1.
     *
     * @return mixed
     */
    public function getTrack1()
    {
        return $this->track1;
    }

    /**
     * Sets a new track1
     *
     * The binary magnetic stripe data for track 1.
     *
     * @param mixed $track1
     * @return self
     */
    public function setTrack1($track1)
    {
        $this->track1 = $track1;
        return $this;
    }

    /**
     * Gets as track2
     *
     * The binary magnetic stripe data for track 2.
     *
     * @return mixed
     */
    public function getTrack2()
    {
        return $this->track2;
    }

    /**
     * Sets a new track2
     *
     * The binary magnetic stripe data for track 2.
     *
     * @param mixed $track2
     * @return self
     */
    public function setTrack2($track2)
    {
        $this->track2 = $track2;
        return $this;
    }

    /**
     * Gets as track3
     *
     * The binary magnetic stripe data for track 2.
     *
     * @return mixed
     */
    public function getTrack3()
    {
        return $this->track3;
    }

    /**
     * Sets a new track3
     *
     * The binary magnetic stripe data for track 2.
     *
     * @param mixed $track3
     * @return self
     */
    public function setTrack3($track3)
    {
        $this->track3 = $track3;
        return $this;
    }


}

