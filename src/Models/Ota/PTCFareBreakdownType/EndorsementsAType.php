<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType;

/**
 * Class representing EndorsementsAType
 */
class EndorsementsAType
{

    /**
     * Indicates whether the ticket is refundable. If true, the ticket is NOT refundable.
     *
     * @property bool $nonRefundableIndicator
     */
    private $nonRefundableIndicator = null;

    /**
     * Indicates whether the ticket is endorsable. If true, the ticket is NOT endorsable.
     *
     * @property bool $nonEndorsableIndicator
     */
    private $nonEndorsableIndicator = null;

    /**
     * Specifies ticket endorsement information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\EndorsementsAType\EndorsementAType[] $endorsement
     */
    private $endorsement = [
        
    ];

    /**
     * Gets as nonRefundableIndicator
     *
     * Indicates whether the ticket is refundable. If true, the ticket is NOT refundable.
     *
     * @return bool
     */
    public function getNonRefundableIndicator()
    {
        return $this->nonRefundableIndicator;
    }

    /**
     * Sets a new nonRefundableIndicator
     *
     * Indicates whether the ticket is refundable. If true, the ticket is NOT refundable.
     *
     * @param bool $nonRefundableIndicator
     * @return self
     */
    public function setNonRefundableIndicator($nonRefundableIndicator)
    {
        $this->nonRefundableIndicator = $nonRefundableIndicator;
        return $this;
    }

    /**
     * Gets as nonEndorsableIndicator
     *
     * Indicates whether the ticket is endorsable. If true, the ticket is NOT endorsable.
     *
     * @return bool
     */
    public function getNonEndorsableIndicator()
    {
        return $this->nonEndorsableIndicator;
    }

    /**
     * Sets a new nonEndorsableIndicator
     *
     * Indicates whether the ticket is endorsable. If true, the ticket is NOT endorsable.
     *
     * @param bool $nonEndorsableIndicator
     * @return self
     */
    public function setNonEndorsableIndicator($nonEndorsableIndicator)
    {
        $this->nonEndorsableIndicator = $nonEndorsableIndicator;
        return $this;
    }

    /**
     * Adds as endorsement
     *
     * Specifies ticket endorsement information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\EndorsementsAType\EndorsementAType $endorsement
     */
    public function addToEndorsement(\Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\EndorsementsAType\EndorsementAType $endorsement)
    {
        $this->endorsement[] = $endorsement;
        return $this;
    }

    /**
     * isset endorsement
     *
     * Specifies ticket endorsement information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndorsement($index)
    {
        return isset($this->endorsement[$index]);
    }

    /**
     * unset endorsement
     *
     * Specifies ticket endorsement information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndorsement($index)
    {
        unset($this->endorsement[$index]);
    }

    /**
     * Gets as endorsement
     *
     * Specifies ticket endorsement information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\EndorsementsAType\EndorsementAType[]
     */
    public function getEndorsement()
    {
        return $this->endorsement;
    }

    /**
     * Sets a new endorsement
     *
     * Specifies ticket endorsement information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PTCFareBreakdownType\EndorsementsAType\EndorsementAType[] $endorsement
     * @return self
     */
    public function setEndorsement(array $endorsement)
    {
        $this->endorsement = $endorsement;
        return $this;
    }


}

