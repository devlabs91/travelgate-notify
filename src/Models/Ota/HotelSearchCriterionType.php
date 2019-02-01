<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing HotelSearchCriterionType
 *
 * A collection of Profile objects or Unique IDs of Profiles.
 * XSD Type: HotelSearchCriterionType
 */
class HotelSearchCriterionType extends ItemSearchCriterionType
{

    /**
     * Hotel level amenities for searches.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelAmenityAType[] $hotelAmenity
     */
    private $hotelAmenity = [
        
    ];

    /**
     * Room level amenities for searches.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType[] $roomAmenity
     */
    private $roomAmenity = [
        
    ];

    /**
     * Used to search for hotels based on hotel features.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelFeatureAType[] $hotelFeature
     */
    private $hotelFeature = [
        
    ];

    /**
     * An element that identifies the hotel ratings.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\AwardAType[] $award
     */
    private $award = [
        
    ];

    /**
     * Identifies recreation facilities or amenities of interest.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\RecreationAType[] $recreation
     */
    private $recreation = [
        
    ];

    /**
     * Identifies services of interest.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\ServiceAType[] $service
     */
    private $service = [
        
    ];

    /**
     * Identifies transportation facilities.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\TransportationAType[] $transportation
     */
    private $transportation = [
        
    ];

    /**
     * Range of dates, or fixed set of dates for Availability Request. Date range can also be specified by using start dates and number of nights (minimum, maximum or fixed).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\DateTimeSpanType $stayDateRange
     */
    private $stayDateRange = null;

    /**
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\RateRangeAType[] $rateRange
     */
    private $rateRange = [
        
    ];

    /**
     * Collection of requested rate plans.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType[] $ratePlanCandidates
     */
    private $ratePlanCandidates = null;

    /**
     * A collection of profile objects or unique IDs of profiles.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType[] $profiles
     */
    private $profiles = null;

    /**
     * Collection of room stay candidates.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RoomStayCandidateType[] $roomStayCandidates
     */
    private $roomStayCandidates = null;

    /**
     * Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType[] $acceptedPayments
     */
    private $acceptedPayments = null;

    /**
     * Used to search for hotels based on available media content.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\MediaAType[] $media
     */
    private $media = [
        
    ];

    /**
     * Used to search for hotels based on meeting facility requirements.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelMeetingFacilityAType $hotelMeetingFacility
     */
    private $hotelMeetingFacility = null;

    /**
     * Used to search for hotels that offer types of meal plan, such as "all-inclusive". This matches against the static property content, not the meal included in the rate.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\MealPlanAType $mealPlan
     */
    private $mealPlan = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelAmenityAType $hotelAmenity
     */
    public function addToHotelAmenity(\Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelAmenityAType $hotelAmenity)
    {
        $this->hotelAmenity[] = $hotelAmenity;
        return $this;
    }

    /**
     * isset hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelAmenity($index)
    {
        return isset($this->hotelAmenity[$index]);
    }

    /**
     * unset hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelAmenity($index)
    {
        unset($this->hotelAmenity[$index]);
    }

    /**
     * Gets as hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelAmenityAType[]
     */
    public function getHotelAmenity()
    {
        return $this->hotelAmenity;
    }

    /**
     * Sets a new hotelAmenity
     *
     * Hotel level amenities for searches.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelAmenityAType[] $hotelAmenity
     * @return self
     */
    public function setHotelAmenity(array $hotelAmenity)
    {
        $this->hotelAmenity = $hotelAmenity;
        return $this;
    }

    /**
     * Adds as roomAmenity
     *
     * Room level amenities for searches.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType $roomAmenity
     */
    public function addToRoomAmenity(\Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType $roomAmenity)
    {
        $this->roomAmenity[] = $roomAmenity;
        return $this;
    }

    /**
     * isset roomAmenity
     *
     * Room level amenities for searches.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomAmenity($index)
    {
        return isset($this->roomAmenity[$index]);
    }

    /**
     * unset roomAmenity
     *
     * Room level amenities for searches.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomAmenity($index)
    {
        unset($this->roomAmenity[$index]);
    }

    /**
     * Gets as roomAmenity
     *
     * Room level amenities for searches.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType[]
     */
    public function getRoomAmenity()
    {
        return $this->roomAmenity;
    }

    /**
     * Sets a new roomAmenity
     *
     * Room level amenities for searches.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomAmenityPrefType[] $roomAmenity
     * @return self
     */
    public function setRoomAmenity(array $roomAmenity)
    {
        $this->roomAmenity = $roomAmenity;
        return $this;
    }

    /**
     * Adds as hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelFeatureAType $hotelFeature
     */
    public function addToHotelFeature(\Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelFeatureAType $hotelFeature)
    {
        $this->hotelFeature[] = $hotelFeature;
        return $this;
    }

    /**
     * isset hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelFeature($index)
    {
        return isset($this->hotelFeature[$index]);
    }

    /**
     * unset hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelFeature($index)
    {
        unset($this->hotelFeature[$index]);
    }

    /**
     * Gets as hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelFeatureAType[]
     */
    public function getHotelFeature()
    {
        return $this->hotelFeature;
    }

    /**
     * Sets a new hotelFeature
     *
     * Used to search for hotels based on hotel features.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelFeatureAType[] $hotelFeature
     * @return self
     */
    public function setHotelFeature(array $hotelFeature)
    {
        $this->hotelFeature = $hotelFeature;
        return $this;
    }

    /**
     * Adds as award
     *
     * An element that identifies the hotel ratings.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\AwardAType $award
     */
    public function addToAward(\Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\AwardAType $award)
    {
        $this->award[] = $award;
        return $this;
    }

    /**
     * isset award
     *
     * An element that identifies the hotel ratings.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAward($index)
    {
        return isset($this->award[$index]);
    }

    /**
     * unset award
     *
     * An element that identifies the hotel ratings.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAward($index)
    {
        unset($this->award[$index]);
    }

    /**
     * Gets as award
     *
     * An element that identifies the hotel ratings.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\AwardAType[]
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * Sets a new award
     *
     * An element that identifies the hotel ratings.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\AwardAType[] $award
     * @return self
     */
    public function setAward(array $award)
    {
        $this->award = $award;
        return $this;
    }

    /**
     * Adds as recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\RecreationAType $recreation
     */
    public function addToRecreation(\Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\RecreationAType $recreation)
    {
        $this->recreation[] = $recreation;
        return $this;
    }

    /**
     * isset recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecreation($index)
    {
        return isset($this->recreation[$index]);
    }

    /**
     * unset recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecreation($index)
    {
        unset($this->recreation[$index]);
    }

    /**
     * Gets as recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\RecreationAType[]
     */
    public function getRecreation()
    {
        return $this->recreation;
    }

    /**
     * Sets a new recreation
     *
     * Identifies recreation facilities or amenities of interest.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\RecreationAType[] $recreation
     * @return self
     */
    public function setRecreation(array $recreation)
    {
        $this->recreation = $recreation;
        return $this;
    }

    /**
     * Adds as service
     *
     * Identifies services of interest.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\ServiceAType $service
     */
    public function addToService(\Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\ServiceAType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * Identifies services of interest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Identifies services of interest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Identifies services of interest.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Identifies services of interest.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\ServiceAType[] $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Adds as transportation
     *
     * Identifies transportation facilities.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\TransportationAType $transportation
     */
    public function addToTransportation(\Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\TransportationAType $transportation)
    {
        $this->transportation[] = $transportation;
        return $this;
    }

    /**
     * isset transportation
     *
     * Identifies transportation facilities.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportation($index)
    {
        return isset($this->transportation[$index]);
    }

    /**
     * unset transportation
     *
     * Identifies transportation facilities.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportation($index)
    {
        unset($this->transportation[$index]);
    }

    /**
     * Gets as transportation
     *
     * Identifies transportation facilities.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\TransportationAType[]
     */
    public function getTransportation()
    {
        return $this->transportation;
    }

    /**
     * Sets a new transportation
     *
     * Identifies transportation facilities.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\TransportationAType[] $transportation
     * @return self
     */
    public function setTransportation(array $transportation)
    {
        $this->transportation = $transportation;
        return $this;
    }

    /**
     * Gets as stayDateRange
     *
     * Range of dates, or fixed set of dates for Availability Request. Date range can also be specified by using start dates and number of nights (minimum, maximum or fixed).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\DateTimeSpanType
     */
    public function getStayDateRange()
    {
        return $this->stayDateRange;
    }

    /**
     * Sets a new stayDateRange
     *
     * Range of dates, or fixed set of dates for Availability Request. Date range can also be specified by using start dates and number of nights (minimum, maximum or fixed).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\DateTimeSpanType $stayDateRange
     * @return self
     */
    public function setStayDateRange(\Devlabs91\TravelgateNotify\Models\Ota\DateTimeSpanType $stayDateRange)
    {
        $this->stayDateRange = $stayDateRange;
        return $this;
    }

    /**
     * Adds as rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\RateRangeAType $rateRange
     */
    public function addToRateRange(\Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\RateRangeAType $rateRange)
    {
        $this->rateRange[] = $rateRange;
        return $this;
    }

    /**
     * isset rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRateRange($index)
    {
        return isset($this->rateRange[$index]);
    }

    /**
     * unset rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRateRange($index)
    {
        unset($this->rateRange[$index]);
    }

    /**
     * Gets as rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\RateRangeAType[]
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\RateRangeAType[] $rateRange
     * @return self
     */
    public function setRateRange(array $rateRange)
    {
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * Adds as ratePlanCandidate
     *
     * Collection of requested rate plans.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType $ratePlanCandidate
     */
    public function addToRatePlanCandidates(\Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType $ratePlanCandidate)
    {
        $this->ratePlanCandidates[] = $ratePlanCandidate;
        return $this;
    }

    /**
     * isset ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlanCandidates($index)
    {
        return isset($this->ratePlanCandidates[$index]);
    }

    /**
     * unset ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlanCandidates($index)
    {
        unset($this->ratePlanCandidates[$index]);
    }

    /**
     * Gets as ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType[]
     */
    public function getRatePlanCandidates()
    {
        return $this->ratePlanCandidates;
    }

    /**
     * Sets a new ratePlanCandidates
     *
     * Collection of requested rate plans.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RatePlanCandidatesType\RatePlanCandidateAType[] $ratePlanCandidates
     * @return self
     */
    public function setRatePlanCandidates(array $ratePlanCandidates)
    {
        $this->ratePlanCandidates = $ratePlanCandidates;
        return $this;
    }

    /**
     * Adds as profileInfo
     *
     * A collection of profile objects or unique IDs of profiles.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType $profileInfo
     */
    public function addToProfiles(\Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;
        return $this;
    }

    /**
     * isset profiles
     *
     * A collection of profile objects or unique IDs of profiles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * A collection of profile objects or unique IDs of profiles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * A collection of profile objects or unique IDs of profiles.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * A collection of profile objects or unique IDs of profiles.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\ProfilesType\ProfileInfoAType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;
        return $this;
    }

    /**
     * Adds as roomStayCandidate
     *
     * Collection of room stay candidates.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomStayCandidateType $roomStayCandidate
     */
    public function addToRoomStayCandidates(\Devlabs91\TravelgateNotify\Models\Ota\RoomStayCandidateType $roomStayCandidate)
    {
        $this->roomStayCandidates[] = $roomStayCandidate;
        return $this;
    }

    /**
     * isset roomStayCandidates
     *
     * Collection of room stay candidates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomStayCandidates($index)
    {
        return isset($this->roomStayCandidates[$index]);
    }

    /**
     * unset roomStayCandidates
     *
     * Collection of room stay candidates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomStayCandidates($index)
    {
        unset($this->roomStayCandidates[$index]);
    }

    /**
     * Gets as roomStayCandidates
     *
     * Collection of room stay candidates.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RoomStayCandidateType[]
     */
    public function getRoomStayCandidates()
    {
        return $this->roomStayCandidates;
    }

    /**
     * Sets a new roomStayCandidates
     *
     * Collection of room stay candidates.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RoomStayCandidateType[] $roomStayCandidates
     * @return self
     */
    public function setRoomStayCandidates(array $roomStayCandidates)
    {
        $this->roomStayCandidates = $roomStayCandidates;
        return $this;
    }

    /**
     * Adds as acceptedPayment
     *
     * Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType $acceptedPayment
     */
    public function addToAcceptedPayments(\Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType $acceptedPayment)
    {
        $this->acceptedPayments[] = $acceptedPayment;
        return $this;
    }

    /**
     * isset acceptedPayments
     *
     * Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptedPayments($index)
    {
        return isset($this->acceptedPayments[$index]);
    }

    /**
     * unset acceptedPayments
     *
     * Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptedPayments($index)
    {
        unset($this->acceptedPayments[$index]);
    }

    /**
     * Gets as acceptedPayments
     *
     * Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType[]
     */
    public function getAcceptedPayments()
    {
        return $this->acceptedPayments;
    }

    /**
     * Sets a new acceptedPayments
     *
     * Provides the ability to search for hotel(s) based on whether they accept specific form(s) of payment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\PaymentFormType[] $acceptedPayments
     * @return self
     */
    public function setAcceptedPayments(array $acceptedPayments)
    {
        $this->acceptedPayments = $acceptedPayments;
        return $this;
    }

    /**
     * Adds as media
     *
     * Used to search for hotels based on available media content.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\MediaAType $media
     */
    public function addToMedia(\Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\MediaAType $media)
    {
        $this->media[] = $media;
        return $this;
    }

    /**
     * isset media
     *
     * Used to search for hotels based on available media content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMedia($index)
    {
        return isset($this->media[$index]);
    }

    /**
     * unset media
     *
     * Used to search for hotels based on available media content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMedia($index)
    {
        unset($this->media[$index]);
    }

    /**
     * Gets as media
     *
     * Used to search for hotels based on available media content.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\MediaAType[]
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Sets a new media
     *
     * Used to search for hotels based on available media content.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\MediaAType[] $media
     * @return self
     */
    public function setMedia(array $media)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * Gets as hotelMeetingFacility
     *
     * Used to search for hotels based on meeting facility requirements.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelMeetingFacilityAType
     */
    public function getHotelMeetingFacility()
    {
        return $this->hotelMeetingFacility;
    }

    /**
     * Sets a new hotelMeetingFacility
     *
     * Used to search for hotels based on meeting facility requirements.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelMeetingFacilityAType $hotelMeetingFacility
     * @return self
     */
    public function setHotelMeetingFacility(\Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\HotelMeetingFacilityAType $hotelMeetingFacility)
    {
        $this->hotelMeetingFacility = $hotelMeetingFacility;
        return $this;
    }

    /**
     * Gets as mealPlan
     *
     * Used to search for hotels that offer types of meal plan, such as "all-inclusive". This matches against the static property content, not the meal included in the rate.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\MealPlanAType
     */
    public function getMealPlan()
    {
        return $this->mealPlan;
    }

    /**
     * Sets a new mealPlan
     *
     * Used to search for hotels that offer types of meal plan, such as "all-inclusive". This matches against the static property content, not the meal included in the rate.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\MealPlanAType $mealPlan
     * @return self
     */
    public function setMealPlan(\Devlabs91\TravelgateNotify\Models\Ota\HotelSearchCriterionType\MealPlanAType $mealPlan)
    {
        $this->mealPlan = $mealPlan;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }


}

