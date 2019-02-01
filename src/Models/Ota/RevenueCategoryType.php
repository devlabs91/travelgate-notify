<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing RevenueCategoryType
 *
 * The classifications of revenue data associated with the StayInfo report. A RevenueCategory provide a way to classify guest financial stay data and analyze guest spending for a certain category (e.g., food and beverage, room, etc.)
 * XSD Type: RevenueCategoryType
 */
class RevenueCategoryType
{

    /**
     * Describes the type of revenue generated. Refer to OpenTravel Code List Revenue Category Code (RCC).
     *
     * @property string $revenueCategoryCode
     */
    private $revenueCategoryCode = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RevenueCategoryType\SummaryAmountAType $summaryAmount
     */
    private $summaryAmount = null;

    /**
     * A collection of revenue details.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RevenueDetailType[] $revenueDetails
     */
    private $revenueDetails = null;

    /**
     * Gets as revenueCategoryCode
     *
     * Describes the type of revenue generated. Refer to OpenTravel Code List Revenue Category Code (RCC).
     *
     * @return string
     */
    public function getRevenueCategoryCode()
    {
        return $this->revenueCategoryCode;
    }

    /**
     * Sets a new revenueCategoryCode
     *
     * Describes the type of revenue generated. Refer to OpenTravel Code List Revenue Category Code (RCC).
     *
     * @param string $revenueCategoryCode
     * @return self
     */
    public function setRevenueCategoryCode($revenueCategoryCode)
    {
        $this->revenueCategoryCode = $revenueCategoryCode;
        return $this;
    }

    /**
     * Gets as summaryAmount
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RevenueCategoryType\SummaryAmountAType
     */
    public function getSummaryAmount()
    {
        return $this->summaryAmount;
    }

    /**
     * Sets a new summaryAmount
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RevenueCategoryType\SummaryAmountAType $summaryAmount
     * @return self
     */
    public function setSummaryAmount(\Devlabs91\TravelgateNotify\Models\Ota\RevenueCategoryType\SummaryAmountAType $summaryAmount)
    {
        $this->summaryAmount = $summaryAmount;
        return $this;
    }

    /**
     * Adds as revenueDetail
     *
     * A collection of revenue details.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RevenueDetailType $revenueDetail
     */
    public function addToRevenueDetails(\Devlabs91\TravelgateNotify\Models\Ota\RevenueDetailType $revenueDetail)
    {
        $this->revenueDetails[] = $revenueDetail;
        return $this;
    }

    /**
     * isset revenueDetails
     *
     * A collection of revenue details.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueDetails($index)
    {
        return isset($this->revenueDetails[$index]);
    }

    /**
     * unset revenueDetails
     *
     * A collection of revenue details.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueDetails($index)
    {
        unset($this->revenueDetails[$index]);
    }

    /**
     * Gets as revenueDetails
     *
     * A collection of revenue details.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RevenueDetailType[]
     */
    public function getRevenueDetails()
    {
        return $this->revenueDetails;
    }

    /**
     * Sets a new revenueDetails
     *
     * A collection of revenue details.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RevenueDetailType[] $revenueDetails
     * @return self
     */
    public function setRevenueDetails(array $revenueDetails)
    {
        $this->revenueDetails = $revenueDetails;
        return $this;
    }


}

