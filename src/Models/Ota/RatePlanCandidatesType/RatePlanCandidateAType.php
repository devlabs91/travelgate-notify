<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType;

/**
 * Class representing RatePlanCandidateAType
 */
class RatePlanCandidateAType
{

    /**
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @property string $ratePlanType
     */
    private $ratePlanType = null;

    /**
     * A string value may be used to request a particular code or an ID if the guest qualifies for a specific rate, such as AARP, AAA, a corporate rate, etc., or to specify a negotiated code as a result of a negotiated rate.
     *
     * @property string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * A text field used to indicate a special ID code that is associated with the rate and is essential in the reservation request in order to obtain the rate. Examples are Corporate ID.
     *
     * @property string $ratePlanID
     */
    private $ratePlanID = null;

    /**
     * The Rate Plan Qualifier is used to control the sort order of RatePlans. Those Rate Plans that are not qualified will appear first, those that are qualified will appear last.
     *
     * @property bool $ratePlanQualifier
     */
    private $ratePlanQualifier = null;

    /**
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
     *
     * @property string $promotionCode
     */
    private $promotionCode = null;

    /**
     * List of the vendor codes associated with a promotion.
     *
     * @property string[] $promotionVendorCode
     */
    private $promotionVendorCode = null;

    /**
     * Hotel systems often group multiple rate plans into a single category. This refers to that category that is specific to the hotel CRS/ PMS and should not be confused with a GDS rate category.
     *
     * @property string $ratePlanCategory
     */
    private $ratePlanCategory = null;

    /**
     * A unique identifier for this rate plan candidate.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Qualifies whether the response should include prepaid rates, exclude prepaid rates, or include prepaid rates only.
     *
     * @property string $prepaidQualifier
     */
    private $prepaidQualifier = null;

    /**
     * A collection of hotel identifiers to which the rate plan applies.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType[] $hotelRefs
     */
    private $hotelRefs = null;

    /**
     * Defines which meals are included with this rate plan.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\MealsIncludedAType $mealsIncluded
     */
    private $mealsIncluded = null;

    /**
     * Defines policy types for this rate plan.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\ArrivalPolicyAType $arrivalPolicy
     */
    private $arrivalPolicy = null;

    /**
     * Defines commission attributes for this rate plan.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\RatePlanCommissionAType $ratePlanCommission
     */
    private $ratePlanCommission = null;

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
     * Gets as ratePlanCode
     *
     * A string value may be used to request a particular code or an ID if the guest qualifies for a specific rate, such as AARP, AAA, a corporate rate, etc., or to specify a negotiated code as a result of a negotiated rate.
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
     * A string value may be used to request a particular code or an ID if the guest qualifies for a specific rate, such as AARP, AAA, a corporate rate, etc., or to specify a negotiated code as a result of a negotiated rate.
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
     * Gets as ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate and is essential in the reservation request in order to obtain the rate. Examples are Corporate ID.
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
     * A text field used to indicate a special ID code that is associated with the rate and is essential in the reservation request in order to obtain the rate. Examples are Corporate ID.
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
     * Gets as ratePlanQualifier
     *
     * The Rate Plan Qualifier is used to control the sort order of RatePlans. Those Rate Plans that are not qualified will appear first, those that are qualified will appear last.
     *
     * @return bool
     */
    public function getRatePlanQualifier()
    {
        return $this->ratePlanQualifier;
    }

    /**
     * Sets a new ratePlanQualifier
     *
     * The Rate Plan Qualifier is used to control the sort order of RatePlans. Those Rate Plans that are not qualified will appear first, those that are qualified will appear last.
     *
     * @param bool $ratePlanQualifier
     * @return self
     */
    public function setRatePlanQualifier($ratePlanQualifier)
    {
        $this->ratePlanQualifier = $ratePlanQualifier;
        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;
        return $this;
    }

    /**
     * Adds as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return self
     * @param string $promotionVendorCode
     */
    public function addToPromotionVendorCode($promotionVendorCode)
    {
        $this->promotionVendorCode[] = $promotionVendorCode;
        return $this;
    }

    /**
     * isset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionVendorCode($index)
    {
        return isset($this->promotionVendorCode[$index]);
    }

    /**
     * unset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionVendorCode($index)
    {
        unset($this->promotionVendorCode[$index]);
    }

    /**
     * Gets as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return string[]
     */
    public function getPromotionVendorCode()
    {
        return $this->promotionVendorCode;
    }

    /**
     * Sets a new promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param string $promotionVendorCode
     * @return self
     */
    public function setPromotionVendorCode(array $promotionVendorCode)
    {
        $this->promotionVendorCode = $promotionVendorCode;
        return $this;
    }

    /**
     * Gets as ratePlanCategory
     *
     * Hotel systems often group multiple rate plans into a single category. This refers to that category that is specific to the hotel CRS/ PMS and should not be confused with a GDS rate category.
     *
     * @return string
     */
    public function getRatePlanCategory()
    {
        return $this->ratePlanCategory;
    }

    /**
     * Sets a new ratePlanCategory
     *
     * Hotel systems often group multiple rate plans into a single category. This refers to that category that is specific to the hotel CRS/ PMS and should not be confused with a GDS rate category.
     *
     * @param string $ratePlanCategory
     * @return self
     */
    public function setRatePlanCategory($ratePlanCategory)
    {
        $this->ratePlanCategory = $ratePlanCategory;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique identifier for this rate plan candidate.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique identifier for this rate plan candidate.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as prepaidQualifier
     *
     * Qualifies whether the response should include prepaid rates, exclude prepaid rates, or include prepaid rates only.
     *
     * @return string
     */
    public function getPrepaidQualifier()
    {
        return $this->prepaidQualifier;
    }

    /**
     * Sets a new prepaidQualifier
     *
     * Qualifies whether the response should include prepaid rates, exclude prepaid rates, or include prepaid rates only.
     *
     * @param string $prepaidQualifier
     * @return self
     */
    public function setPrepaidQualifier($prepaidQualifier)
    {
        $this->prepaidQualifier = $prepaidQualifier;
        return $this;
    }

    /**
     * Adds as hotelRef
     *
     * A collection of hotel identifiers to which the rate plan applies.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType $hotelRef
     */
    public function addToHotelRefs(\Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType $hotelRef)
    {
        $this->hotelRefs[] = $hotelRef;
        return $this;
    }

    /**
     * isset hotelRefs
     *
     * A collection of hotel identifiers to which the rate plan applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelRefs($index)
    {
        return isset($this->hotelRefs[$index]);
    }

    /**
     * unset hotelRefs
     *
     * A collection of hotel identifiers to which the rate plan applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelRefs($index)
    {
        unset($this->hotelRefs[$index]);
    }

    /**
     * Gets as hotelRefs
     *
     * A collection of hotel identifiers to which the rate plan applies.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType[]
     */
    public function getHotelRefs()
    {
        return $this->hotelRefs;
    }

    /**
     * Sets a new hotelRefs
     *
     * A collection of hotel identifiers to which the rate plan applies.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType[] $hotelRefs
     * @return self
     */
    public function setHotelRefs(array $hotelRefs)
    {
        $this->hotelRefs = $hotelRefs;
        return $this;
    }

    /**
     * Gets as mealsIncluded
     *
     * Defines which meals are included with this rate plan.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\MealsIncludedAType
     */
    public function getMealsIncluded()
    {
        return $this->mealsIncluded;
    }

    /**
     * Sets a new mealsIncluded
     *
     * Defines which meals are included with this rate plan.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\MealsIncludedAType $mealsIncluded
     * @return self
     */
    public function setMealsIncluded(\Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\MealsIncludedAType $mealsIncluded)
    {
        $this->mealsIncluded = $mealsIncluded;
        return $this;
    }

    /**
     * Gets as arrivalPolicy
     *
     * Defines policy types for this rate plan.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\ArrivalPolicyAType
     */
    public function getArrivalPolicy()
    {
        return $this->arrivalPolicy;
    }

    /**
     * Sets a new arrivalPolicy
     *
     * Defines policy types for this rate plan.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\ArrivalPolicyAType $arrivalPolicy
     * @return self
     */
    public function setArrivalPolicy(\Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\ArrivalPolicyAType $arrivalPolicy)
    {
        $this->arrivalPolicy = $arrivalPolicy;
        return $this;
    }

    /**
     * Gets as ratePlanCommission
     *
     * Defines commission attributes for this rate plan.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\RatePlanCommissionAType
     */
    public function getRatePlanCommission()
    {
        return $this->ratePlanCommission;
    }

    /**
     * Sets a new ratePlanCommission
     *
     * Defines commission attributes for this rate plan.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\RatePlanCommissionAType $ratePlanCommission
     * @return self
     */
    public function setRatePlanCommission(\Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType\RatePlanCommissionAType $ratePlanCommission)
    {
        $this->ratePlanCommission = $ratePlanCommission;
        return $this;
    }


}

