<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\StatisticApplicationSetType\RevenueCategorySummariesAType;

/**
 * Class representing RevenueCategorySummaryAType
 */
class RevenueCategorySummaryAType
{

    /**
     * The representation of a revenue category. The following basic Revenue Categories are suggested: RoomRevenue: Total of room revenue at property; FoodRevenue: Total of restaurant and room service revenue at property; MeetingRevenue: Total of meeting room revenue at property; BarRevenue: Total of bar revenue at property; OtherRevenue: Total of other miscellaneous revenue at property; and TotalRevenue: Total of all revenue at property. Refer to OpenTravel Code List Revenue Category Code (RCC). This is a union type which allows you to pass either the OpenTravel Code or a string of length 1 to 16.
     *
     * @property string $revenueCategoryCode
     */
    private $revenueCategoryCode = null;

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Gets as revenueCategoryCode
     *
     * The representation of a revenue category. The following basic Revenue Categories are suggested: RoomRevenue: Total of room revenue at property; FoodRevenue: Total of restaurant and room service revenue at property; MeetingRevenue: Total of meeting room revenue at property; BarRevenue: Total of bar revenue at property; OtherRevenue: Total of other miscellaneous revenue at property; and TotalRevenue: Total of all revenue at property. Refer to OpenTravel Code List Revenue Category Code (RCC). This is a union type which allows you to pass either the OpenTravel Code or a string of length 1 to 16.
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
     * The representation of a revenue category. The following basic Revenue Categories are suggested: RoomRevenue: Total of room revenue at property; FoodRevenue: Total of restaurant and room service revenue at property; MeetingRevenue: Total of meeting room revenue at property; BarRevenue: Total of bar revenue at property; OtherRevenue: Total of other miscellaneous revenue at property; and TotalRevenue: Total of all revenue at property. Refer to OpenTravel Code List Revenue Category Code (RCC). This is a union type which allows you to pass either the OpenTravel Code or a string of length 1 to 16.
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
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param int $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }


}

