<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType;

/**
 * Class representing AcceptableGuaranteesAType
 */
class AcceptableGuaranteesAType
{

    /**
     * The guarantee information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[] $acceptableGuarantee
     */
    private $acceptableGuarantee = [
        
    ];

    /**
     * Adds as acceptableGuarantee
     *
     * The guarantee information.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType $acceptableGuarantee
     */
    public function addToAcceptableGuarantee(\Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType $acceptableGuarantee)
    {
        $this->acceptableGuarantee[] = $acceptableGuarantee;
        return $this;
    }

    /**
     * isset acceptableGuarantee
     *
     * The guarantee information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptableGuarantee($index)
    {
        return isset($this->acceptableGuarantee[$index]);
    }

    /**
     * unset acceptableGuarantee
     *
     * The guarantee information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptableGuarantee($index)
    {
        unset($this->acceptableGuarantee[$index]);
    }

    /**
     * Gets as acceptableGuarantee
     *
     * The guarantee information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[]
     */
    public function getAcceptableGuarantee()
    {
        return $this->acceptableGuarantee;
    }

    /**
     * Sets a new acceptableGuarantee
     *
     * The guarantee information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[] $acceptableGuarantee
     * @return self
     */
    public function setAcceptableGuarantee(array $acceptableGuarantee)
    {
        $this->acceptableGuarantee = $acceptableGuarantee;
        return $this;
    }


}

