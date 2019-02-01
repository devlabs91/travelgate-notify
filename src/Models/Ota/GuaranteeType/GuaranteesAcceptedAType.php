<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType;

/**
 * Class representing GuaranteesAcceptedAType
 */
class GuaranteesAcceptedAType
{

    /**
     * Guarantee Detail.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[] $guaranteeAccepted
     */
    private $guaranteeAccepted = [
        
    ];

    /**
     * Adds as guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted
     */
    public function addToGuaranteeAccepted(\Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted)
    {
        $this->guaranteeAccepted[] = $guaranteeAccepted;
        return $this;
    }

    /**
     * isset guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteeAccepted($index)
    {
        return isset($this->guaranteeAccepted[$index]);
    }

    /**
     * unset guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteeAccepted($index)
    {
        unset($this->guaranteeAccepted[$index]);
    }

    /**
     * Gets as guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     */
    public function getGuaranteeAccepted()
    {
        return $this->guaranteeAccepted;
    }

    /**
     * Sets a new guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[] $guaranteeAccepted
     * @return self
     */
    public function setGuaranteeAccepted(array $guaranteeAccepted)
    {
        $this->guaranteeAccepted = $guaranteeAccepted;
        return $this;
    }


}

