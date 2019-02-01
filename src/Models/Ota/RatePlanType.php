<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing RatePlanType
 *
 * Defines the details of the rate plan as used in the booking process.Policies and descriptions that apply to a rate plan.Information significant to defining a rate plan.
 * XSD Type: RatePlanType
 */
class RatePlanType
{

    /**
     * This is used to indicate the item booked and is primarily used to exchange information with GDSs.
     *
     * @property string $bookingCode
     */
    private $bookingCode = null;

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
     * A text field used to provide a special ID code that is associated with the rate and is required in the reservation request in order to obtain the rate. Examples are a corporate ID number, a promotion code or a membership number.
     *
     * @property string $ratePlanID
     */
    private $ratePlanID = null;

    /**
     * Provides the name of the rate plan or group. Typically used with RatePlanType to further describe the rate plan.
     *
     * @property string $ratePlanName
     */
    private $ratePlanName = null;

    /**
     * The code that relates to the market being sold to (e.g., the corporate market, packages).
     *
     * @property string $marketCode
     */
    private $marketCode = null;

    /**
     * Used to specify an availability status for the rate plan.
     *
     * @property string $availabilityStatus
     */
    private $availabilityStatus = null;

    /**
     * When true, indicates proof of qualification for this rate is required.
     *
     * @property bool $iDRequiredInd
     */
    private $iDRequiredInd = null;

    /**
     * When true, the price for this rate plan can be viewed by the guest. When false, the guest must contact another entity to obtain price information.
     *
     * @property bool $priceViewableInd
     */
    private $priceViewableInd = null;

    /**
     * Indicates the type of document required by the guest to qualify for this rate plan. Refer to OpenTravel Code List Document Type (DOC).
     *
     * @property string $qualificationType
     */
    private $qualificationType = null;

    /**
     * Provides the number of rooms available within this rate plan.
     *
     * @property int $availableQuantity
     */
    private $availableQuantity = null;

    /**
     * When true, indicates if the rate is a prepaid rate.
     *
     * @property bool $prepaidIndicator
     */
    private $prepaidIndicator = null;

    /**
     * Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\GuaranteeType[] $guarantee
     */
    private $guarantee = [
        
    ];

    /**
     * Collection of cancellation penalties.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltiesType $cancelPenalties
     */
    private $cancelPenalties = null;

    /**
     * Describes the rate plan.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ParagraphType $ratePlanDescription
     */
    private $ratePlanDescription = null;

    /**
     * Defines charges that are included in this rate plan.This element allows for future extension should there be a need.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RatePlanType\RatePlanInclusionsAType $ratePlanInclusions
     */
    private $ratePlanInclusions = null;

    /**
     * Commission associated with the RatePlan. This can be a percentage or a flat amount.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CommissionType $commission
     */
    private $commission = null;

    /**
     * Defines which meals are included with this rate program.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RatePlanType\MealsIncludedAType $mealsIncluded
     */
    private $mealsIncluded = null;

    /**
     * Used to indicate whether the rate is on request or available.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RatePlanType\RestrictionStatusAType $restrictionStatus
     */
    private $restrictionStatus = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AdditionalDetailType[] $additionalDetails
     */
    private $additionalDetails = null;

    /**
     * Gets as bookingCode
     *
     * This is used to indicate the item booked and is primarily used to exchange information with GDSs.
     *
     * @return string
     */
    public function getBookingCode()
    {
        return $this->bookingCode;
    }

    /**
     * Sets a new bookingCode
     *
     * This is used to indicate the item booked and is primarily used to exchange information with GDSs.
     *
     * @param string $bookingCode
     * @return self
     */
    public function setBookingCode($bookingCode)
    {
        $this->bookingCode = $bookingCode;
        return $this;
    }

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
     * A text field used to provide a special ID code that is associated with the rate and is required in the reservation request in order to obtain the rate. Examples are a corporate ID number, a promotion code or a membership number.
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
     * A text field used to provide a special ID code that is associated with the rate and is required in the reservation request in order to obtain the rate. Examples are a corporate ID number, a promotion code or a membership number.
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
     * Gets as ratePlanName
     *
     * Provides the name of the rate plan or group. Typically used with RatePlanType to further describe the rate plan.
     *
     * @return string
     */
    public function getRatePlanName()
    {
        return $this->ratePlanName;
    }

    /**
     * Sets a new ratePlanName
     *
     * Provides the name of the rate plan or group. Typically used with RatePlanType to further describe the rate plan.
     *
     * @param string $ratePlanName
     * @return self
     */
    public function setRatePlanName($ratePlanName)
    {
        $this->ratePlanName = $ratePlanName;
        return $this;
    }

    /**
     * Gets as marketCode
     *
     * The code that relates to the market being sold to (e.g., the corporate market, packages).
     *
     * @return string
     */
    public function getMarketCode()
    {
        return $this->marketCode;
    }

    /**
     * Sets a new marketCode
     *
     * The code that relates to the market being sold to (e.g., the corporate market, packages).
     *
     * @param string $marketCode
     * @return self
     */
    public function setMarketCode($marketCode)
    {
        $this->marketCode = $marketCode;
        return $this;
    }

    /**
     * Gets as availabilityStatus
     *
     * Used to specify an availability status for the rate plan.
     *
     * @return string
     */
    public function getAvailabilityStatus()
    {
        return $this->availabilityStatus;
    }

    /**
     * Sets a new availabilityStatus
     *
     * Used to specify an availability status for the rate plan.
     *
     * @param string $availabilityStatus
     * @return self
     */
    public function setAvailabilityStatus($availabilityStatus)
    {
        $this->availabilityStatus = $availabilityStatus;
        return $this;
    }

    /**
     * Gets as iDRequiredInd
     *
     * When true, indicates proof of qualification for this rate is required.
     *
     * @return bool
     */
    public function getIDRequiredInd()
    {
        return $this->iDRequiredInd;
    }

    /**
     * Sets a new iDRequiredInd
     *
     * When true, indicates proof of qualification for this rate is required.
     *
     * @param bool $iDRequiredInd
     * @return self
     */
    public function setIDRequiredInd($iDRequiredInd)
    {
        $this->iDRequiredInd = $iDRequiredInd;
        return $this;
    }

    /**
     * Gets as priceViewableInd
     *
     * When true, the price for this rate plan can be viewed by the guest. When false, the guest must contact another entity to obtain price information.
     *
     * @return bool
     */
    public function getPriceViewableInd()
    {
        return $this->priceViewableInd;
    }

    /**
     * Sets a new priceViewableInd
     *
     * When true, the price for this rate plan can be viewed by the guest. When false, the guest must contact another entity to obtain price information.
     *
     * @param bool $priceViewableInd
     * @return self
     */
    public function setPriceViewableInd($priceViewableInd)
    {
        $this->priceViewableInd = $priceViewableInd;
        return $this;
    }

    /**
     * Gets as qualificationType
     *
     * Indicates the type of document required by the guest to qualify for this rate plan. Refer to OpenTravel Code List Document Type (DOC).
     *
     * @return string
     */
    public function getQualificationType()
    {
        return $this->qualificationType;
    }

    /**
     * Sets a new qualificationType
     *
     * Indicates the type of document required by the guest to qualify for this rate plan. Refer to OpenTravel Code List Document Type (DOC).
     *
     * @param string $qualificationType
     * @return self
     */
    public function setQualificationType($qualificationType)
    {
        $this->qualificationType = $qualificationType;
        return $this;
    }

    /**
     * Gets as availableQuantity
     *
     * Provides the number of rooms available within this rate plan.
     *
     * @return int
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * Sets a new availableQuantity
     *
     * Provides the number of rooms available within this rate plan.
     *
     * @param int $availableQuantity
     * @return self
     */
    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
        return $this;
    }

    /**
     * Gets as prepaidIndicator
     *
     * When true, indicates if the rate is a prepaid rate.
     *
     * @return bool
     */
    public function getPrepaidIndicator()
    {
        return $this->prepaidIndicator;
    }

    /**
     * Sets a new prepaidIndicator
     *
     * When true, indicates if the rate is a prepaid rate.
     *
     * @param bool $prepaidIndicator
     * @return self
     */
    public function setPrepaidIndicator($prepaidIndicator)
    {
        $this->prepaidIndicator = $prepaidIndicator;
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
     * Gets as cancelPenalties
     *
     * Collection of cancellation penalties.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltiesType
     */
    public function getCancelPenalties()
    {
        return $this->cancelPenalties;
    }

    /**
     * Sets a new cancelPenalties
     *
     * Collection of cancellation penalties.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltiesType $cancelPenalties
     * @return self
     */
    public function setCancelPenalties(\Devlabs91\TravelgateNotify\Models\Ota\CancelPenaltiesType $cancelPenalties)
    {
        $this->cancelPenalties = $cancelPenalties;
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

    /**
     * Gets as ratePlanInclusions
     *
     * Defines charges that are included in this rate plan.This element allows for future extension should there be a need.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RatePlanType\RatePlanInclusionsAType
     */
    public function getRatePlanInclusions()
    {
        return $this->ratePlanInclusions;
    }

    /**
     * Sets a new ratePlanInclusions
     *
     * Defines charges that are included in this rate plan.This element allows for future extension should there be a need.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanType\RatePlanInclusionsAType $ratePlanInclusions
     * @return self
     */
    public function setRatePlanInclusions(\Devlabs91\TravelgateNotify\Models\Ota\RatePlanType\RatePlanInclusionsAType $ratePlanInclusions)
    {
        $this->ratePlanInclusions = $ratePlanInclusions;
        return $this;
    }

    /**
     * Gets as commission
     *
     * Commission associated with the RatePlan. This can be a percentage or a flat amount.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CommissionType
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Commission associated with the RatePlan. This can be a percentage or a flat amount.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CommissionType $commission
     * @return self
     */
    public function setCommission(\Devlabs91\TravelgateNotify\Models\Ota\CommissionType $commission)
    {
        $this->commission = $commission;
        return $this;
    }

    /**
     * Gets as mealsIncluded
     *
     * Defines which meals are included with this rate program.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RatePlanType\MealsIncludedAType
     */
    public function getMealsIncluded()
    {
        return $this->mealsIncluded;
    }

    /**
     * Sets a new mealsIncluded
     *
     * Defines which meals are included with this rate program.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanType\MealsIncludedAType $mealsIncluded
     * @return self
     */
    public function setMealsIncluded(\Devlabs91\TravelgateNotify\Models\Ota\RatePlanType\MealsIncludedAType $mealsIncluded)
    {
        $this->mealsIncluded = $mealsIncluded;
        return $this;
    }

    /**
     * Gets as restrictionStatus
     *
     * Used to indicate whether the rate is on request or available.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RatePlanType\RestrictionStatusAType
     */
    public function getRestrictionStatus()
    {
        return $this->restrictionStatus;
    }

    /**
     * Sets a new restrictionStatus
     *
     * Used to indicate whether the rate is on request or available.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanType\RestrictionStatusAType $restrictionStatus
     * @return self
     */
    public function setRestrictionStatus(\Devlabs91\TravelgateNotify\Models\Ota\RatePlanType\RestrictionStatusAType $restrictionStatus)
    {
        $this->restrictionStatus = $restrictionStatus;
        return $this;
    }

    /**
     * Adds as additionalDetail
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AdditionalDetailType $additionalDetail
     */
    public function addToAdditionalDetails(\Devlabs91\TravelgateNotify\Models\Ota\AdditionalDetailType $additionalDetail)
    {
        $this->additionalDetails[] = $additionalDetail;
        return $this;
    }

    /**
     * isset additionalDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDetails($index)
    {
        return isset($this->additionalDetails[$index]);
    }

    /**
     * unset additionalDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDetails($index)
    {
        unset($this->additionalDetails[$index]);
    }

    /**
     * Gets as additionalDetails
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AdditionalDetailType[]
     */
    public function getAdditionalDetails()
    {
        return $this->additionalDetails;
    }

    /**
     * Sets a new additionalDetails
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AdditionalDetailType[] $additionalDetails
     * @return self
     */
    public function setAdditionalDetails(array $additionalDetails)
    {
        $this->additionalDetails = $additionalDetails;
        return $this;
    }


}

