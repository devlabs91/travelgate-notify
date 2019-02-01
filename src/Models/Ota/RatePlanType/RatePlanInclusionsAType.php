<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RatePlanType;

/**
 * Class representing RatePlanInclusionsAType
 */
class RatePlanInclusionsAType
{

    /**
     * @property bool $taxInclusive
     */
    private $taxInclusive = null;

    /**
     * @property bool $serviceFeeInclusive
     */
    private $serviceFeeInclusive = null;

    /**
     * Description of what is included in the rate plan.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $ratePlanInclusionDesciption
     */
    private $ratePlanInclusionDesciption = null;

    /**
     * Gets as taxInclusive
     *
     * @return bool
     */
    public function getTaxInclusive()
    {
        return $this->taxInclusive;
    }

    /**
     * Sets a new taxInclusive
     *
     * @param bool $taxInclusive
     * @return self
     */
    public function setTaxInclusive($taxInclusive)
    {
        $this->taxInclusive = $taxInclusive;
        return $this;
    }

    /**
     * Gets as serviceFeeInclusive
     *
     * @return bool
     */
    public function getServiceFeeInclusive()
    {
        return $this->serviceFeeInclusive;
    }

    /**
     * Sets a new serviceFeeInclusive
     *
     * @param bool $serviceFeeInclusive
     * @return self
     */
    public function setServiceFeeInclusive($serviceFeeInclusive)
    {
        $this->serviceFeeInclusive = $serviceFeeInclusive;
        return $this;
    }

    /**
     * Gets as ratePlanInclusionDesciption
     *
     * Description of what is included in the rate plan.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType
     */
    public function getRatePlanInclusionDesciption()
    {
        return $this->ratePlanInclusionDesciption;
    }

    /**
     * Sets a new ratePlanInclusionDesciption
     *
     * Description of what is included in the rate plan.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $ratePlanInclusionDesciption
     * @return self
     */
    public function setRatePlanInclusionDesciption(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $ratePlanInclusionDesciption)
    {
        $this->ratePlanInclusionDesciption = $ratePlanInclusionDesciption;
        return $this;
    }


}

