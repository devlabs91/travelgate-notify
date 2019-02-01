<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing CabinAvailabilityType
 *
 * Construct for holding cabin class information, such as seat availability or meal codes. Can be up to three of these per flight segment or air leg - First, Business and Economy.
 * XSD Type: CabinAvailabilityType
 */
class CabinAvailabilityType
{

    /**
     * A section of an aircraft identified by the service level (e.g., First, Business, Economy)
     *
     * @property string $cabinType
     */
    private $cabinType = null;

    /**
     * Identifies any meal and/or beverage services that are provided.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CabinAvailabilityType\MealAType[] $meal
     */
    private $meal = [
        
    ];

    /**
     * Provides the maximum weight of checked-in bags per passenger in this cabin.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CabinAvailabilityType\BaggageAllowanceAType $baggageAllowance
     */
    private $baggageAllowance = null;

    /**
     * Gets as cabinType
     *
     * A section of an aircraft identified by the service level (e.g., First, Business, Economy)
     *
     * @return string
     */
    public function getCabinType()
    {
        return $this->cabinType;
    }

    /**
     * Sets a new cabinType
     *
     * A section of an aircraft identified by the service level (e.g., First, Business, Economy)
     *
     * @param string $cabinType
     * @return self
     */
    public function setCabinType($cabinType)
    {
        $this->cabinType = $cabinType;
        return $this;
    }

    /**
     * Adds as meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CabinAvailabilityType\MealAType $meal
     */
    public function addToMeal(\Devlabs91\TravelgateNotify\Models\Ota\CabinAvailabilityType\MealAType $meal)
    {
        $this->meal[] = $meal;
        return $this;
    }

    /**
     * isset meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeal($index)
    {
        return isset($this->meal[$index]);
    }

    /**
     * unset meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeal($index)
    {
        unset($this->meal[$index]);
    }

    /**
     * Gets as meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CabinAvailabilityType\MealAType[]
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * Sets a new meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CabinAvailabilityType\MealAType[] $meal
     * @return self
     */
    public function setMeal(array $meal)
    {
        $this->meal = $meal;
        return $this;
    }

    /**
     * Gets as baggageAllowance
     *
     * Provides the maximum weight of checked-in bags per passenger in this cabin.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CabinAvailabilityType\BaggageAllowanceAType
     */
    public function getBaggageAllowance()
    {
        return $this->baggageAllowance;
    }

    /**
     * Sets a new baggageAllowance
     *
     * Provides the maximum weight of checked-in bags per passenger in this cabin.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CabinAvailabilityType\BaggageAllowanceAType $baggageAllowance
     * @return self
     */
    public function setBaggageAllowance(\Devlabs91\TravelgateNotify\Models\Ota\CabinAvailabilityType\BaggageAllowanceAType $baggageAllowance)
    {
        $this->baggageAllowance = $baggageAllowance;
        return $this;
    }


}

