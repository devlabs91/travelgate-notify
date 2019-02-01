<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RateUploadType;

/**
 * Class representing GuaranteePoliciesAType
 */
class GuaranteePoliciesAType
{

    /**
     * GuaranteePolicy.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType[] $guaranteePolicy
     */
    private $guaranteePolicy = [
        
    ];

    /**
     * Adds as guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType $guaranteePolicy
     */
    public function addToGuaranteePolicy(\Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType $guaranteePolicy)
    {
        $this->guaranteePolicy[] = $guaranteePolicy;
        return $this;
    }

    /**
     * isset guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteePolicy($index)
    {
        return isset($this->guaranteePolicy[$index]);
    }

    /**
     * unset guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteePolicy($index)
    {
        unset($this->guaranteePolicy[$index]);
    }

    /**
     * Gets as guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType[]
     */
    public function getGuaranteePolicy()
    {
        return $this->guaranteePolicy;
    }

    /**
     * Sets a new guaranteePolicy
     *
     * GuaranteePolicy.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType[] $guaranteePolicy
     * @return self
     */
    public function setGuaranteePolicy(array $guaranteePolicy)
    {
        $this->guaranteePolicy = $guaranteePolicy;
        return $this;
    }


}

