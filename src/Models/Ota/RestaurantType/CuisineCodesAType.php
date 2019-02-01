<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\RestaurantType;

/**
 * Class representing CuisineCodesAType
 */
class CuisineCodesAType
{

    /**
     * The code for the type of cuisine served at the restaurant.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\CuisineCodesAType\CuisineCodeAType[] $cuisineCode
     */
    private $cuisineCode = [
        
    ];

    /**
     * Adds as cuisineCode
     *
     * The code for the type of cuisine served at the restaurant.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\CuisineCodesAType\CuisineCodeAType $cuisineCode
     */
    public function addToCuisineCode(\Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\CuisineCodesAType\CuisineCodeAType $cuisineCode)
    {
        $this->cuisineCode[] = $cuisineCode;
        return $this;
    }

    /**
     * isset cuisineCode
     *
     * The code for the type of cuisine served at the restaurant.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCuisineCode($index)
    {
        return isset($this->cuisineCode[$index]);
    }

    /**
     * unset cuisineCode
     *
     * The code for the type of cuisine served at the restaurant.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCuisineCode($index)
    {
        unset($this->cuisineCode[$index]);
    }

    /**
     * Gets as cuisineCode
     *
     * The code for the type of cuisine served at the restaurant.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\CuisineCodesAType\CuisineCodeAType[]
     */
    public function getCuisineCode()
    {
        return $this->cuisineCode;
    }

    /**
     * Sets a new cuisineCode
     *
     * The code for the type of cuisine served at the restaurant.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\RestaurantType\CuisineCodesAType\CuisineCodeAType[] $cuisineCode
     * @return self
     */
    public function setCuisineCode(array $cuisineCode)
    {
        $this->cuisineCode = $cuisineCode;
        return $this;
    }


}

