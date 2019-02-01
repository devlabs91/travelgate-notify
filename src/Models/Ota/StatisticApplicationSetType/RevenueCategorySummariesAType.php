<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType;

/**
 * Class representing RevenueCategorySummariesAType
 */
class RevenueCategorySummariesAType
{

    /**
     * This element has revenue amount data for its revenue category, identified using OpenTravel Code List RCC, such as Room Revenue, Food and Beverage Revenue.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType\RevenueCategorySummariesAType\RevenueCategorySummaryAType[] $revenueCategorySummary
     */
    private $revenueCategorySummary = [
        
    ];

    /**
     * Adds as revenueCategorySummary
     *
     * This element has revenue amount data for its revenue category, identified using OpenTravel Code List RCC, such as Room Revenue, Food and Beverage Revenue.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType\RevenueCategorySummariesAType\RevenueCategorySummaryAType $revenueCategorySummary
     */
    public function addToRevenueCategorySummary(\Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType\RevenueCategorySummariesAType\RevenueCategorySummaryAType $revenueCategorySummary)
    {
        $this->revenueCategorySummary[] = $revenueCategorySummary;
        return $this;
    }

    /**
     * isset revenueCategorySummary
     *
     * This element has revenue amount data for its revenue category, identified using OpenTravel Code List RCC, such as Room Revenue, Food and Beverage Revenue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueCategorySummary($index)
    {
        return isset($this->revenueCategorySummary[$index]);
    }

    /**
     * unset revenueCategorySummary
     *
     * This element has revenue amount data for its revenue category, identified using OpenTravel Code List RCC, such as Room Revenue, Food and Beverage Revenue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueCategorySummary($index)
    {
        unset($this->revenueCategorySummary[$index]);
    }

    /**
     * Gets as revenueCategorySummary
     *
     * This element has revenue amount data for its revenue category, identified using OpenTravel Code List RCC, such as Room Revenue, Food and Beverage Revenue.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType\RevenueCategorySummariesAType\RevenueCategorySummaryAType[]
     */
    public function getRevenueCategorySummary()
    {
        return $this->revenueCategorySummary;
    }

    /**
     * Sets a new revenueCategorySummary
     *
     * This element has revenue amount data for its revenue category, identified using OpenTravel Code List RCC, such as Room Revenue, Food and Beverage Revenue.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType\RevenueCategorySummariesAType\RevenueCategorySummaryAType[] $revenueCategorySummary
     * @return self
     */
    public function setRevenueCategorySummary(array $revenueCategorySummary)
    {
        $this->revenueCategorySummary = $revenueCategorySummary;
        return $this;
    }


}

