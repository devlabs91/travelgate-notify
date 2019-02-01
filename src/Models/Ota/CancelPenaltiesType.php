<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing CancelPenaltiesType
 *
 * A collection of CancelPenalty.
 * XSD Type: CancelPenaltiesType
 */
class CancelPenaltiesType
{

    /**
     * When true, indicates a cancel policy exits. When false, no cancel policy exists. Typically this indicator is used when details are not being sent.
     *
     * @property bool $cancelPolicyIndicator
     */
    private $cancelPolicyIndicator = null;

    /**
     * Defines the cancellation penalty of the hotel facility.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltyType[] $cancelPenalty
     */
    private $cancelPenalty = [
        
    ];

    /**
     * Gets as cancelPolicyIndicator
     *
     * When true, indicates a cancel policy exits. When false, no cancel policy exists. Typically this indicator is used when details are not being sent.
     *
     * @return bool
     */
    public function getCancelPolicyIndicator()
    {
        return $this->cancelPolicyIndicator;
    }

    /**
     * Sets a new cancelPolicyIndicator
     *
     * When true, indicates a cancel policy exits. When false, no cancel policy exists. Typically this indicator is used when details are not being sent.
     *
     * @param bool $cancelPolicyIndicator
     * @return self
     */
    public function setCancelPolicyIndicator($cancelPolicyIndicator)
    {
        $this->cancelPolicyIndicator = $cancelPolicyIndicator;
        return $this;
    }

    /**
     * Adds as cancelPenalty
     *
     * Defines the cancellation penalty of the hotel facility.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltyType $cancelPenalty
     */
    public function addToCancelPenalty(\Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltyType $cancelPenalty)
    {
        $this->cancelPenalty[] = $cancelPenalty;
        return $this;
    }

    /**
     * isset cancelPenalty
     *
     * Defines the cancellation penalty of the hotel facility.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancelPenalty($index)
    {
        return isset($this->cancelPenalty[$index]);
    }

    /**
     * unset cancelPenalty
     *
     * Defines the cancellation penalty of the hotel facility.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancelPenalty($index)
    {
        unset($this->cancelPenalty[$index]);
    }

    /**
     * Gets as cancelPenalty
     *
     * Defines the cancellation penalty of the hotel facility.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltyType[]
     */
    public function getCancelPenalty()
    {
        return $this->cancelPenalty;
    }

    /**
     * Sets a new cancelPenalty
     *
     * Defines the cancellation penalty of the hotel facility.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltyType[] $cancelPenalty
     * @return self
     */
    public function setCancelPenalty(array $cancelPenalty)
    {
        $this->cancelPenalty = $cancelPenalty;
        return $this;
    }


}

