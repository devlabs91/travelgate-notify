<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing RatePlanLiteType
 *
 * Summary version of the RoomPlanType, initially created for the Travel Itinerary Message set.
 * XSD Type: RatePlanLiteType
 */
class RatePlanLiteType
{

    /**
     * The RatePlanCode assigned by the receiving system for the inventory item in response to a new rate plan notification. (Implementation Notes: This would only be returned when the notification is of type New and the sender is translating RatePlanCode values. On subsequent transactions for this rate plan, the sender would populate the RatePlanCode attribute with this value returned by the receiver.)
     *
     * @property string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * Indicates the starting date.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @property bool $expireDateExclusiveIndicator
     */
    private $expireDateExclusiveIndicator = null;

    /**
     * Information pertaining to the availability of the rate plan.
     *
     * @property string $rateIndicator
     */
    private $rateIndicator = null;

    /**
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @property string $ratePlanType
     */
    private $ratePlanType = null;

    /**
     * A text field used to indicate a special ID code that is associated with the rate and is required in the reservation request in order to obtain the rate. Examples are Corporate ID and Promotion Code.
     *
     * @property string $ratePlanID
     */
    private $ratePlanID = null;

    /**
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType[] $guarantee
     */
    private $guarantee = [
        
    ];

    /**
     * Describes the rate plan.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $ratePlanDescription
     */
    private $ratePlanDescription = null;

    /**
     * Gets as ratePlanCode
     *
     * The RatePlanCode assigned by the receiving system for the inventory item in response to a new rate plan notification. (Implementation Notes: This would only be returned when the notification is of type New and the sender is translating RatePlanCode values. On subsequent transactions for this rate plan, the sender would populate the RatePlanCode attribute with this value returned by the receiver.)
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * The RatePlanCode assigned by the receiving system for the inventory item in response to a new rate plan notification. (Implementation Notes: This would only be returned when the notification is of type New and the sender is translating RatePlanCode values. On subsequent transactions for this rate plan, the sender would populate the RatePlanCode attribute with this value returned by the receiver.)
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as expireDateExclusiveIndicator
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return bool
     */
    public function getExpireDateExclusiveIndicator()
    {
        return $this->expireDateExclusiveIndicator;
    }

    /**
     * Sets a new expireDateExclusiveIndicator
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param bool $expireDateExclusiveIndicator
     * @return self
     */
    public function setExpireDateExclusiveIndicator($expireDateExclusiveIndicator)
    {
        $this->expireDateExclusiveIndicator = $expireDateExclusiveIndicator;
        return $this;
    }

    /**
     * Gets as rateIndicator
     *
     * Information pertaining to the availability of the rate plan.
     *
     * @return string
     */
    public function getRateIndicator()
    {
        return $this->rateIndicator;
    }

    /**
     * Sets a new rateIndicator
     *
     * Information pertaining to the availability of the rate plan.
     *
     * @param string $rateIndicator
     * @return self
     */
    public function setRateIndicator($rateIndicator)
    {
        $this->rateIndicator = $rateIndicator;
        return $this;
    }

    /**
     * Gets as ratePlanType
     *
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @return string
     */
    public function getRatePlanType()
    {
        return $this->ratePlanType;
    }

    /**
     * Sets a new ratePlanType
     *
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @param string $ratePlanType
     * @return self
     */
    public function setRatePlanType($ratePlanType)
    {
        $this->ratePlanType = $ratePlanType;
        return $this;
    }

    /**
     * Gets as ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate and is required in the reservation request in order to obtain the rate. Examples are Corporate ID and Promotion Code.
     *
     * @return string
     */
    public function getRatePlanID()
    {
        return $this->ratePlanID;
    }

    /**
     * Sets a new ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate and is required in the reservation request in order to obtain the rate. Examples are Corporate ID and Promotion Code.
     *
     * @param string $ratePlanID
     * @return self
     */
    public function setRatePlanID($ratePlanID)
    {
        $this->ratePlanID = $ratePlanID;
        return $this;
    }

    /**
     * Adds as guarantee
     *
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType $guarantee
     */
    public function addToGuarantee(\Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType $guarantee)
    {
        $this->guarantee[] = $guarantee;
        return $this;
    }

    /**
     * isset guarantee
     *
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuarantee($index)
    {
        return isset($this->guarantee[$index]);
    }

    /**
     * unset guarantee
     *
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuarantee($index)
    {
        unset($this->guarantee[$index]);
    }

    /**
     * Gets as guarantee
     *
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType[]
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType[] $guarantee
     * @return self
     */
    public function setGuarantee(array $guarantee)
    {
        $this->guarantee = $guarantee;
        return $this;
    }

    /**
     * Gets as ratePlanDescription
     *
     * Describes the rate plan.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType
     */
    public function getRatePlanDescription()
    {
        return $this->ratePlanDescription;
    }

    /**
     * Sets a new ratePlanDescription
     *
     * Describes the rate plan.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $ratePlanDescription
     * @return self
     */
    public function setRatePlanDescription(\Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $ratePlanDescription)
    {
        $this->ratePlanDescription = $ratePlanDescription;
        return $this;
    }


}

